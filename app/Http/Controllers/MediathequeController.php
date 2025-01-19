<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class MediathequeController extends Controller
{
    public function index(Request $request)
    {
        $query = Album::query();

        // Filtrer par type si spécifié
        if ($request->has('type') && in_array($request->type, ['photo', 'video'])) {
            $query->where('type', $request->type);
        }

        $albums = $query->orderBy('created_at', 'desc')->get();

        // Compter le nombre d'albums par type
        $counts = [
            'all' => Album::count(),
            'photo' => Album::where('type', 'photo')->count(),
            'video' => Album::where('type', 'video')->count(),
        ];
        
        return view('pages.mediatheque', [
            'albums' => $albums,
            'currentType' => $request->type ?? 'all',
            'counts' => $counts
        ]);
    }

    public function show(Album $album)
    {
        // Récupérer les médias de l'album
        $media = collect($album->media)->map(function ($mediaPath) {
            $extension = strtolower(pathinfo($mediaPath, PATHINFO_EXTENSION));
            return [
                'path' => $mediaPath,
                'type' => in_array($extension, ['mp4', 'mov', 'avi']) ? 'video' : 'photo',
                'thumbnail' => in_array($extension, ['mp4', 'mov', 'avi'])
                    ? asset('images/video-thumbnail.png') 
                    : asset('storage/' . $mediaPath)
            ];
        });

        return view('pages.album-details', [
            'album' => $album,
            'media' => $media
        ]);
    }
}