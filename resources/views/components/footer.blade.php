<footer>
    <div class="footer-container">
        <!-- Colonne 1 : Logo et coordonnées -->
        <div class="footer-col">
            <img src="{{ asset('images/logo-left.png') }}" alt="Logo INSTI" class="footer-logo">
            <p class="location">Lokossa, Agnivedji</p>
            <p class="phone">(+229) 22 41 13 66</p>
            <p class="slogan">"Science et technologie au service de l'homme"</p>
            <a href="mailto:instilokossa@gmail.com" class="email">instilokossa@gmail.com</a>
            <div class="social-links">
                <a href="#" class="social-link"><img src="{{ asset('images/facebook.svg') }}" alt="Facebook"></a>
                <a href="#" class="social-link"><img src="{{ asset('images/youtube.svg') }}" alt="YouTube"></a>
            </div>
        </div>

        <!-- Colonne 2 : Nos Ressources -->
        <div class="footer-col">
            <h3>NOS RESSOURCES</h3>
            <ul>
                <li><a href="#">Incubateur de startups</a></li>
                <li><a href="#">Unité d'application de l'INSTI</a></li>
                <li><a href="#">Plateforme E-learning</a></li>
                <li><a href="#">Blog officiel de l'INSTI</a></li>
            </ul>
        </div>

        <!-- Colonne 3 : Liens Utiles -->
        <div class="footer-col">
            <h3>LIENS UTILES</h3>
            <ul>
                <li><a href="#">Ministère de l'Enseignement Supérieur</a></li>
                <li><a href="#">UNSTIM</a></li>
                <li><a href="#">INSTI</a></li>
            </ul>
        </div>

        <!-- Nouvelle Colonne 4 : Navigation -->
        <div class="footer-col">
            <h3>NAVIGATION</h3>
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('formations') }}">Formation</a></li>
                <li><a  href="{{ route('vie-estudiantine') }}">Vie estudiantine</a></li>
                <li><a href="{{ route('mediatheque.index') }}">Mediatheque</a></li>
                <li><a href="{{ route('home') }}#mot-directrice">Mot de la Directrice</a></li>
                <li><a href="{{ route('home') }}#statistiques">Nos Statistiques</a></li>
                <li><a href="{{ route('home') }}#partenaires">Nos Partenaires</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p> INSTI, UNSTIM 2024 </p>
    </div>
</footer>