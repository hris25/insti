<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;
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
}