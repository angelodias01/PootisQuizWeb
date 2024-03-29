@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Features</title>
    <link rel="icon" href="/pootisquiz.svg" type="image/svg+xml" style="width: 64px; height: 64px;">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .card {
            position: relative;
            transition: transform 0.1s ease-in-out, box-shadow 0.1s ease-in-out;
            transform-origin: center;
            padding: 20px; /* Increase padding for larger cards */
        }

        .card:hover {
            transform: perspective(1000px) scale(1.03) rotateX(0deg) rotateY(0deg);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card img {
            transition: transform 0.7s ease-in-out;
        }

        .card:hover img {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="bg-gray-100">

<div class="container mx-auto mt-8 mb-16">
    <h2 class="text-3xl font-bold mb-6 text-center">App Features</h2>

    <div class="mb-8 text-center">
        <p class="text-gray-700 text-xl">Explore all of the amazing features Pootis Quiz has to show below!</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="card bg-white p-6 rounded-lg shadow-md border border-black border-4 rounded-lg shadow" onmousemove="handleMouseMove(this, event)"
             onmouseleave="handleMouseLeave(this)">
            <img src="{{ asset('variety.jpg') }}" alt="Feature 1"
                 class="w-full h-48 object-cover mb-4 rounded transition-transform duration-300 ease-in-out">
            <h3 class="text-xl font-semibold mb-2 text-center">Wide range of quizzes</h3>
            <p class="text-gray-600 text-center">At Pootis Quiz, you can challenge yourself with tons of fun and different
                themes!</p>
        </div>

        <!-- Card 2 -->
        <div class="card bg-white p-6 rounded-lg shadow-md border border-black border-4 rounded-lg shadow" onmousemove="handleMouseMove(this, event)"
             onmouseleave="handleMouseLeave(this)">
            <img src="{{ asset('account.jpg') }}" style="" alt="Feature 2"
                 class="w-full h-48 object-cover mb-4 rounded transition-transform duration-300 ease-in-out">
            <h3 class="text-xl font-semibold mb-2 text-center">Account based</h3>
            <p class="text-gray-600 text-center">To play Pootis Quiz, you will need and account. With this, you
                receive added security!</p>
        </div>

        <!-- Card 3 -->
        <div class="card bg-white p-6 rounded-lg shadow-md border border-black border-4 rounded-lg shadow" onmousemove="handleMouseMove(this, event)"
             onmouseleave="handleMouseLeave(this)">
            <img src="{{ asset('achievements.png') }}" alt="Feature 3"
                 class="w-full h-48 object-contain mb-4 rounded transition-transform duration-300 ease-in-out">
            <h3 class="text-xl font-semibold mb-2 text-center">Achievements and statistics</h3>
            <p class="text-gray-600 text-center">You can try to get challenging achievements or check how good you
                are going in your profile!</p>
        </div>

        <!-- Card 4 -->
        <div class="card bg-white p-6 rounded-lg shadow-md border border-black border-4 rounded-lg shadow" onmousemove="handleMouseMove(this, event)"
             onmouseleave="handleMouseLeave(this)">
            <img src="{{ asset('portugal_uk.jpg') }}" width="400px" height="300px" alt="Feature 4"
                 class="w-full h-48 object-cover mb-4 rounded transition-transform duration-300 ease-in-out">
            <h3 class="text-xl font-semibold mb-2 text-center">Bilingual support</h3>
            <p class="text-gray-600 text-center">You can play in either english or portuguese. The choice is yours
                (based on your device's language)!</p>
        </div>

        <!-- Card 5 -->
        <div class="card bg-white p-6 rounded-lg shadow-md border border-black border-4 rounded-lg shadow" onmousemove="handleMouseMove(this, event)"
             onmouseleave="handleMouseLeave(this)">
            <img src="{{ asset('rewards.jpg') }}" style="scale: " alt="Feature 5"
                 class="w-full h-48 object-cover mb-4 rounded transition-transform duration-300 ease-in-out">
            <h3 class="text-xl font-semibold mb-2 text-center">Tons of rewards</h3>
            <p class="text-gray-600 text-center">Based on how good you are doing in a quiz, you will recieve pootis coins.
                You can use them to buy cool merch on the shop!</p>
        </div>

        <!-- Card 6 -->
        <div class="card bg-white p-6 rounded-lg shadow-md border border-black border-4 rounded-lg shadow" onmousemove="handleMouseMove(this, event)"
             onmouseleave="handleMouseLeave(this)">
            <img src="{{ asset('history.jpg') }}" alt="Feature 6"
                 class="w-full h-48 object-cover mb-4 rounded transition-transform duration-300 ease-in-out">
            <h3 class="text-xl font-semibold mb-2 text-center">Match history</h3>
            <p class="text-gray-600 text-center">Pootis quiz allows you to check all your previous quizzes, with useful info,
                like the theme, the score and the date!</p>
        </div>
    </div>
</div>

<script>
    function handleMouseMove(card, event) {
        const rect = card.getBoundingClientRect();
        const x = event.clientX - rect.left;
        const y = event.clientY - rect.top;

        const rotationX = (y / rect.height - 0.5) * 12; // Adjust the factor for rotation sensitivity
        const rotationY = (x / rect.width - 0.5) * 12; // Adjust the factor for rotation sensitivity

        card.style.transform = `perspective(1000px) rotateX(${rotationX}deg) rotateY(${rotationY}deg)`;
    }

    function handleMouseLeave(card) {
        card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg)';
    }
</script>

</body>

</html>
@endsection
