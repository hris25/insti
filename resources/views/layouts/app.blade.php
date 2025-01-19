<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSTI - @yield('title')</title>
    
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Styles personnalisés -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .gallery-item {
            transition: transform 0.3s ease-in-out;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
        }
        
        .play-button {
            transition: opacity 0.3s ease-in-out;
        }
        
        .gallery-item:hover .play-button {
            opacity: 0.9;
        }
    </style>
</head>
<body class="bg-gray-50">
    @include('components.header')
    
    <main class="min-h-screen">
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
    
    @stack('scripts')
</body>
</html>