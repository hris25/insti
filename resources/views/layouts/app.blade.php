<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSTI - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('components.header')
    
    <main>
        @yield('content')
    </main>

    @include('components.footer')
    
    <!-- Script principal -->
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Script spécifique pour les boutons "Plus de détails" -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.btn-details').forEach(button => {
                button.addEventListener('click', function() {
                    const cardContent = this.closest('.card-content');
                    const detailsSection = cardContent.querySelector('.details-supplementaires');
                    
                    // Toggle la classe hidden
                    detailsSection.classList.toggle('hidden');
                    
                    // Change le texte du bouton
                    this.textContent = detailsSection.classList.contains('hidden') 
                        ? 'Plus de détails' 
                        : 'Moins de détails';
                });
            });
        });
    </script>
    
</body>
</html>