<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class VieEstudiantineController extends Controller
{
    public function index()
    {
        $clubs = Club::all();
        return view('pages.vie-estudiantine', compact('clubs'));
    }
}