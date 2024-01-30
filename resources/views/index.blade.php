@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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

<body class="bg-gray-100">

<div class="container mx-auto mt-8 mb-16 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Card with download button -->
        <div class="bg-white p-6 rounded-lg shadow-md relative text-lg" style="width: 100%;">
            <h3 class="text-3xl font-semibold mb-8 text-center">Download Pootis Quiz App</h3>
            <div class="mt-8 text-center">
                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Download Now</a>
            </div>
        </div>

        <!-- Card with video -->
        <div class="bg-white p-6 rounded-lg shadow-md relative" style="width: 100%;">
            <h3 class="text-xl font-medium mb-4 text-center">Pootis Quiz App Video</h3>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/fyVAEw3Zywg" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>

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

</html>
@endsection
