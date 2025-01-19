<!-- filepath: /E:/insti_laravel-main/insti_laravel-main/resources/views/admin/formations/edit.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Modifier une formation')

@section('header', 'Modifier une formation')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-4">Modifier une Formation</h1>
        <form action="{{ route('admin.formations.update', $formation->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
                <input type="text" name="title" value="{{ $formation->title }}" class="mt-1 block w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 h-10" required>
            </div>
            <div class="form-group">
                <label for="category" class="block text-sm font-medium text-gray-700">Catégorie</label>
                <input type="text" name="category" value="{{ $formation->category }}" class="mt-1 block w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 h-10" required>
            </div>
            <div class="form-group">
                <label for="diploma" class="block text-sm font-medium text-gray-700">Diplôme</label>
                <input type="text" name="diploma" value="{{ $formation->diploma }}" class="mt-1 block w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 h-10" required>
            </div>
            <div class="form-group">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" class="mt-1 block w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>{{ $formation->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="duration" class="block text-sm font-medium text-gray-700">Durée</label>
                <input type="text" name="duration" value="{{ $formation->duration }}" class="mt-1 block w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 h-10" required>
            </div>
            <div class="form-group">
                <label for="requirements" class="block text-sm font-medium text-gray-700">Pré-requis</label>
                <input type="text" name="requirements" value="{{ $formation->requirements }}" class="mt-1 block w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 h-10" required>
            </div>
            <div class="form-group">
                <label for="career_opportunities" class="block text-sm font-medium text-gray-700">Débouchés</label>
                <div id="career-opportunities-container" class="space-y-2">
                    @foreach (json_decode($formation->career_opportunities) as $opportunity)
                        <div class="flex items-center space-x-2">
                            <input type="text" name="career_opportunities[]" value="{{ $opportunity }}" class="mt-1 block w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 h-10">
                            <button type="button" class="mt-1 px-4 py-2 bg-red-600 text-white rounded-md h-10 remove-opportunity">-</button>
                        </div>
                    @endforeach
                </div>
                <button type="button" id="add-career-opportunity" class="mt-2 px-4 py-2 bg-green-600 text-white rounded-md h-10">+</button>
            </div>
            <div class="form-group">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" class="mt-1 block w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 h-10">
                @if ($formation->image)
                    <img src="{{ asset('storage/' . $formation->image) }}" alt="Image de la formation" class="mt-2 w-32 h-32 object-cover">
                @endif
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md h-10">Mettre à jour</button>
        </form>
    </div>
</div>

<script>
    document.getElementById('add-career-opportunity').addEventListener('click', function() {
        var container = document.getElementById('career-opportunities-container');
        var div = document.createElement('div');
        div.className = 'flex items-center space-x-2';
        var input = document.createElement('input');
        input.type = 'text';
        input.name = 'career_opportunities[]';
        input.className = 'mt-1 block w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 h-10';
        var button = document.createElement('button');
        button.type = 'button';
        button.className = 'mt-1 px-4 py-2 bg-red-600 text-white rounded-md h-10 remove-opportunity';
        button.textContent = '-';
        button.addEventListener('click', function() {
            div.remove();
        });
        div.appendChild(input);
        div.appendChild(button);
        container.appendChild(div);
    });

    document.querySelectorAll('.remove-opportunity').forEach(function(button) {
        button.addEventListener('click', function() {
            button.parentElement.remove();
        });
    });
</script>
@endsection