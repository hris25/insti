@extends('layouts.app')

@section('title', 'Médiathèque')

@section('content')
<section class="mediatheque-section">
    <div class="container mx-auto px-4 py-8">
        <div class="phototheque">
            <h3 class="text-2xl font-bold mb-4">Photothèque/ Vidéothèque</h3>
            <p class="text-gray-600 mb-8">Découvrez nos étudiants en galerie</p>

            <div class="gallery-container">
                <!-- Images -->
                <div class="gallery-item image">
                    <img src="{{ asset('images/gallery/students-construction.jpg') }}" alt="Étudiants en construction">
                </div>
                <div class="gallery-item image">
                    <img src="{{ asset('images/gallery/students-lab.jpg') }}" alt="Étudiants en laboratoire">
                </div>
                <div class="gallery-item image">
                    <img src="{{ asset('images/gallery/students-group.jpg') }}" alt="Groupe d'étudiants">
                </div>

                <!-- Vidéos -->
                <div class="gallery-item video">
                    <iframe src="https://www.youtube.com/embed/1qLy0y8w6yg" title="Vidéo 1" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="gallery-item video">
                    <iframe src="https://www.youtube.com/embed/K3Tkz8xVth0" title="Vidéo 2" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>

        <div class="collaborations mt-16">
            <h3 class="text-2xl font-bold mb-4">Nos collaborations et événements</h3>
            <div class="collaborations-grid">
                <div class="collab-card">
                    <div class="collab-item">
                        <img src="{{ asset('images/collaborations/collab1.jpeg') }}" alt="Réunion officielle">
                    </div>
                    <div class="collab-caption">
                        <p>Réunion officielle</p>
                    </div>
                </div>
                <div class="collab-card">
                    <div class="collab-item">
                        <img src="{{ asset('images/collaborations/collab2.jpg') }}" alt="Rencontre internationale">
                    </div>
                    <div class="collab-caption">
                        <p>Rencontre internationale</p>
                    </div>
                </div>
                <div class="collab-card">
                    <div class="collab-item">
                        <img src="{{ asset('images/collaborations/collab4.jpg') }}" alt="Rencontre avec le blanc">
                    </div>
                    <div class="collab-caption">
                        <p>Rencontre internationale</p>
                    </div>
                </div>
                <div class="collab-card">
                    <div class="collab-item video">
                        <iframe src="https://www.youtube.com/embed/eucINNVLo58" title="Vidéo de collaboration" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="collab-caption">
                        <p>Vidéo de collaboration</p>
                    </div>
                </div>
                <div class="collab-card">
                    <div class="collab-item">
                        <img src="{{ asset('images/collaborations/collab3.jpg') }}" alt="Réunion des partenaires">
                    </div>
                    <div class="collab-caption">
                        <p>Réunion des partenaires</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="university-gallery mt-16">
            <h3 class="text-2xl font-bold mb-4">Découvrez notre université en galerie</h3>
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-item">
                        <img src="{{ asset('images/gallery/campus1.jpg') }}" alt="Vue du campus">
                        <div class="play-button">
                            <img src="{{ asset('images/play.png') }}" alt="Play">
                        </div>
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-item">
                        <img src="{{ asset('images/gallery/entrance.png') }}" alt="Entrée de l'institut">
                        <div class="play-button">
                            <img src="{{ asset('images/play.png') }}" alt="Play">
                        </div>
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-item">
                        <img src="{{ asset('images/gallery/students-lab.jpg') }}" alt="Étudiants au laboratoire">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-item">
                        <img src="{{ asset('images/gallery/classroom.png') }}" alt="Salle de classe">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection