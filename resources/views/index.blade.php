@extends('layouts.app') <!-- Extend the app layout -->
@section('content')

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Features</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

<div class="container mx-auto px-4 py-8 text-center">
    <section class="my-8">
        <h3 class="text-3xl font-bold mb-4">Get Started</h3>
        <p class="text-gray-600 mb-4">Try the Pootis Quiz app now and start challenging yourself with exciting
            quizzes.</p>
        <a href="https://github.com/JustaStudent01/Quiz"
           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Try now!</a>
    </section>

    <div class="flex">
        <div id="about-us" class="my-8 flex-1">
            <h2 class="text-3xl font-bold mb-4">About Us</h2>
            <p class="text-gray-600 mb-4 p-2 text-justify">This project aims to create a quiz application in an
                Android environment using the resources provided by Android Studio. Our goal is to test users'
                knowledge, provide fun quizzes, encourage friendly competitions among our user base, and ultimately
                offer an enjoyable experience. The project primarily utilizes the Java programming language for the
                application code, supplemented by PHP and the Laravel framework for building a robust backend. The
                frontend development is facilitated by Tailwind CSS, which helps in creating a modern and responsive
                user interface. We have future plans to develop an enhanced website to showcase our application and
                cater to a wider audience. Our objective is to entertain and engage users while continuously
                improving our skills in this domain.</p>

        </div>
        <div id="about-app" class="my-8 flex-1">
            <h2 class="text-3xl font-bold mb-4">About App</h2>
            <p class="text-gray-600 mb-4 p-2 text-justify">This quiz app is designed to provide an entertaining and
                engaging experience for users. It offers a wide range of quizzes on various topics to test your
                knowledge and challenge yourself. With a user-friendly interface and intuitive design, the app makes
                it easy to navigate and enjoy the quiz experience. Whether you're a casual quiz enthusiast or a
                competitive player, the app offers something for everyone.</p>
        </div>
    </div>

    <section id="features" class="my-8">
        <h2 class="text-3xl font-bold mb-4">Some Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="feature bg-gray-200 p-4 rounded">
                <img src="images/ach2-4.jpg" alt="Feature Image" class="w-full h-48 object-cover mb-2">
                <h3 class="text-xl font-semibold mb-2">Wide Range of Quizzes</h3>
                <p class="text-gray-600">Explore a vast collection of quizzes on various topics, including general
                    knowledge, sports, history, and more.</p>
            </div>
            <div class="feature bg-gray-200 p-4 rounded">
                <img src="images/ach2-4.jpg" alt="Feature Image" class="w-full h-48 object-cover mb-2">
                <h3 class="text-xl font-semibold mb-2">Wide Range of Quizzes</h3>
                <p class="text-gray-600">Explore a vast collection of quizzes on various topics, including general
                    knowledge, sports, history, and more.</p>
            </div>
            <div class="feature bg-gray-200 p-4 rounded">
                <img src="images/ach2-4.jpg" alt="Feature Image" class="w-full h-48 object-cover mb-2">
                <h3 class="text-xl font-semibold mb-2">Wide Range of Quizzes</h3>
                <p class="text-gray-600">Explore a vast collection of quizzes on various topics, including general
                    knowledge, sports, history, and more.</p>
            </div>
            <div class="feature bg-gray-200 p-4 rounded">
                <img src="images/ach2-4.jpg" alt="Feature Image" class="w-full h-48 object-cover mb-2">
                <h3 class="text-xl font-semibold mb-2">Wide Range of Quizzes</h3>
                <p class="text-gray-600">Explore a vast collection of quizzes on various topics, including general
                    knowledge, sports, history, and more.</p>
            </div>
            <div class="feature bg-gray-200 p-4 rounded">
                <img src="images/ach2-4.jpg" alt="Feature Image" class="w-full h-48 object-cover mb-2">
                <h3 class="text-xl font-semibold mb-2">Wide Range of Quizzes</h3>
                <p class="text-gray-600">Explore a vast collection of quizzes on various topics, including general
                    knowledge, sports, history, and more.</p>
            </div>
            <div class="feature bg-gray-200 p-4 rounded">
                <img src="images/ach2-4.jpg" alt="Feature Image" class="w-full h-48 object-cover mb-2">
                <h3 class="text-xl font-semibold mb-2">Wide Range of Quizzes</h3>
                <p class="text-gray-600">Explore a vast collection of quizzes on various topics, including general
                    knowledge, sports, history, and more.</p>
            </div>
            <!-- other feature items go here -->
        </div>
    </section>

    <section id="themes" class="my-8">
        <h2 class="sectiontext">Choose Your Favorite Themes</h2>
        <div class="themesgrid grid-cols-3 md:grid-cols-6 gap-4">
            <div class="themeitem bg-gradient-to-r from-indigo-500 to-indigo-800 rounded">
                <h3 class="themeitemtext text-white text-center py-2">Space</h3>
            </div>
            <!-- other theme items go here -->
        </div>
    </section>

    <!-- Suggestions Form -->
    <section class="my-8">
        <h3 class="text-2xl font-bold mb-4">Have any suggestions?</h3>
        <form action="/submit-suggestions" method="post" class="text-left">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded"
                       placeholder="Your Name" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded"
                       placeholder="Your Email" required>
            </div>
            <div class="mb-4">
                <label for="suggestion" class="block text-gray-700 text-sm font-bold mb-2">Your
                    Suggestion:</label>
                <textarea id="suggestion" name="suggestion" rows="4" class="w-full px-3 py-2 border rounded"
                          style="max-height: 400px; min-height: 40px;" placeholder="Your Suggestion"
                          required></textarea>
            </div>
            <button type="submit"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Submit
            </button>
        </form>
    </section>
    <!-- End Suggestions Form -->
</div>

</body>

</html>
@endsection
