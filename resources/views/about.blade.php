@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

<div class="container mx-auto mt-8 mb-16 py-8">
    <h2 class="text-4xl font-bold mb-6 text-center text-indigo-600">About Us</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Pootis Quiz Overview -->
        <div class="md:col-span-1 mb-6 text-gray-800 leading-7">
            <p>Welcome to Pootis Quiz! We're on a mission to make learning fun through quizzes. Our team of developers and quiz enthusiasts is dedicated to creating a platform that sparks curiosity and challenges your knowledge.</p>
            <p>At Pootis Quiz, we leverage cutting-edge technologies like Android Studio, Java, PHP, Laravel, and Tailwind CSS to craft a seamless and user-friendly quiz experience. Beyond being just an app, Pootis Quiz is a community of learners and knowledge seekers.</p>
            <p>Embark on this exciting journey where knowledge meets fun. Pootis Quiz - Let the Adventure Begin!</p>
        </div>

        <!-- About Us Image -->
        <div class="md:col-span-1 mb-6">
            <img src="{{ asset('mercs.png') }}" alt="About Us Image" class="w-full h-auto object-cover rounded">
        </div>
    </div>

    <!-- Pootis Quiz App Overview -->
    <div class="mb-6">
        <h3 class="text-3xl font-semibold mb-4 text-center text-indigo-600">Pootis Quiz App</h3>
        <p>Explore our quiz app designed for an entertaining and engaging experience. From general knowledge to sports and history, our user-friendly interface makes navigating quizzes a breeze. Whether you're a casual quiz enthusiast or a competitive player, there's something for everyone.</p>
        <p>Stay tuned for regular updates as we continue to enhance your quiz-taking experience!</p>
    </div>

    <!-- Meet Our Team -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Team Member 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md relative text-lg mb-4">
            <img src="images/team-member1.jpg" alt="Team Member 1" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-semibold mb-2">John Doe</h3>
            <p class="text-gray-600">Co-Founder & Developer</p>
        </div>

        <!-- Team Member 2 -->
        <div class="bg-white p-6 rounded-lg shadow-md relative text-lg mb-4">
            <img src="images/team-member2.jpg" alt="Team Member 2" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-semibold mb-2">Jane Smith</h3>
            <p class="text-gray-600">Quiz Enthusiast & Content Creator</p>
        </div>
    </div>
</div>

</body>

</html>
@endsection
