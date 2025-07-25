<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Actualite;
use App\Models\Formation;

class HomeController extends Controller
{
    public function index()
    {
        $actualites = Actualite::all();
        $formations = Formation::all();
        return view('pages.home', compact('actualites', 'formations'));
    }
}