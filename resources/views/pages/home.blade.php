@extends('layouts.app')
@section('title', 'Présentation')
@section('content')
<!-- Diaporama d'actualités -->
<section class="carousel">
    <div class="slides">
        @foreach ($actualites as $actualite)
            <div class="slide {{ $loop->first ? 'active' : '' }}">
                <img class="object-center" src="{{ asset('storage/' . $actualite->image) }}" alt="{{ $actualite->titre }}">
                <div class="slide-content">
                    <h3>{{ $actualite->titre }}</h3>
                    <p>{{ $actualite->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <button class="prev">
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
        </svg>
    </button>
    <button class="next">
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"/>
        </svg>
    </button>
</section>

<!-- Nos Statistiques -->
<section class="py-8 bg-gray-100 relative">
    <!-- Motif de fond décoratif exact -->
    <div class="absolute inset-0 opacity-20">
        <svg class="w-full h-full" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="diagonal-pattern" patternUnits="userSpaceOnUse" width="30" height="30">
                    <path d="M0,30 L30,0" stroke="#60A5FA" stroke-width="2" opacity="0.5"/>
                    <path d="M-7,7 L7,-7" stroke="#60A5FA" stroke-width="2" opacity="0.5"/>
                    <path d="M23,37 L37,23" stroke="#60A5FA" stroke-width="2" opacity="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#diagonal-pattern)"/>
        </svg>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        
        <div class="w-24 h-2 bg-blue-600 mb-4"></div>
        
        
        <h2 class="text-lg font-bold text-gray-900 mb-2 tracking-wide">NOS STATISTIQUES</h2>
        <p class="text-xs text-gray-700 mb-8 max-w-4xl leading-relaxed">
            Les valeurs et efforts de l'INSTI sont reconnus et félicités par plusieurs partenaires dont les industries (La SBIB, la CEB, la cimenterie LAFARGE et autres) qui entretiennent une étroite collaboration avec notre institut
        </p>
        
        
        <div class="flex justify-between items-center max-w-6xl mx-auto">
            
            <div class="flex items-center">
                
                <svg class="w-12 h-12 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    <path d="M16.5 12c1.38 0 2.5-1.12 2.5-2.5S17.88 7 16.5 7 14 8.12 14 9.5s1.12 2.5 2.5 2.5zm0 1c-1.67 0-5 .84-5 2.5V17h10v-1.5c0-1.66-3.33-2.5-5-2.5z"/>
                </svg>
                <div>
                    <div class="text-2xl font-bold text-blue-600">1447</div>
                    <p class="text-xs text-gray-700 uppercase font-semibold leading-tight">ÉTUDIANTS<br>EN<br>FORMATION</p>
                </div>
            </div>
            
            
            <div class="w-px h-16 bg-gray-400 mx-6"></div>
            
            
            <div class="flex items-center">
                
                <svg class="w-12 h-12 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M6.5 10h-2v7h2v-7zm6 0h-2v7h2v-7zm8.5 9H2v2h19v-2zm-2.5-9h-2v7h2v-7zm-7-6.74L16.71 6H6.29l5.21-2.74m0-2.26L2 6v2h19V6l-9.5-5z"/>
                </svg>
                <div>
                    <div class="text-2xl font-bold text-blue-600">06</div>
                    <p class="text-xs text-gray-700 uppercase font-semibold">SPÉCIALITÉS</p>
                </div>
            </div>
            
            
            <div class="w-px h-16 bg-gray-400 mx-6"></div>
            
            
            <div class="flex items-center">
                
                <svg class="w-12 h-12 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                </svg>
                <div>
                    <div class="text-2xl font-bold text-blue-600">2001</div>
                    <p class="text-xs text-gray-700 uppercase font-semibold leading-tight">ANNÉE<br>DE<br>CRÉATION</p>
                </div>
            </div>
            
            
            <div class="w-px h-16 bg-gray-400 mx-6"></div>
            
            
            <div class="flex items-center">
                
                <svg class="w-12 h-12 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                </svg>
                <div>
                    <div class="text-2xl font-bold text-blue-600">800+</div>
                    <p class="text-xs text-gray-700 uppercase font-semibold leading-tight">ÉTUDIANTS<br>DIPLÔMÉS</p>
                </div>
            </div>
            
            
            <div class="w-px h-16 bg-gray-400 mx-6"></div>
            
            
            <div class="flex items-center">
                
                <svg class="w-12 h-12 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L12 2L3 7V9C3 10.1 3.9 11 5 11V16.5C5 17.3 5.7 18 6.5 18S8 17.3 8 16.5V13H16V16.5C16 17.3 16.7 18 17.5 18S19 17.3 19 16.5V11C20.1 11 21 10.1 21 9Z"/>
                    
                    <circle cx="9" cy="9" r="1.5" fill="none" stroke="currentColor" stroke-width="0.5"/>
                    <circle cx="15" cy="9" r="1.5" fill="none" stroke="currentColor" stroke-width="0.5"/>
                    <path d="M10.5 9h3" stroke="currentColor" stroke-width="0.5"/>
                </svg>
                <div>
                    <div class="text-2xl font-bold text-blue-600">176</div>
                    <p class="text-xs text-gray-700 uppercase font-semibold leading-tight">ENSEIGNANTS<br>CHERCHEURS</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-12 bg-gray-200 relative overflow-hidden">
    
    <div class="absolute inset-0 opacity-25">
        <svg class="w-full h-full" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="director-diagonal-lines" patternUnits="userSpaceOnUse" width="35" height="35">
                    <path d="M0,35 L35,0" stroke="#60A5FA" stroke-width="2" opacity="0.4"/>
                    <path d="M-8,8 L8,-8" stroke="#60A5FA" stroke-width="2" opacity="0.4"/>
                    <path d="M27,43 L43,27" stroke="#60A5FA" stroke-width="2" opacity="0.4"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#director-diagonal-lines)"/>
        </svg>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        
        <div class="flex items-center">
            
            <div class="flex-1 p-8 flex flex-col justify-center">
                
                <div class="w-20 h-1.5 bg-blue-600 mb-4"></div>
                
                <div class="mb-4 flex items-center">
                    <div class="w-6 h-px bg-blue-600 mr-3"></div>
                    <span class="text-blue-600 font-semibold text-sm">Institut National de Technologie Industrielle</span>
                </div>
                
                <h2 class="text-xl lg:text-2xl font-bold text-blue-900 mb-6">
                    Nous cultivons l'esprit d'innovation technologique et d'entreprenariat
                </h2>
                
                <div class="flex items-center space-x-4">
                    
                    <div class="flex-shrink-0">
                        <div class="w-24 h-32 rounded-lg overflow-hidden shadow-sm">
                            <img src="{{ asset('images/directrice.jpg') }}" alt="Directrice" class="w-full h-full object-cover" 
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                            <div class="w-full h-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center" style="display: none;">
                                <img src="https://via.placeholder.com/150x200/4F46E5/FFFFFF?text=Directrice" alt="Directrice" class="w-full h-full object-cover rounded">
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="flex-1">
                        <p class="text-gray-700 text-sm leading-relaxed mb-4">
                            L'INSTI, en collaboration avec ses partenaires, vous ouvre la porte de l'auto emploi en s'appuyant sur trois leviers: une formation de qualité, son unité d'application et le Programme entreprendre à l'école.
                        </p>
                        
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-full font-semibold text-sm transition-colors duration-300">
                            Mot de la Directrice
                        </button>
                    </div>
                </div>
            </div>
            
            
            <div class="flex-1">
                <div class="aspect-video rounded-lg overflow-hidden">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/PpeKtTnRbEA?rel=0"
                        title="Mot de la Directrice" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        
        <div class="bg-white rounded-lg shadow-lg p-8">
            
            <div class="text-center mb-12">
                <div class="w-full h-1 bg-blue-600 mb-6"></div>
                <h2 class="text-2xl lg:text-3xl font-bold text-blue-900 uppercase tracking-wide">
                    ACTUALITÉS
                </h2>
            </div>
            
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse($actualites->take(4) as $actualite)
                    <div class="overflow-hidden">
                        <div class="aspect-video overflow-hidden rounded-lg mb-3">
                            <img src="{{ asset('storage/' . $actualite->image) }}" alt="{{ $actualite->titre }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div>
                            <h4 class="text-gray-900 font-semibold text-sm mb-1">{{ $actualite->titre }}</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                {{ Str::limit($actualite->description, 100) }}
                            </p>
                        </div>
                    </div>
                @empty
                    
                    <div class="overflow-hidden">
                        <div class="aspect-video overflow-hidden rounded-lg mb-3">
                            <img src="{{ asset('images/events/integration.jpg') }}" alt="Intégration des étudiants" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Information actualité en rapport avec la vie étudiante
                            </p>
                        </div>
                    </div>
                    
                    <div class="overflow-hidden">
                        <div class="aspect-video overflow-hidden rounded-lg mb-3">
                            <img src="{{ asset('images/events/hackathon.jpg') }}" alt="Hackathon" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Actualité d'orientation des étudiants, rédigé par le service de gestion du blog des étudiants
                            </p>
                        </div>
                    </div>
                    
                    <div class="overflow-hidden">
                        <div class="aspect-video overflow-hidden rounded-lg mb-3">
                            <img src="{{ asset('images/events/gala.jpg') }}" alt="Gala des étudiants" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Suivi des activités par l'équipe de rédaction se tenant informés des derniers événements se déroulant sur l'ENSIBA affectant la vie des étudiants
                            </p>
                        </div>
                    </div>
                    

                @endforelse
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        
        <div class="mb-12">
            <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 uppercase mb-2">
                NOS FORMATIONS
            </h2>
            <p class="text-gray-600 text-sm">
                Parcourez nos offres de formation.
            </p>
        </div>
        
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($formations->take(6) as $formation)
                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition-shadow duration-300">
                    <div class="mb-4">
                        @if($formation->image)
                            <img src="{{ asset('storage/' . $formation->image) }}" alt="{{ $formation->title }}" class="w-full h-32 object-contain">
                        @else
                            <div class="w-full h-32 bg-gray-100 rounded-lg flex items-center justify-center">
                                <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        @endif
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">
                        {{ $formation->title }}
                    </h3>
                    <div class="text-xs text-gray-700 leading-relaxed space-y-1">
                        @if($formation->category)
                            <p><strong>Catégorie :</strong> {{ $formation->category }}</p>
                        @endif
                        @if($formation->diploma)
                            <p><strong>Diplôme :</strong> {{ $formation->diploma }}</p>
                        @endif
                        @if($formation->requirements)
                            <p><strong>Admission :</strong> {{ $formation->requirements }}</p>
                        @endif
                        
                        <div class="formation-preview">
                            <p><strong>Description :</strong> {{ Str::limit($formation->description, 80) }}</p>
                        </div>
                        
                        <div class="formation-details hidden">
                            <p><strong>Description :</strong> {{ $formation->description }}</p>
                            @if($formation->duration)
                                <p><strong>Durée :</strong> {{ $formation->duration }}</p>
                            @endif
                            @if($formation->career_opportunities)
                                <p><strong>Débouchés :</strong></p>
                                @if(is_array(json_decode($formation->career_opportunities, true)))
                                    @foreach(json_decode($formation->career_opportunities, true) as $opportunity)
                                        <p>- {{ $opportunity }}</p>
                                    @endforeach
                                @else
                                    <p>{{ $formation->career_opportunities }}</p>
                                @endif
                            @endif
                        </div>
                        
                        <button onclick="toggleFormationDetails(this)" class="mt-3 text-blue-600 hover:text-blue-800 text-xs font-medium">
                            Voir plus de détails
                        </button>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-8">
                    <p class="text-gray-500">Aucune formation disponible pour le moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<section class="partenaires">
    <h2>NOS PARTENAIRES</h2>
    <hr class="highlight">
    <div class="logo-slider">
        <div class="logo-slide-track">
            <div class="logo-slide">
                <img src="{{ asset('images/partenaires/gel-logo.jpg') }}" alt="GEL">
            </div>
            <div class="logo-slide">
                <img src="{{ asset('images/partenaires/tum-logo.png') }}" alt="TUM">
            </div>
            <div class="logo-slide">
                <img src="{{ asset('images/partenaires/soneb-logo.png') }}" alt="SONEB">
            </div>
            <div class="logo-slide">
                <img src="{{ asset('images/partenaires/esgc-logo.png') }}" alt="ESGC">
            </div>
            <div class="logo-slide">
                <img src="{{ asset('images/partenaires/ep-logo.png') }}" alt="EP">
            </div>
            <div class="logo-slide">
                <img src="{{ asset('images/partenaires/sbee-logo.png') }}" alt="SBEE">
            </div>
            <div class="logo-slide">
                <img src="{{ asset('images/partenaires/gel-logo.jpg') }}" alt="GEL">
            </div>
            <div class="logo-slide">
                <img src="{{ asset('images/partenaires/tum-logo.png') }}" alt="TUM">
            </div>
            <div class="logo-slide">
                <img src="{{ asset('images/partenaires/soneb-logo.png') }}" alt="SONEB">
            </div>
            <div class="logo-slide">
                <img src="{{ asset('images/partenaires/esgc-logo.png') }}" alt="ESGC">
            </div>
            <div class="logo-slide">
                <img src="{{ asset('images/partenaires/ep-logo.png') }}" alt="EP">
            </div>
            <div class="logo-slide">
                <img src="{{ asset('images/partenaires/sbee-logo.png') }}" alt="SBEE">
            </div>
        </div>
    </div>
</section>


<script>
function toggleFormationDetails(button) {
    const card = button.closest('.bg-white');
    const preview = card.querySelector('.formation-preview');
    const details = card.querySelector('.formation-details');
    
    if (details.classList.contains('hidden')) {
        // Afficher les détails
        preview.classList.add('hidden');
        details.classList.remove('hidden');
        button.textContent = 'Voir moins';
    } else {
        // Masquer les détails
        details.classList.add('hidden');
        preview.classList.remove('hidden');
        button.textContent = 'Voir plus';
    }
}
</script>

@endsection