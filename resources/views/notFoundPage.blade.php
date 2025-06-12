@extends('layouts.website.layout-website')

@section('content')
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 px-4">
        <div class="bg-white shadow-md rounded-lg p-6 text-center max-w-md">
            <h1 class="text-3xl font-bold text-red-600 mb-4">404 - Page non trouvée</h1>
            <p class="text-gray-700 mb-2">La page que vous avez cliquée n'existe pas.</p>
            <a href="{{ route('products.index') }}"
                class="inline-block mt-4 px-6 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700 transition">
                Retour à l'accueil
            </a>
        </div>
    </div>
@endsection
