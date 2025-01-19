<!-- filepath: /E:/insti_laravel-main/insti_laravel-main/resources/views/admin/formations/index.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Gestion des Formations')

@section('header', 'Gestion des Formations')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Liste des Formations</h1>
        <a href="{{ route('admin.formations.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">
            Créer une formation
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="bg-white shadow rounded-lg">
        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-4">Titre</th>
                        <th scope="col" class="py-3 px-4">Catégorie</th>
                        <th scope="col" class="py-3 px-4">Diplôme</th>
                        <th scope="col" class="py-3 px-4">Durée</th>
                        <th scope="col" class="py-3 px-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($formations as $formation)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="py-3 px-4">
                                {{ $formation->title }}
                            </td>
                            <td class="py-3 px-4">
                                {{ $formation->category }}
                            </td>
                            <td class="py-3 px-4">
                                {{ $formation->diploma }}
                            </td>
                            <td class="py-3 px-4">
                                {{ $formation->duration }}
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex items-center space-x-3">
                                    <a href="{{ route('admin.formations.edit', $formation) }}" 
                                        class="text-blue-600 hover:text-blue-900 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                        <span>Modifier</span>
                                    </a>
                                    <form action="{{ route('admin.formations.destroy', $formation) }}" method="POST" class="inline-flex">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                            class="text-red-600 hover:text-red-900 flex items-center"
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette formation ?')">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                            <span>Supprimer</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection