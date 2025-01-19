@extends('layouts.app')

@section('title', 'Vie Estudiantine')

@section('content')
<section class="vie-estudiantine">
    <h2>Vie Estudiantine</h2>
    <hr class="highlight">

    <div class="stages">
        <h3>Les stages</h3>
        <div class="stages-content">
            <div class="stages-text">
                <p>
                    Dans tous les cursus, au passage de la deuxième année en troisième année, les étudiants de l'IFRI
                    effectuent un stage en entreprise, au Bénin ou à l'étranger. La durée varie en fonction du niveau
                    d'études, de deux semaines (deuxième année), de trois mois (troisième année) et de six mois en fin
                    de cycle master.
                </p>
                <p>
                    Chaque année le temps passé en entreprise augmente, pour rapprocher les étudiants du monde
                    professionnel, au rythme de leur capacitation. Ils sont ainsi accompagnés vers une pré-insertion qui
                    s'achève le plus souvent par un emploi une fois diplômés.
                </p>
                <p>
                    Une validation de l'expérience académique après chaque stage est obtenue par la moyenne de la note
                    du rapport de stage corrigé et de la note d'évaluation du maitre de stage.
                </p>
            </div>
            <div class="stages-carousel">
                <div class="carousel-container">
                    <div class="carousel-slides">
                        <div class="carousel-slide active">
                            <img src="{{ asset('images/stages/stage1.jpg') }}" alt="Stage en entreprise">
                            <div class="slide-caption">
                                <p>L'INSTI, en collaboration vous ouvre la porte de l'auto emploi en s'appuyant sur
                                    trois leviers: une formation de qualité, son unité d'application et le Programme
                                    entreprendre à l'école</p>
                                <p class="caption-subtitle">Depuis 2001 nous cultivons l'excellence</p>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <img src="{{ asset('images/stages/stage2.jpg') }}" alt="Formation pratique">
                            <div class="slide-caption">
                                <p>Nos étudiants bénéficient d'une formation pratique intensive en entreprise pour
                                    développer leurs compétences professionnelles</p>
                                <p class="caption-subtitle">Une approche pratique pour une meilleure insertion</p>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <img src="{{ asset('images/stages/stage3.jpg') }}" alt="Partenariats entreprises">
                            <div class="slide-caption">
                                <p>Grâce à nos partenariats avec les entreprises leaders du secteur, nos étudiants
                                    accèdent aux meilleures opportunités de stage</p>
                                <p class="caption-subtitle">Un réseau professionnel solide</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-prev">&#10094;</button>
                    <button class="carousel-next">&#10095;</button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clubs-section">
        <h3>Ci-dessous nos différents clubs et groupement</h3>

        <div class="clubs-grid">
            <div class="club-card">
                <h4>Club de programmation</h4>
                <img src="{{ asset('images/clubs/programming.png') }}" alt="Club de programmation">
                <p>Le club de programmation est une association qui permet d'apprendre, de pratiquer la programmation
                </p>
                <button class="rejoindre-btn">REJOINDRE</button>
            </div>

            <div class="club-card">
                <h4>Club de basket</h4>
                <img src="{{ asset('images/clubs/people.png') }}" alt="Club de basket">
                <p>Le club de basketball est une association qui permet d'apprendre, de pratiquer le basket</p>
                <button class="rejoindre-btn">REJOINDRE</button>
            </div>

            <div class="club-card">
                <h4>Club de Football</h4>
                <img src="{{ asset('images/clubs/shoot.png') }}" alt="Club de Football">
                <p>Le club de football permet d'apprendre et de pratiquer le football.</p>
                <button class="rejoindre-btn">REJOINDRE</button>
            </div>
        </div>
    </div>
</section>


@endsection

@section('scripts')
<script>
    
</script>