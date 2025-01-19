<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteAdminController extends Controller
{
    public function index()
    {
        $actualites = Actualite::all();
        return view('admin.actualites.index', compact('actualites'));
    }

    public function create()
    {
        return view('admin.actualites.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $imagePath = $request->file('image')->store('actualites', 'public');

        Actualite::create([
            'image' => $imagePath,
            'titre' => $request->titre,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.actualites.index')->with('success', 'Actualité ajoutée avec succès.');
    }

    public function edit(Actualite $actualite)
    {
        return view('admin.actualites.edit', compact('actualite'));
    }

    public function update(Request $request, Actualite $actualite)
    {
        $request->validate([
            'image' => 'nullable|image',
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('actualites', 'public');
            $actualite->image = $imagePath;
        }

        $actualite->update([
            'titre' => $request->titre,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.actualites.index')->with('success', 'Actualité mise à jour avec succès.');
    }

    public function destroy(Actualite $actualite)
    {
        $actualite->delete();
        return redirect()->route('admin.actualites.index')->with('success', 'Actualité supprimée avec succès.');
    }
}