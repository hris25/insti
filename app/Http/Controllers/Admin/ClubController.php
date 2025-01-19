<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = Club::all();
        return view('admin.clubs.index', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'activites' => 'required|array',
            'activites.*' => 'required|string',
            'horaires' => 'required|string',
            'lieu' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('clubs', 'public');
        }

        $validatedData['actif'] = $request->has('actif');

        Club::create($validatedData);

        return redirect()->route('admin.clubs.index')
            ->with('success', 'Club créé avec succès.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Club $club)
    {
        return view('admin.clubs.edit', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Club $club)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'activites' => 'required|array',
            'activites.*' => 'required|string',
            'horaires' => 'required|string',
            'lieu' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($club->image) {
                Storage::disk('public')->delete($club->image);
            }
            
            $validatedData['image'] = $request->file('image')->store('clubs', 'public');
        }

        $validatedData['actif'] = $request->has('actif');

        $club->update($validatedData);

        return redirect()->route('admin.clubs.index')
            ->with('success', 'Club mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Club $club)
    {
        if ($club->image) {
            Storage::disk('public')->delete($club->image);
        }
        
        $club->delete();

        return redirect()->route('admin.clubs.index')
            ->with('success', 'Club supprimé avec succès.');
    }
}
