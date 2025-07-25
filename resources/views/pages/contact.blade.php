@extends('layouts.app')

@section('title', 'Contact - INSTI')

@section('content')
<div class="bg-white py-12 px-4">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold text-[#0d4293] mb-6 text-center">Contactez-nous</h1>
        
        <div class="bg-gray-50 p-6 rounded-lg shadow-md">
            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6">
                    <p class="font-bold">Message envoyé !</p>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom complet</label>
                        <input type="text" id="name" name="name" required 
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#0d4293] focus:border-[#0d4293]">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" required
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#0d4293] focus:border-[#0d4293]">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Sujet</label>
                    <input type="text" id="subject" name="subject" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#0d4293] focus:border-[#0d4293]">
                </div>

                <div class="mb-6">
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea id="message" name="message" rows="4" required
                              class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#0d4293] focus:border-[#0d4293]"></textarea>
                </div>

                <button type="submit" class="w-full bg-[#0d4293] text-white py-2 px-4 rounded-md hover:bg-[#0a3375] transition">
                    Envoyer le message
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
