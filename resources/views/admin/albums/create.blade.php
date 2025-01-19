@extends('admin.layouts.app')

@section('title', 'Gestion des Albums')

@section('header', 'Gestion des Albums')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Créer un album</h1>
            <a href="{{ route('admin.albums.index') }}" class="text-blue-600 hover:text-blue-800">
                Retour à la liste
            </a>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{ route('admin.albums.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Titre -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('title') border-red-500 @enderror">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Type -->
                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Type</label>
                    <select name="type" id="type" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('type') border-red-500 @enderror">
                        <option value="">Sélectionnez un type</option>
                        <option value="photo" {{ old('type') == 'photo' ? 'selected' : '' }}>Photo</option>
                        <option value="video" {{ old('type') == 'video' ? 'selected' : '' }}>Vidéo</option>
                    </select>
                    @error('type')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image de couverture -->
                <div>
                    <label for="cover_image" class="block text-sm font-medium text-gray-700 mb-1">Image de couverture</label>
                    <input type="file" name="cover_image" id="cover_image" accept="image/*" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('cover_image') border-red-500 @enderror">
                    <p class="mt-1 text-sm text-gray-500">Format recommandé : JPG, PNG. Taille max : 2MB</p>
                    @error('cover_image')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Médias -->
                <div>
                    <label for="media" class="block text-sm font-medium text-gray-700 mb-1">Médias</label>
                    <input type="file" name="media[]" id="media" accept="image/*,video/*" multiple required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('media') border-red-500 @enderror">
                    <p class="mt-1 text-sm text-gray-500">
                        Formats recommandés : JPG, PNG pour les photos; MP4 pour les vidéos. Taille max : 2MB par fichier
                    </p>
                    @error('media')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    @error('media.*')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.albums.index') }}"
                        class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                        Annuler
                    </a>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                        Créer l'album
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection