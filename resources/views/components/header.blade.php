<header>
    <div class="header-top">
        <div class="logo-title">
            <img src="{{ asset('images/logo-right.png') }}" alt="Logo INSTI" class="logo">
            <div class="title-container">
                <h1>INSTI</h1>
                <p>Institut Nationale Supérieur de Technologie Industrielle de Lokossa</p>
            </div>
        </div>
        <div class="quick-links">
            <a href="{{ route('acces-rapide') }}" class="quick-link">
                <img src="{{ asset('images/info-circle-fill.svg') }}" alt="Info">
                Accès rapide
            </a>
            <a href="{{ route('observatoire') }}" class="quick-link">
                <img src="{{ asset('images/snow3.svg') }}" alt="Observatory">
                Observatoire
            </a>
            <a href="{{ route('contact') }}" class="quick-link">
                <img src="{{ asset('images/person-fill.svg') }}" alt="Contact">
                Nous écrire
            </a>
            <img src="{{ asset('images/logo-left.png') }}" alt="Logo UNSTIM" class="logo">
        </div>
    </div>
    <nav class="navbar">
        <div class="nav-container">
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('formations') }}">Formation</a></li>
                <li><a href="{{ route('vie-estudiantine') }}">Vie estudiantine</a></li>
                <li><a href="{{ route('mediatheque') }}">Mediatheque</a></li>
            </ul>
            <div class="search-bar">
                <input type="text" placeholder="Rechercher...">
                <button type="submit">
                    <img src="{{ asset('images/search-icon.png') }}" alt="Search">
                </button>
            </div>
        </div>
    </nav>
</header>