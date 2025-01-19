<!-- filepath: /E:/insti_laravel-main/insti_laravel-main/resources/views/admin/albums/index.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Liste des albums')

@section('header', 'Liste des albums')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Albums</h1>
    <a href="{{ route('admin.albums.create') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Créer un album</a>
    <div class="overflow-x-auto">
        <table class="min-w-full w-full table-auto bg-white border border-gray-200 rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">Titre</th>
                    <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">Type</th>
                    <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">Nombre de médias</th>
                    <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($albums as $album)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border-b text-sm text-gray-700">{{ $album->title }}</td>
                        <td class="py-2 px-4 border-b text-sm text-gray-700">{{ ucfirst($album->type) }}</td>
                        <td class="py-2 px-4 border-b text-sm text-gray-700">{{ count($album->media) }}</td>
                        <td class="py-2 px-4 border-b text-sm text-gray-700">
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.albums.edit', $album->id) }}" class="inline-block px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Modifier</a>
                                <form action="{{ route('admin.albums.destroy', $album->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet album ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-block px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection