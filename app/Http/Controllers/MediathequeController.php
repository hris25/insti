<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediathequeController extends Controller
{
    public function index()
    {
        return view('pages.mediatheque');
    }
}