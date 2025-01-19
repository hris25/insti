@extends('layouts.app')

@section('title', 'Vie Estudiantine')

@section('content')
<div class="bg-gradient-to-b from-blue-50 to-white">
    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-blue-600 text-white py-24">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-800 opacity-90"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Vie Estudiantine à l'INSTI</h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
                Découvrez une expérience universitaire enrichissante et épanouissante
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Introduction -->
        <div class="text-center mb-16">
            <p class="text-lg text-gray-600 max-w-4xl mx-auto">
                La vie étudiante à l'INSTI est riche en opportunités d'apprentissage, de développement personnel et de moments de partage.
            </p>
        </div>

        <!-- Événements et Activités -->
        <div class="mb-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Événements et Activités</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <div class="relative h-48">
                        <img src="{{ asset('images/events/integration.jpg') }}" alt="Événements d'intégration" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <h3 class="text-xl font-semibold mb-1">Semaine d'Intégration</h3>
                            <p class="text-sm text-gray-200">Septembre</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600">Une semaine riche en activités pour accueillir les nouveaux étudiants et créer des liens durables.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <div class="relative h-48">
                        <img src="{{ asset('images/events/gala.jpg') }}" alt="Gala annuel" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <h3 class="text-xl font-semibold mb-1">Gala Annuel</h3>
                            <p class="text-sm text-gray-200">Décembre</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600">Une soirée prestigieuse célébrant les réussites de l'année avec dîner et spectacles.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <div class="relative h-48">
                        <img src="{{ asset('images/events/hackathon.jpg') }}" alt="Hackathon" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <h3 class="text-xl font-semibold mb-1">Hackathon INSTI</h3>
                            <p class="text-sm text-gray-200">Mars</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600">48h de coding challenge pour développer des solutions innovantes en équipe.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Clubs et Associations -->
        <div class="mb-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Clubs et Associations</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($clubs as $club)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-6">
                        <img src="{{ asset('storage/' . $club->image) }}" alt="{{ $club->nom }}" class="w-16 h-16 mx-auto mb-4">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2 text-center">{{ $club->nom }}</h3>
                        <p class="text-gray-600 text-center mb-4">
                            {{ $club->description }}
                        </p>
                        <button class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">
                            Plus de détails
                        </button>
                        <div class="club-details hidden mt-4 space-y-4 border-t pt-4">
                            <div class="detail-item">
                                <h4 class="font-semibold text-gray-900">Activités :</h4>
                                <ul class="list-disc pl-5 text-gray-600">
                                    @foreach($club->activites as $activite)
                                        <li>{{ $activite }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="detail-item">
                                <h4 class="font-semibold text-gray-900">Horaires :</h4>
                                <p class="text-gray-600">{{ $club->horaires }}</p>
                            </div>
                            <div class="detail-item">
                                <h4 class="font-semibold text-gray-900">Lieu :</h4>
                                <p class="text-gray-600">{{ $club->lieu }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Témoignages -->
        <div class="mb-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Témoignages d'Étudiants</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden p-6">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center">
                            <span class="text-xl font-bold text-blue-600">S</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold">Sarah Kouassi</h4>
                            <p class="text-sm text-gray-500">3ème année Génie Logiciel</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "L'ambiance sur le campus est extraordinaire. Les clubs et associations m'ont permis de développer mes compétences tout en me faisant des amis pour la vie."
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden p-6">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center">
                            <span class="text-xl font-bold text-blue-600">M</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold">Mohamed Sylla</h4>
                            <p class="text-sm text-gray-500">2ème année Réseaux</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Les événements organisés par le BDE sont toujours mémorables. C'est l'occasion parfaite de rencontrer des étudiants d'autres filières."
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden p-6">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center">
                            <span class="text-xl font-bold text-blue-600">A</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold">Aïcha Diallo</h4>
                            <p class="text-sm text-gray-500">1ère année Maintenance</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "La semaine d'intégration m'a tout de suite mise à l'aise. Les anciens sont très accueillants et toujours prêts à nous aider."
                    </p>
                </div>
            </div>
        </div>

        <!-- Vie sur le Campus -->
        <div class="mb-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Vie sur le Campus</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Infrastructures</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Bibliothèque moderne et espaces de travail</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Laboratoires informatiques équipés</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Installations sportives</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Services aux Étudiants</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Accompagnement pédagogique personnalisé</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Service d'orientation professionnelle</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Soutien à l'entrepreneuriat étudiant</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

         <!-- Engagement et Réussite Étudiante -->
         <div class="mb-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Engagement et Réussite Étudiante</h2>
            <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-xl overflow-hidden">
                <div class="p-8 md:p-12">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="text-white">
                            <h3 class="text-2xl font-semibold mb-4">Construisez Votre Avenir avec l'INSTI</h3>
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="ml-4 text-lg text-blue-100">90% de nos diplômés trouvent un emploi dans les 6 mois</p>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="ml-4 text-lg text-blue-100">Plus de 50 entreprises partenaires</p>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="ml-4 text-lg text-blue-100">Nombreux projets étudiants primés</p>
                                </div>
                            </div>
                            <div class="mt-8">
                                <a href="{{ route('formations') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50 transition-colors duration-300">
                                    Découvrir nos formations
                                    <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white/10 p-6 rounded-lg backdrop-blur-sm">
                                <div class="text-4xl font-bold text-white mb-2">15+</div>
                                <p class="text-blue-100">Années d'excellence</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-lg backdrop-blur-sm">
                                <div class="text-4xl font-bold text-white mb-2">1000+</div>
                                <p class="text-blue-100">Diplômés</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-lg backdrop-blur-sm">
                                <div class="text-4xl font-bold text-white mb-2">25+</div>
                                <p class="text-blue-100">Clubs étudiants</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-lg backdrop-blur-sm">
                                <div class="text-4xl font-bold text-white mb-2">100%</div>
                                <p class="text-blue-100">Satisfaction étudiante</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('button');
        buttons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const details = this.nextElementSibling;
                if (!details || !details.classList.contains('club-details')) return;
                
                const isHidden = details.classList.contains('hidden');
                
                // Ferme tous les détails ouverts
                document.querySelectorAll('.club-details').forEach(detail => {
                    detail.classList.add('hidden');
                    const btn = detail.previousElementSibling;
                    if (btn) btn.textContent = 'Plus de détails';
                });

                if (isHidden) {
                    details.classList.remove('hidden');
                    this.textContent = 'Moins de détails';
                } else {
                    details.classList.add('hidden');
                    this.textContent = 'Plus de détails';
                }
            });
        });
    });
</script>
@endpush