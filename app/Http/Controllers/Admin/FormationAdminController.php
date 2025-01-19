<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Formation;
use Illuminate\Http\Request;

class FormationAdminController extends Controller
{
    public function index()
    {
        $formations = Formation::all();
        return view('admin.formations.index', compact('formations'));
    }

    public function create()
    {
        return view('admin.formations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'diploma' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'requirements' => 'required',
            'career_opportunities' => 'required|array',
            'career_opportunities.*' => 'required|string',
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('formations', 'public');

        Formation::create([
            'title' => $request->title,
            'category' => $request->category,
            'diploma' => $request->diploma,
            'description' => $request->description,
            'duration' => $request->duration,
            'requirements' => $request->requirements,
            'career_opportunities' => json_encode($request->career_opportunities),
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.formations.index')->with('success', 'Formation ajoutée avec succès.');
    }

    public function edit(Formation $formation)
    {
        return view('admin.formations.edit', compact('formation'));
    }

    public function update(Request $request, Formation $formation)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'diploma' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'requirements' => 'required',
            'career_opportunities' => 'required|array',
            'career_opportunities.*' => 'required|string',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('formations', 'public');
            $formation->image = $imagePath;
        }

        $formation->update([
            'title' => $request->title,
            'category' => $request->category,
            'diploma' => $request->diploma,
            'description' => $request->description,
            'duration' => $request->duration,
            'requirements' => $request->requirements,
            'career_opportunities' => json_encode($request->career_opportunities),
        ]);

        return redirect()->route('admin.formations.index')->with('success', 'Formation mise à jour avec succès.');
    }

    public function destroy(Formation $formation)
    {
        $formation->delete();
        return redirect()->route('admin.formations.index')->with('success', 'Formation supprimée avec succès.');
    }
}
