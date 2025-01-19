<!-- filepath: /E:/insti_laravel-main/insti_laravel-main/resources/views/admin/albums/edit.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Gestion des Albums')

@section('header', 'Gestion des Albums')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Modifier l'album</h1>
            <a href="{{ route('admin.albums.index') }}" class="text-blue-600 hover:text-blue-800">
                Retour à la liste
            </a>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{ route('admin.albums.update', $album) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Titre -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $album->title) }}" required
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
                        <option value="photo" {{ old('type', $album->type) == 'photo' ? 'selected' : '' }}>Photo</option>
                        <option value="video" {{ old('type', $album->type) == 'video' ? 'selected' : '' }}>Vidéo</option>
                    </select>
                    @error('type')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image de couverture -->
                <div>
                    <label for="cover_image" class="block text-sm font-medium text-gray-700 mb-1">Image de couverture</label>
                    @if($album->cover_image)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $album->cover_image) }}" alt="Image de couverture actuelle" 
                                class="w-32 h-32 object-cover rounded-lg">
                        </div>
                    @endif
                    <input type="file" name="cover_image" id="cover_image" accept="image/*"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('cover_image') border-red-500 @enderror">
                    <p class="mt-1 text-sm text-gray-500">Format recommandé : JPG, PNG. Taille max : 2MB</p>
                    @error('cover_image')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Médias existants -->
                @if($album->media && count($album->media) > 0)
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-3">Médias existants</label>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            @foreach($album->media as $media)
                                <div class="relative group">
                                    @if($album->type == 'photo')
                                        <img src="{{ asset('storage/' . $media) }}" alt="Media" class="w-full h-32 object-cover rounded-lg">
                                    @else
                                        <video class="w-full h-32 object-cover rounded-lg">
                                            <source src="{{ asset('storage/' . $media) }}" type="video/mp4">
                                            Votre navigateur ne supporte pas la lecture de vidéos.
                                        </video>
                                    @endif
                                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                        <button type="button" onclick="deleteMedia('{{ $media }}')"
                                            class="text-white bg-red-600 p-2 rounded-full hover:bg-red-700">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Ajouter de nouveaux médias -->
                <div>
                    <label for="media" class="block text-sm font-medium text-gray-700 mb-1">Ajouter des médias</label>
                    <input type="file" name="media[]" id="media" accept="image/*,video/*" multiple
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
                        Mettre à jour
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function deleteMedia(mediaPath) {
    if (confirm('Êtes-vous sûr de vouloir supprimer ce média ?')) {
        // Envoyer une requête AJAX pour supprimer le média
        fetch(`{{ route('admin.albums.deleteMedia', $album->id) }}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ media: mediaPath })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Recharger la page pour refléter les changements
                window.location.reload();
            } else {
                alert('Une erreur est survenue lors de la suppression du média.');
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            alert('Une erreur est survenue lors de la suppression du média.');
        });
    }
}
</script>
@endsection