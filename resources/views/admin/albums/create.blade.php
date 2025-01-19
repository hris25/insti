<!-- filepath: /E:/insti_laravel-main/insti_laravel-main/resources/views/admin/albums/create.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Créer un album')

@section('header', 'Créer un album')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-4">Créer un Album</h1>
        <form action="{{ route('admin.albums.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div class="form-group">
                <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
                <input type="text" name="title" class="mt-1 block w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 h-10" required>
            </div>
            <div class="form-group">
                <label for="cover_image" class="block text-sm font-medium text-gray-700">Image de couverture</label>
                <input type="file" name="cover_image" class="mt-1 block w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 h-10" required>
            </div>
            <div class="form-group">
                <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                <select name="type" class="mt-1 block w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 h-10" required>
                    <option value="photo">Photo</option>
                    <option value="video">Vidéo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="media" class="block text-sm font-medium text-gray-700">Médias</label>
                <input type="file" name="media[]" class="mt-1 block w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 h-10" multiple required>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md h-10">Créer</button>
        </form>
    </div>
</div>
@endsection