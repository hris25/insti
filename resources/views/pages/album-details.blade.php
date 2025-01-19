@extends('layouts.app')

@section('title', $album->title)

@section('content')
<div class="bg-gradient-to-b from-blue-50 to-white min-h-screen">
    <!-- Hero Section avec l'image de couverture -->
    <div class="relative h-96">
        <div class="absolute inset-0">
            <img src="{{ asset('storage/' . $album->cover_image) }}" alt="{{ $album->title }}" 
                 class="w-full h-full object-cover bg-gray-900">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-end h-full pb-16">
            <a href="{{ route('mediatheque.index') }}" class="inline-flex items-center text-white mb-8 hover:text-blue-200 transition-colors duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Retour à la médiathèque
            </a>
            <h1 class="text-4xl font-bold text-white mb-4">{{ $album->title }}</h1>
            <div class="flex items-center text-white">
                <span class="inline-flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    {{ count($media) }} {{ Str::plural('média', count($media)) }}
                </span>
            </div>
        </div>
    </div>

    <!-- Grille de médias -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @forelse($media as $index => $item)
                <div class="relative group cursor-pointer media-item" 
                     data-type="{{ $item['type'] }}"
                     data-path="{{ asset('storage/' . $item['path']) }}"
                     data-index="{{ $index }}">
                    <div class="relative pb-[100%] rounded-lg overflow-hidden bg-gray-100">
                        <img src="{{ $item['thumbnail'] }}" 
                             alt="Media" 
                             class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                        
                        @if($item['type'] === 'video')
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="rounded-full bg-white bg-opacity-75 p-3 transform transition-transform duration-300 group-hover:scale-110">
                                    <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M6 4l10 6-10 6V4z"/>
                                    </svg>
                                </div>
                            </div>
                        @endif
                        
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-opacity duration-300"></div>
                    </div>
                </div>
            @empty
                <div class="col-span-full flex flex-col items-center justify-center py-16">
                    <div class="rounded-full bg-blue-100 p-6 mb-4">
                        <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-1">Aucun média</h3>
                    <p class="text-gray-500 text-center max-w-sm">
                        Cet album ne contient pas encore de médias.
                    </p>
                </div>
            @endforelse
        </div>
    </div>
</div>

<!-- Modal pour afficher les médias -->
<div id="mediaModal" class="fixed inset-0 z-50 hidden">
    <div class="flex items-center justify-center min-h-screen">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-black opacity-95"></div>
        </div>

        <div class="relative w-full h-full flex items-center justify-center">
            <!-- Bouton fermer -->
            <button type="button" class="absolute top-4 right-4 text-white hover:text-gray-300 z-50 p-2" onclick="closeModal()">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Boutons de navigation -->
            <button type="button" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 z-50 p-4" onclick="navigateMedia('prev')">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button type="button" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 z-50 p-4" onclick="navigateMedia('next')">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Contenu du modal -->
            <div id="modalContent" class="w-full h-full flex items-center justify-center px-16"></div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mediaItems = document.querySelectorAll('.media-item');
    const modal = document.getElementById('mediaModal');
    const modalContent = document.getElementById('modalContent');
    let currentIndex = 0;
    const totalItems = mediaItems.length;

    mediaItems.forEach(item => {
        item.addEventListener('click', function() {
            currentIndex = parseInt(this.getAttribute('data-index'));
            showMedia(currentIndex);
            modal.classList.remove('hidden');
        });
    });

    // Gérer les touches du clavier
    document.addEventListener('keydown', function(e) {
        if (modal.classList.contains('hidden')) return;
        
        switch(e.key) {
            case 'ArrowLeft':
                navigateMedia('prev');
                break;
            case 'ArrowRight':
                navigateMedia('next');
                break;
            case 'Escape':
                closeModal();
                break;
        }
    });
});

function showMedia(index) {
    const item = document.querySelector(`.media-item[data-index="${index}"]`);
    const type = item.getAttribute('data-type');
    const path = item.getAttribute('data-path');
    const modalContent = document.getElementById('modalContent');
    
    if (type === 'video') {
        modalContent.innerHTML = `
            <div class="w-full max-w-7xl mx-auto bg-black rounded-lg overflow-hidden">
                <video controls class="w-full h-full">
                    <source src="${path}" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture de vidéos.
                </video>
            </div>
        `;
    } else {
        modalContent.innerHTML = `
            <div class="w-full h-[90vh] max-w-[1920px] mx-auto relative">
                <img src="${path}" 
                     alt="Media" 
                     class="w-full h-full object-contain"
                     style="background-color: rgba(0,0,0,0.95);">
            </div>
        `;
    }
}

function navigateMedia(direction) {
    const totalItems = document.querySelectorAll('.media-item').length;
    let newIndex;
    
    if (direction === 'prev') {
        newIndex = currentIndex - 1;
        if (newIndex < 0) newIndex = totalItems - 1;
    } else {
        newIndex = currentIndex + 1;
        if (newIndex >= totalItems) newIndex = 0;
    }
    
    currentIndex = newIndex;
    showMedia(newIndex);
}

function closeModal() {
    const modal = document.getElementById('mediaModal');
    const modalContent = document.getElementById('modalContent');
    
    modal.classList.add('hidden');
    modalContent.innerHTML = '';
}
</script>
@endpush
