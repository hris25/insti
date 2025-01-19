<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::all();
        return view('pages.formations', compact('formations'));
    }

}