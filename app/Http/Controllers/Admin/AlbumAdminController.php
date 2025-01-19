<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AlbumAdminController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('admin.albums.index', compact('albums'));
    }

    public function create()
    {
        return view('admin.albums.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'cover_image' => 'required|image',
            'type' => 'required|in:photo,video',
            'media' => 'required|array',
            'media.*' => 'required|file',
        ]);

        // Créer un dossier pour l'album
        $albumFolder = Str::slug($request->title);
        $coverImagePath = $request->file('cover_image')->store("albums/{$albumFolder}", 'public');

        $mediaPaths = [];
        foreach ($request->file('media') as $media) {
            $mediaPaths[] = $media->store("albums/{$albumFolder}", 'public');
        }

        Album::create([
            'title' => $request->title,
            'cover_image' => $coverImagePath,
            'type' => $request->type,
            'media' => $mediaPaths,
        ]);

        return redirect()->route('admin.albums.index')->with('success', 'Album créé avec succès.');
    }

    public function edit(Album $album)
    {
        return view('admin.albums.edit', compact('album'));
    }

    public function update(Request $request, Album $album)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'cover_image' => 'nullable|image',
            'type' => 'required|in:photo,video',
            'media' => 'nullable|array',
            'media.*' => 'nullable|file',
        ]);

        if ($request->hasFile('cover_image')) {
            $albumFolder = Str::slug($album->title);
            $coverImagePath = $request->file('cover_image')->store("albums/{$albumFolder}", 'public');
            $album->cover_image = $coverImagePath;
        }

        if ($request->hasFile('media')) {
            $albumFolder = Str::slug($album->title);
            $mediaPaths = [];
            foreach ($request->file('media') as $media) {
                $mediaPaths[] = $media->store("albums/{$albumFolder}", 'public');
            }
            $album->media = $mediaPaths;
        }

        $album->update([
            'title' => $request->title,
            'type' => $request->type,
        ]);

        return redirect()->route('admin.albums.index')->with('success', 'Album mis à jour avec succès.');
    }

    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('admin.albums.index')->with('success', 'Album supprimé avec succès.');
    }

    /**
     * Supprimer un média spécifique d'un album
     *
     * @param Request $request
     * @param Album $album
     * @return JsonResponse
     */
    public function deleteMedia(Request $request, Album $album)
    {
        try {
            $mediaPath = $request->input('media');
            
            // Vérifier si le média appartient à l'album
            $media = $album->media;
            if (!in_array($mediaPath, $media)) {
                return response()->json(['success' => false, 'message' => 'Media not found'], 404);
            }

            // Supprimer le fichier du stockage
            Storage::disk('public')->delete($mediaPath);

            // Mettre à jour le tableau des médias de l'album
            $media = array_diff($media, [$mediaPath]);
            $album->media = array_values($media);
            $album->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}