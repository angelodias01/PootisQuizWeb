<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Dashboard (Questions)</title>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<!-- Navbar -->
<section class="relative mx-auto w-full">
    <nav class="flex flex-wrap justify-between bg-blue-400 bg-opacity-75 text-black">
        <div class="px-4 xl:px-8 py-4 flex w-full items-center">
            <a class="font-bold font-heading rounded-full scale-125" href="#">
                <img class="w-50 h-16 hidden md:inline-block" src="LogoPootis.svg" alt="logo">
            </a>
            <!-- Nav Links -->
            <ul class="flex flex-wrap md:flex-nowrap px-4 mx-auto font-bold font-heading space-x-12">
                <li><a class="hover:text-gray-800 hover:bg-white rounded-full py-2 px-4" href="#">Home</a></li>
                <li><a class="hover:text-gray-800 hover:bg-white rounded-full py-2 px-4" href="#">Updates</a></li>
                <li><a class="hover:text-gray-800 hover:bg-white rounded-full py-2 px-4" href="#">Suggestions</a></li>
            </ul>
        </div>
    </nav>
</section>

<!-- Dashboard Section -->
<section class="mx-auto w-full mt-8 px-4 md:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Dashboard Item 1 -->
        <div class="bg-white p-4 rounded-md shadow-md">
            <h2 class="text-lg font-semibold mb-4">Users</h2>
            <!-- Content for Users -->
            <!-- You can add tables, charts, or other relevant content here -->
        </div>

        <!-- Dashboard Item 2 -->
        <div class="bg-white p-4 rounded-md shadow-md">
            <h2 class="text-lg font-semibold mb-4">Questions</h2>
            <!-- Content for Questions -->
            <!-- You can add tables, charts, or other relevant content here -->
        </div>

        <!-- Dashboard Item 3 -->
        <div class="bg-white p-4 rounded-md shadow-md">
            <h2 class="text-lg font-semibold mb-4">Scores</h2>
            <!-- Content for Scores -->
            <!-- You can add tables, charts, or other relevant content here -->
        </div>
    </div>
</section>

</body>

</html>
