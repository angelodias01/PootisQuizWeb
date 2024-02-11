@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" href="/pootisquiz.svg" type="image/svg+xml" style="width: 64px; height: 64px;">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Estilo para os quadrados */
        .square-card {
            width: calc(50% - 1rem); /* Largura dos quadrados */
            height: 200px; /* Altura dos quadrados */
        }
    </style>
</head>

<body class="bg-gray-100">

<div class="container mx-auto mt-8 mb-16 py-8">
    <h2 class="text-4xl font-bold mb-6 text-center">About Us</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Pootis Quiz Overview -->
        <div class="md:col-span-1 mb-6 text-gray-800 leading-7">
            <p>Welcome to Pootis Quiz! We're on a mission to make learning fun through quizzes. Our team of developers and quiz enthusiasts is dedicated to creating a platform that sparks curiosity and challenges your knowledge.</p>
            <p>Explore our quiz app designed for an entertaining and engaging experience. From general knowledge to sports and history, our user-friendly interface makes navigating quizzes a breeze.</p>
            <p>Stay tuned for regular updates as we continue to enhance your quiz-taking experience!</p>
            <p>Embark on this exciting journey where knowledge meets fun. Pootis Quiz - Let the Adventure Begin!</p>
        </div>

        <!-- About Us Image -->
        <div class="md:col-span-1 mb-6">
            <img src="{{ asset('mercs.png') }}" alt="About Us Image" class="w-full h-auto object-cover rounded">
        </div>
    </div>

    <!-- Meet Our Team -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Team member 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md relative text-lg" style="width: 100%;">
            <div class="p-8">
                <h3 class="text-xl font-semibold mb-2 text-center">Ângelo Dias</h3>
                <p class="text-gray-600">Co-Founder & Developer</p>
                <!-- Incorporação do perfil do GitHub -->
                <iframe src="https://github.com/angelodias01" height="300" width="400"></iframe>
            </div>
        </div>

        <!-- Team member 2 -->
        <div class="bg-white p-6 rounded-lg shadow-md relative" style="width: 100%;">
            <div class="p-8">
                <h3 class="text-xl font-semibold mb-2 text-center">Martim Dias</h3>
                <p class="text-gray-600">Co-Founder & Developer</p>
                <!-- Incorporação do perfil do GitHub -->
                <iframe src="https://github.com/HeavyFromTF2" height="300" width="400"></iframe>
            </div>
        </div>

        <!-- Código base sem perfil do GitHub
        <div class="bg-white p-6 rounded-lg shadow-md relative" style="width: 100%;">
            <a href="https://github.com/HeavyFromTF2" target="_blank">
                <div class="p-8">
                    <img src="{{ asset('MartimDias.png') }}" alt="Team Member 2" class="w-full h-auto object-cover rounded mb-4">
                    <h3 class="text-xl font-semibold mb-2 text-center">Martim Dias</h3>
                    <p class="text-gray-600">Co-Founder & Developer</p>
                </div>
            </a>
        </div>
        -->
    </div>
</div>

</body>

</html>
@endsection
