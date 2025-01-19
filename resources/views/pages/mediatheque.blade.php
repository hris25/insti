@extends('layouts.app')

@section('title', 'Médiathèque')

@section('content')
<div class="bg-gradient-to-b from-blue-50 to-white">
    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-blue-600 text-white py-24">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-800 opacity-90"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Médiathèque INSTI</h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
                Explorez notre collection de moments inoubliables à travers photos et vidéos
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Filtres -->
        <div class="flex flex-col sm:flex-row justify-between items-center mb-12 space-y-4 sm:space-y-0">
            <h2 class="text-2xl font-semibold text-gray-900">Nos Albums</h2>
            <div class="inline-flex p-1 bg-blue-50 rounded-lg shadow-sm" id="filter-buttons">
                <a href="{{ route('mediatheque.index') }}" 
                   class="px-4 py-2 text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 {{ $currentType === 'all' ? 'bg-white text-blue-700 shadow-sm' : 'text-gray-700 hover:text-blue-700 hover:bg-white hover:shadow-sm' }}">
                    Tous
                    <span class="ml-1 text-xs text-gray-500">({{ $counts['all'] }})</span>
                </a>
                <a href="{{ route('mediatheque.index', ['type' => 'photo']) }}"
                   class="px-4 py-2 text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 {{ $currentType === 'photo' ? 'bg-white text-blue-700 shadow-sm' : 'text-gray-700 hover:text-blue-700 hover:bg-white hover:shadow-sm' }}">
                    Photos
                    <span class="ml-1 text-xs text-gray-500">({{ $counts['photo'] }})</span>
                </a>
                <a href="{{ route('mediatheque.index', ['type' => 'video']) }}"
                   class="px-4 py-2 text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 {{ $currentType === 'video' ? 'bg-white text-blue-700 shadow-sm' : 'text-gray-700 hover:text-blue-700 hover:bg-white hover:shadow-sm' }}">
                    Vidéos
                    <span class="ml-1 text-xs text-gray-500">({{ $counts['video'] }})</span>
                </a>
            </div>
        </div>

        <!-- Grille d'albums -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" id="albums-grid">
            @forelse($albums as $album)
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-1 hover:shadow-xl album-card" data-type="{{ $album->type }}">
                    <div class="relative pb-48">
                        <img class="absolute h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" 
                            src="{{ asset('storage/' . $album->cover_image) }}" 
                            alt="{{ $album->title }}">
                        @if($album->type === 'video')
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="rounded-full bg-white bg-opacity-75 p-3 transform transition-transform duration-300 group-hover:scale-110">
                                    <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M6 4l10 6-10 6V4z"/>
                                    </svg>
                                </div>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                            {{ $album->title }}
                        </h3>
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center text-sm text-gray-500">
                                <svg class="w-5 h-5 mr-1.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                {{ $album->getMediaCount() }} 
                                {{ Str::plural('média', $album->getMediaCount()) }}
                            </span>
                            <a href="{{ route('mediatheque.show', $album) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none transition-colors duration-300">
                                Voir l'album
                                <svg class="w-4 h-4 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full flex flex-col items-center justify-center py-16 px-4 bg-white rounded-lg shadow-sm">
                    <div class="rounded-full bg-blue-100 p-6 mb-4">
                        <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-1">Aucun album disponible</h3>
                    <p class="text-gray-500 text-center max-w-sm">
                        Nous n'avons pas encore d'albums à afficher. Revenez bientôt pour découvrir nos nouveaux contenus !
                    </p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('[type="button"]');
    const albumsGrid = document.getElementById('albums-grid');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Retirer la classe active de tous les boutons
            filterButtons.forEach(btn => {
                btn.classList.remove('bg-white', 'shadow-sm', 'text-blue-700');
                btn.classList.add('text-gray-700');
            });
            
            // Ajouter la classe active au bouton cliqué
            this.classList.add('bg-white', 'shadow-sm', 'text-blue-700');
            this.classList.remove('text-gray-700');
            
            // Filtrer les albums
            const filter = this.getAttribute('data-filter');
            const albumCards = albumsGrid.children;
            
            albumCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-type') === filter) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        });
    });
});
</script>
@endpush