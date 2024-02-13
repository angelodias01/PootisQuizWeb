@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="icon" href="/pootisquiz.svg" type="image/svg+xml" style="width: 64px; height: 64px;">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        .cookie-button {
            background-color: #718096;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-left: auto;
        }

        .cookie-button:hover {
            background-color: #4a5568;
        }
    </style>
</head>

<body >
<!-- Terms of cookies used -->
<div id="cookie-box" class="bg-gray-300 p-4 fixed bottom-0 left-0 w-full">
    <p class="text-sm text-gray-700 flex items-center justify-between">
        <span>
            Unlike most of all other websites, feel free since we do not use any cookies or retain any user information.
            Freedom is a right to be enjoyed!
        </span>
        <button id="accept-cookie" class="cookie-button ml-4">OK</button>
    </p>
</div>
<main class="p-6 sm:p-10 space-y-6">
    <div class="flex justify-center items-center h-full">
        <h1 class="text-center text-2xl font-bold inline-block justify-center items-center border border-black rounded-lg px-4 py-2 bg-white bg-opacity-75">
            App Stats
        </h1>
    </div>

    <section class="grid md:grid-cols-2 xl:grid-cols-4 pt-4 gap-6">
        <div class="flex items-center p-8 bg-white border border-black border-4 rounded-lg shadow">
            <div
                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-full mr-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                     style="fill: rgba(147, 51, 234, 1);">
                    <path
                        d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
                </svg>
            </div>
            <?php

            use App\Models\User;

            $totalUsers = User::count();
            ?>
            <div>
                <span class="block text-gray-500">Total App Users</span>
                <span class="block text-center text-2xl font-bold"><?php echo $totalUsers; ?></span>
            </div>
        </div>
        <div class="flex items-center p-8 bg-white border border-black border-4 rounded-lg shadow">
            <div
                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24"
                     style="fill: rgba(22, 163, 74, 1);">
                    <path
                        d="M13.4 2.096a10.08 10.08 0 0 0-8.937 3.331A10.054 10.054 0 0 0 2.096 13.4c.53 3.894 3.458 7.207 7.285 8.246a9.982 9.982 0 0 0 2.618.354l.142-.001a3.001 3.001 0 0 0 2.516-1.426 2.989 2.989 0 0 0 .153-2.879l-.199-.416a1.919 1.919 0 0 1 .094-1.912 2.004 2.004 0 0 1 2.576-.755l.412.197c.412.198.85.299 1.301.299A3.022 3.022 0 0 0 22 12.14a9.935 9.935 0 0 0-.353-2.76c-1.04-3.826-4.353-6.754-8.247-7.284zm5.158 10.909-.412-.197c-1.828-.878-4.07-.198-5.135 1.494-.738 1.176-.813 2.576-.204 3.842l.199.416a.983.983 0 0 1-.051.961.992.992 0 0 1-.844.479h-.112a8.061 8.061 0 0 1-2.095-.283c-3.063-.831-5.403-3.479-5.826-6.586-.321-2.355.352-4.623 1.893-6.389a8.002 8.002 0 0 1 7.16-2.664c3.107.423 5.755 2.764 6.586 5.826.198.73.293 1.474.282 2.207-.012.807-.845 1.183-1.441.894z"></path>
                    <circle cx="7.5" cy="14.5" r="1.5"></circle>
                    <circle cx="7.5" cy="10.5" r="1.5"></circle>
                    <circle cx="10.5" cy="7.5" r="1.5"></circle>
                    <circle cx="14.5" cy="7.5" r="1.5"></circle>
                </svg>
            </div>
            <div class="flex justify-center items-center">
                <?php

                use App\Models\Themes;

                $themeCount = Themes::count();
                ?>
                <div>
                    <span class="block text-gray-500 text-center">Total App Themes</span>
                    <span class="block text-center text-2xl font-bold"><?php echo $themeCount; ?></span>
                </div>
            </div>
        </div>
        <div class="flex items-center p-8 bg-white border border-black border-4 rounded-lg shadow">
            <div
                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" style="fill: rgba(185, 28, 28, 1);transform: ;msFilter:;"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
            </div>
            <div class="flex justify-center items-center">
                <?php

                use App\Models\Questions;

                $questionCount = Questions::count();
                ?>
                <div>
                    <span class="block text-gray-500 text-center">Total App Questions</span>
                    <span class="block text-center text-2xl font-bold"><?php echo $questionCount; ?></span>
                </div>
            </div>
        </div>
        <div class="flex items-center p-8 bg-white border border-black border-4 rounded-lg shadow">
            <div
                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" style="fill: rgba(29, 78, 216, 1);transform: ;msFilter:;"><path d="M12 22c3.859 0 7-3.141 7-7s-3.141-7-7-7c-3.86 0-7 3.141-7 7s3.14 7 7 7zm0-12c2.757 0 5 2.243 5 5s-2.243 5-5 5-5-2.243-5-5 2.243-5 5-5zm-1-8H7v5.518a8.957 8.957 0 0 1 4-1.459V2zm6 0h-4v4.059a8.957 8.957 0 0 1 4 1.459V2z"></path><path d="m10.019 15.811-.468 2.726L12 17.25l2.449 1.287-.468-2.726 1.982-1.932-2.738-.398L12 11l-1.225 2.481-2.738.398z"></path></svg>
            </div>
            <div class="flex justify-center items-center">
                <?php

                use App\Models\Achievements;

                $achievementCount = Achievements::count();
                ?>
                <div>
                    <span class="block text-gray-500 text-center">Total App Achievements</span>
                    <span class="block text-center text-2xl font-bold"><?php echo $achievementCount; ?></span>
                </div>
            </div>
        </div>
    </section>
    <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
        <div class="flex items-center p-8 bg-white border border-black border-4 rounded-lg shadow">
            <div
                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-full mr-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" style="fill: rgba(126, 34, 206, 1);transform: ;msFilter:;"><path d="M20 7h-4V4c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H4c-1.103 0-2 .897-2 2v9a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V9c0-1.103-.897-2-2-2zM4 11h4v8H4v-8zm6-1V4h4v15h-4v-9zm10 9h-4V9h4v10z"></path></svg>
            </div>
            <?php

            use App\Models\Scores;

            $scores = Scores::pluck('score')->all();
            $averageScore = count($scores) > 0 ? array_sum($scores) / count($scores) : 0;
            ?>
            <div class="flex justify-center items-center">
                <div>
                    <span class="block text-gray-500 text-center">Average Players Score</span>
                    <span class="block text-center text-2xl font-bold">{{ number_format($averageScore) }}</span>
                </div>
            </div>
        </div>
        <div class="flex items-center p-8 bg-white border border-black border-4 rounded-lg shadow">
            <div
                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" style="fill: rgba(21, 128, 61, 1);transform: ;msFilter:;"><path d="M18 8.31c-.36-.41-.73-.82-1.12-1.21l-.29-.27.14-.12a3.15 3.15 0 0 0 .9-3.49A3.91 3.91 0 0 0 14 1v2a2 2 0 0 1 1.76 1c.17.4 0 .84-.47 1.31-.07.08-.15.13-.22.2-3-2.41-6.29-3.77-7.9-2.16a2.16 2.16 0 0 0-.41.59v.1l-.18.53-4.41 13.1A3.28 3.28 0 0 0 5.28 22a3.21 3.21 0 0 0 1-.17L20 17.28a1 1 0 0 0 .43-.31l.21-.18c1.43-1.44.51-4.21-1.41-6.9A6.63 6.63 0 0 1 23 9V7a8.44 8.44 0 0 0-5 1.31zM5.7 19.93a1.29 1.29 0 0 1-1.63-1.63l1.36-4.1a10.7 10.7 0 0 0 4.29 4.39zm7-2.33a8.87 8.87 0 0 1-6.3-6.29l1-3 .06.09c.11.22.25.45.39.68s.16.29.26.44.33.48.51.73.19.28.3.42.43.55.66.82l.29.35c.34.39.7.77 1.08 1.16s.68.64 1 1l.33.28.78.63.37.28c.28.2.55.4.83.58l.31.2c.36.22.72.43 1.07.61h.05zm6.51-2.23h-.06c-.69.38-3.56-.57-6.79-3.81-.34-.34-.66-.67-.95-1l-.29-.35-.53-.64-.29-.4c-.13-.19-.27-.37-.39-.55l-.26-.42-.29-.47c-.08-.14-.14-.27-.21-.4s-.15-.26-.21-.4a3.31 3.31 0 0 1-.14-.36c-.05-.13-.11-.26-.15-.38S8.6 6 8.57 5.88s-.05-.22-.07-.32a2.26 2.26 0 0 1 0-.26 1 1 0 0 1 0-.24l.11-.31c.36-.36 2.23 0 4.73 1.9A4.13 4.13 0 0 1 12 7v2a6.45 6.45 0 0 0 3-.94l.48.46c.42.42.81.85 1.18 1.28a5.32 5.32 0 0 0-.6 3.4l2-.39a3.57 3.57 0 0 1 0-1.12 11.3 11.3 0 0 1 .81 1.45c.56 1.32.52 2.06.34 2.23z"></path></svg>
            </div>
            <div class="flex justify-center items-center">
                <div>
                    <span class="block text-gray-500 text-center">Coming Soon</span>
                    <span class="block text-center text-2xl font-bold"> 😄</span>
                </div>
            </div>
        </div>
    </section>
