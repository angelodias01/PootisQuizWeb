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
        .square-card {
            width: calc(50% - 1rem); /* Largura dos quadrados */
            height: 200px; /* Altura dos quadrados */
        }
        .card-image img {
            border: none;
        }
    </style>
</head>

<body class="bg-gray-100">

<div class="container mx-auto mt-8 mb-16 py-8">
    <h2 class="text-4xl font-bold mb-6 text-center">About Us</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div style="height: 320px" class="bg-white p-6 rounded-lg shadow-md relative border border-black border-4 rounded-lg shadow mb-8 md:col-span-1">
            <div class="text-gray-800 leading-7">
                <p>Welcome to Pootis Quiz! We're on a mission to make learning fun through quizzes. Our team of developers and quiz enthusiasts is dedicated to creating a platform that sparks curiosity and challenges your knowledge.</p>
                <p>Explore our quiz app designed for an entertaining and engaging experience. From general knowledge to sports and history, our user-friendly interface makes navigating quizzes a breeze.</p>
                <p>Stay tuned for regular updates as we continue to enhance your quiz-taking experience!</p>
                <p>Embark on this exciting journey where knowledge meets fun. Pootis Quiz - Let the Adventure Begin!</p>
            </div>
        </div>

        <div style="height: 320px" class="bg-white p-6 rounded-lg shadow-md relative border border-black border-4 rounded-lg shadow mb-8 md:col-span-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center justify-center">
                <div class="card-image relative">
                    <div class="bg-white rounded-lg relative flex justify-center items-center" style="width: 220px; height:250px;">
                        <img title="Martim Dias" src="{{ asset('martim.webp') }}" style="max-width: 200px;">
                        <div class=" rounded-lg overlay absolute bottom-32 left-8 right-8 bg-gray-500 text-white text-center p-2">
                            Martim Dias
                        </div>
                    </div>
                </div>
                <div class="card-image relative">
                    <div class="bg-white rounded-lg relative flex justify-center items-center" style="width: 220px; height:250px;">
                        <img title="Ângelo Dias" src="{{ asset('angelo.webp') }}" style="max-width: 220px;">
                        <div class=" rounded-lg overlay absolute bottom-32 left-0 right-16 bg-gray-500 text-white text-center p-2">
                            Ângelo Dias
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8 flex ml-24 justify-center">
        <img src="{{ asset('mercs.png') }}" alt="About Us Image" class="w-3/5 h-auto object-fit rounded">
    </div>

</div>
</body>

</html>
@endsection
