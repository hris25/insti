@extends('layouts.app')

@section('title', 'Formations')

@section('content')
<div class="bg-gradient-to-b from-blue-50 to-white">
    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-blue-600 text-white py-24">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-800 opacity-90"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Nos Formations</h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
                Découvrez nos programmes d'excellence en informatique et technologies numériques
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Introduction -->
        <div class="text-center mb-16">
            <p class="text-lg text-gray-600 max-w-4xl mx-auto">
                L'Université Nationale des Sciences, Technologies, Ingénierie et Mathématiques (UNSTIM) offre des formations de haute qualité adaptées aux besoins du marché du travail. Nos programmes, ancrés dans la pratique et l'innovation, forment les leaders technologiques de demain.
            </p>
        </div>

        <section class="formations">
            <h2>Formations</h2>
            <hr class="highlight">
            
            <div class="formation-cards">
                @foreach($formations as $formation)
                <div class="formation-card" data-category="{{ $formation->category }}">
                    <img src="{{ asset('storage/' . $formation->image) }}" alt="{{ $formation->title }}" loading="lazy">
                    <div class="card-content">
                        <div class="diplome">
                            <img src="{{ asset('images/diplomaicon.png') }}" alt="Diplôme">
                            <div>
                                <h4>Diplôme :</h4>
                                <p>{{ $formation->diploma }}</p>
                            </div>
                        </div>
                        <button class="btn-details">Plus de détails</button>
                        <div class="details-supplementaires hidden">
                            <div class="detail-item">
                                <h4>Admission :</h4>
                                <p>{{ $formation->requirements }}</p>
                            </div>
                            <div class="detail-item">
                                <h4>Durée :</h4>
                                <p>{{ $formation->duration }}</p>
                            </div>
                            <div class="detail-item">
                                <h4>Débouchés :</h4>
                                <ul>
                                    @foreach(json_decode($formation->career_opportunities) as $opportunity)
                                        <li>{{ $opportunity }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/script.js') }}"></script>