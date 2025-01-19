<!-- filepath: /E:/insti_laravel-main/insti_laravel-main/resources/views/admin/actualites/edit.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Modifier une actualité')

@section('header', 'Modifier une actualité')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-4">Modifier une Actualité</h1>
        <form action="{{ route('admin.actualites.update', $actualite->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titre" class="block text-sm font-medium text-gray-700">Titre</label>
                <input type="text" name="titre" value="{{ $actualite->titre }}" class="mt-1 block w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 h-10" required>
            </div>
            <div class="form-group">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" class="mt-1 block w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>{{ $actualite->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" class="mt-1 block w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 h-10">
                @if ($actualite->image)
                    <img src="{{ asset('storage/' . $actualite->image) }}" alt="Image de l'actualité" class="mt-2 w-32 h-32 object-cover">
                @endif
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md h-10">Mettre à jour</button>
        </form>
    </div>
</div>
@endsection