<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Actualite;

class HomeController extends Controller
{
    public function index()
    {
        $actualites = Actualite::all();
        return view('pages.home', compact('actualites'));
    }
}