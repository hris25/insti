@extends('layouts.app')

@section('title', 'Formations')

@section('content')
<section class="formations">
    <h2>Formations</h2>
    <hr class="highlight">
    
    <p class="formation-intro">
        L'Université Nationale des Sciences, Technologies, Ingénierie et Mathématiques (UNSTIM) offre des formations de haute qualité adaptées aux besoins du marché du travail. Nos programmes, ancrés dans la pratique et l'innovation, forment les leaders technologiques de demain.
    </p>

    <div class="formation-cards">
        @foreach($formations as $formation)
        <div class="formation-card" data-category="{{ $formation->category }}">
            <img src="{{ asset('images/formations/' . $formation->image) }}" alt="{{ $formation->title }}" loading="lazy">
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
@endsection

@section('scripts')
<script src="{{ asset('js/script.js') }}"></script>