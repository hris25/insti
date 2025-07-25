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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html, body {
            margin: 0 !important;
            padding: 0 !important;
            font-family: 'Inter', sans-serif;
        }
        
        /* Force header to stick to top */
        header {
            margin: 0 !important;
            padding: 0 !important;
            position: relative !important;
            top: 0 !important;
            display: block !important;
            border: none !important;
            outline: none !important;
        }
        
        /* Force body to start at top */
        body {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        
        /* Remove any potential spacing from Tailwind or other CSS */
        .w-full {
            margin: 0 !important;
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
<body class="bg-gray-50 m-0 p-0">
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