</main>
<main class="sm:mx-10 pb-8">
    <section class="grid md:grid-cols-2 gap-6">
        <div class="p-6 rounded-lg shadow-md relative text-lg bg-white rounded-lg flex flex-col items-center justify-center space-x-4 border border-black border-4 rounded-lg shadow" style="width: 100%;">
            <a class="flex items-center justify-start">
                <img src="{{ asset('pootisquiz.svg') }}" style="width: 200px; height: 280px;" alt="">
            </a>
            <h3 class="text-4xl font-semibold mb-10 text-center">Download Pootis Quiz App</h3>
            <div class="flex flex-wrap justify-center space-x-4">
                <a href="#" class="flex items-center border rounded-lg px-4 py-2 hover:bg-gray-200 bg-blue-400 bg-opacity-75">
                    <img src="https://cdn-icons-png.flaticon.com/512/888/888857.png" class="w-7 md:w-8">
                    <div class="ml-3">
                        <p class="text-lg font-semibold text-black">Download on</p>
                        <p class="text-lg text-black">Google Play Store</p>
                    </div>
                </a>
                <a href="#" class="flex items-center border rounded-lg px-4 py-2 hover:bg-gray-200 bg-blue-400 bg-opacity-75">
                    <img src="https://cdn-icons-png.flaticon.com/512/888/888841.png" class="w-7 md:w-8">
                    <div class="ml-3">
                        <p class="text-lg font-semibold text-black">Download on</p>
                        <p class="text-lg text-black">Apple Store</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="p-6 rounded-lg shadow-lg relative text-lg bg-white rounded-lg flex flex-col items-center justify-center space-x-4 border border-black border-4 rounded-lg" style="width: 100%;">
            <h2 class="text-2xl font-semibold mb-2">Why Pootis Quiz?</h2>
            <p class="text-sm mb-4">Because Heavy and TF2 are cool. Check it out:</p>
            <div class="video-container">
                <video width="620" height="420" class="border border-4 rounded-lg" controls muted preload="auto">
                    <source src="{{ asset('PootisMovie.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>
</main>

<script>
    // Selects the ok button
    const acceptButton = document.getElementById('accept-cookie');
    // Selects the terms box
    const cookieBox = document.getElementById('cookie-box');

    // Adds and even clicker to the button
    acceptButton.addEventListener('click', function() {
        // Hides the terms
        cookieBox.style.display = 'none';
        // Stores localy that the terms were accepted
        localStorage.setItem('cookieAccepted', true);
    });

    // Checks if they were accepted, if yes they won't show again
    if (localStorage.getItem('cookieAccepted')) {
        cookieBox.style.display = 'none';
    }
</script>

</body>
<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</html>
@endsection
