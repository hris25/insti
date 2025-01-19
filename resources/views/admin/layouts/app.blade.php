<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 fixed h-full">
            <nav class="space-y-3">
                <a href="{{ route('admin.dashboard')}}" class="block py-2.5 px-4 rounded hover:bg-gray-700">
                    Dashboard
                </a>
                <a href="{{ route('admin.actualites.index') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">
                    Actualités
                </a>
                <a href="{{ route('admin.albums.index') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">
                    Médiathèque
                </a>
                <a href="{{ route('admin.formations.index') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">
                    Formations
                </a>
                <a href="{{ route('admin.clubs.index') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">
                    Clubs et Associations
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 ml-64">
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4">
                    <h1 class="text-3xl font-bold text-gray-900">
                        @yield('header')
                    </h1>
                </div>
            </header>

            <main class="max-w-7xl mx-auto py-6 px-4">
                <!-- @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                        {{ session('success') }}
                    </div>
                @endif -->

                @if(session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
