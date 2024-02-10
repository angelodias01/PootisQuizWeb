<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- CSS  Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts from Bootstrap (popper.js needed for some components) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>

@extends('layouts.admin')
<body class="flex bg-gray-100 min-h-screen">
<aside class="hidden sm:flex sm:flex-col">
    <a class="flex items-center justify-center bg-purple-400">
        <img src="{{ asset('pootisquiz.svg') }}"  style="width: 200px; height: 280px;" alt="">
    </a>
    <div class="flex-grow flex flex-col justify-between text-gray-500 bg-purple-400 text-purple-100">
        <nav class="flex flex-col mx-6 my-4 space-y-2">
            <a href="{{ route('admin') }}" class="flex py-2 px-2 items-center justify-center rounded-lg {{ Request::route()->getName() == 'admin' ? 'hover:bg-gray-500 hover:text-gray-500 focus:bg-gray-500 focus:text-gray-500' : 'hover:bg-gray-500 hover:text-gray-500 focus:bg-gray-500 focus:text-gray-500' }}">
                <span class="text-s text-center text-white">Home</span>
            </a>
            <hr class="border-solid border-4 border-white rounded-lg">
            <a href="{{ route('check.all.themes') }}" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg {{ Request::route()->getName() == 'check.all.themes' ? 'bg-green-600 hover:bg-green-600 hover:text-gray-400 focus:bg-green-600 focus:text-gray-400' : 'hover:bg-green-700 hover:text-gray-400 focus:bg-green-700 focus:text-gray-400' }}">Themes</a>
            <a href="{{ route('check.all.questions') }}" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg {{ Request::route()->getName() == 'check.all.questions' ? 'bg-red-600 hover:bg-red-600 hover:text-gray-400 focus:bg-red-600 focus:text-gray-400' : 'hover:bg-red-700 hover:text-gray-400 focus:bg-red-700 focus:text-gray-400' }}">Questions</a>
            <a href="{{ route('check.all.achievements') }}" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg {{ Request::route()->getName() == 'check.all.achievements' ? 'bg-blue-600 hover:bg-blue-600 hover:text-gray-400 focus:bg-blue-600 focus:text-gray-400' : 'hover:bg-blue-700 hover:text-gray-400 focus:bg-blue-700 focus:text-gray-400' }}">Achievements</a>
            <a href="{{ route('check.all.users') }}" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg {{ Request::route()->getName() == 'check.all.users' ? 'bg-yellow-600 hover:bg-yellow-600 hover:text-gray-400 focus:bg-yellow-600 focus:text-gray-400' : 'hover:bg-yellow-600 hover:text-gray-400 focus:bg-yellow-600 focus:text-gray-400' }}">Users</a>
        </nav>
    </div>
</aside>
<div class="flex-grow text-gray-800">
    <header class="flex items-center h-20 px-6 sm:px-10 bg-white">
        <button class="block sm:hidden relative flex-shrink-0 p-2 mr-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800 focus:bg-gray-100 focus:text-gray-800 rounded-full">
            <span class="sr-only">Menu</span>
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
        </button>
        <div class="relative w-full max-w-md sm:-ml-2">
            <h1 class="text-4xl font-semibold mb-2">Pootis Quiz Dashboard</h1>
        </div>
        <div class="flex flex-shrink-0 items-center ml-auto">
            <div class="border-l pl-3 ml-3 space-x-1">
                <button class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
                    <span class="sr-only">Log out</span>
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </button>
            </div>
        </div>
    </header>
    <main class="p-6 sm:p-10 space-y-6">
        <table class="border-collapse rounded-lg border-solid border-4">
            <thead>
            <tr>
                <th class="border border-gray-800 px-4 py-2 border-4">ID</th>
                <th class="border border-gray-800 px-4 py-2 border-4">Achievement Name</th>
                <th class="border border-gray-800 px-4 py-2 border-4">Description</th>
                <th class="border border-gray-800 px-4 py-2 border-4">Created at</th>
                <th class="border border-gray-800 px-4 py-2 border-4 border-4" colspan="2">
                    <div class="flex justify-center">
                        <a href="{{ route('admin.achievements.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
                            Create New Achievement
                        </a>
                    </div>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($achievements as $achievement)
            <tr>
                <td class="border border-gray-800 px-4 py-2 border-4"><?= $achievement->achievementId ?></td>
                <td class="border border-gray-800 px-4 py-2 border-4"><?= $achievement->achievementName ?></td>
                <td class="border border-gray-800 px-4 py-2 border-4"><?= $achievement->description ?></td>
                <td class="border border-gray-800 px-4 py-2 border-4"><?= $achievement->created_at ?></td>
                <td class="border border-gray-800 px-4 py-2 border-4">
                    <a href="{{ route('admin.achievements.editAchievement', ['achievement' => $achievement->achievementId]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</a>
                </td>
                <td class="border border-gray-800 px-4 py-2 border-4">
                    <form id="deleteForm<?= $achievement->achievementId ?>" action="{{ route('admin.achievements.delete', ['achievement' => $achievement->achievementId]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this achievement?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </main>

</div>

<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</body>
</html>
