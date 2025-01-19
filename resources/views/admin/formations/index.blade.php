<!-- filepath: /E:/insti_laravel-main/insti_laravel-main/resources/views/admin/formations/index.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Liste des formations')

@section('header', 'Liste des formations')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Formations</h1>
    <a href="{{ route('admin.formations.create') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Ajouter une formation</a>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">Titre</th>
                    <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">Catégorie</th>
                    <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">Diplôme</th>
                    <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formations as $formation)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border-b text-sm text-gray-700">{{ $formation->title }}</td>
                        <td class="py-2 px-4 border-b text-sm text-gray-700">{{ $formation->category }}</td>
                        <td class="py-2 px-4 border-b text-sm text-gray-700">{{ $formation->diploma }}</td>
                        <td class="py-2 px-4 border-b text-sm text-gray-700">
                            <a href="{{ route('admin.formations.edit', $formation->id) }}" class="inline-block px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Modifier</a>
                            <form action="{{ route('admin.formations.destroy', $formation->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-block px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection