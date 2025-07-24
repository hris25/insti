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
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
</section>

<!-- Mot de la Directrice -->
<section class="mot-directrice">
    <div class="content">
        <h2>Mot de la Directrice</h2>
        <hr class="highlight">
        <p class="message">
            La vocation de l'Institut de Formation et de Recherche en Informatique (IFRI) de l'Université
            d'Abomey-Calavi est de former des apprenants capables de devenir des acteurs de solutions informatiques expedita quaerat minima porro, eius atque veniam! Incidunt architecto nulla fugiat a...
            <span class="message-suite hidden">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet earum a sint expedita quaerat minima porro, eius atque veniam! Incidunt architecto nulla fugiat a consectetur est iusto similique dolorum distinctio.
            </span>
        </p>
        <button class="btn-lire-plus">Lire plus</button>
    </div>
    <div class="video">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/PpeKtTnRbEA?rel=0"
            title="Mot de la Directrice" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>
</section>

<!-- Nos Statistiques -->
<section class="statistiques">
    <h2>NOS STATISTIQUES</h2>
    <hr class="highlight">
    <div class="stats-container">
        <div class="stat-item">
            <img src="{{ asset('images/students-icon.png') }}" alt="Étudiants">
            <div class="stat-info">
                <span class="number">1447</span>
                <span class="label">étudiants en formation</span>
            </div>
        </div>
        <div class="stat-item">
            <img src="{{ asset('images/speciality-icon.png') }}" alt="Spécialités">
            <div class="stat-info">
                <span class="number">06</span>
                <span class="label">spécialités</span>
            </div>
        </div>
        <div class="stat-item">
            <img src="{{ asset('images/calendar-icon.png') }}" alt="Existence">
            <div class="stat-info">
                <span class="label">Existe depuis</span>
                <span class="number">2001</span>
            </div>
        </div>
        <div class="stat-item">
            <img src="{{ asset('images/diploma-icon.png') }}" alt="Diplômes">
            <div class="stat-info">
                <span class="number">+800</span>
                <span class="label">diplômés</span>
            </div>
        </div>
        <div class="stat-item">
            <img src="{{ asset('images/teacher-icon.png') }}" alt="Enseignants">
            <div class="stat-info">
                <span class="number">178</span>
                <span class="label">enseignants chercheurs</span>
            </div>
        </div>
        <div class="stat-item">
            <img src="{{ asset('images/cursus.png') }}" alt="Cursus">
            <div class="stat-info">
                <span class="number">02</span>
                <span class="label">Cursus Scolaire</span>
            </div>
        </div>
    </div>
</section>

<!-- Nos Partenaires -->
<section class="partenaires">
    <h2>NOS PARTENAIRES</h2>
    <hr class="highlight">
    <div class="logo-slider">
        <div class="logo-slide-track">
            <!-- Les logos sont dupliqués pour créer un effet de défilement infini -->
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
            <!-- Duplication des logos pour l'effet infini -->
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


@endsection