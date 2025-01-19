<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('pages.mediatheque', compact('albums'));
    }

    public function getMedia(Album $album)
{
    return response()->json([
        'title' => $album->title,
        'type' => $album->type,
        'media' => $album->media,
    ]);
}
}
