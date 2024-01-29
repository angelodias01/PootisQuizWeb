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
    <a class="flex items-center justify-center bg-gray-800">
        <img src="{{ asset('pootisquiz.svg') }}" alt="">
    </a>
    <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
        <nav class="flex flex-col mx-6 my-6 space-y-4">
            <a href="#" class="flex py-2 px-2 items-center justify-center rounded-lg bg-gray-700 hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">
                <span class="text-s text-center text-white ">Home</span>
            </a>
            <button type="button" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <span class="flex-1 ml-3 text-center whitespace-nowrap text-s text-white" sidebar-toggle-item>Achievements</span>
                <svg sidebar-toggle-item class="w-6 h-6 " fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="dropdown-example" class="hidden">
                <li>
                    <a href="#" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">Products</a>
                </li>
                <li>
                    <a href="#" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">Billing</a>
                </li>
                <li>
                    <a href="#" class=" text-s text-white flex py-2 px-4 items-center justify-center rounded-lg hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">Invoice</a>
                </li>
            </ul>

            <button type="button" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400" aria-controls="dropdown-example2" data-collapse-toggle="dropdown-example2">
                <span class="flex-1 ml-3 text-center whitespace-nowrap text-s text-white" sidebar-toggle-item>Questions</span>
                <svg sidebar-toggle-item class="w-6 h-6 " fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="dropdown-example2" class="hidden">
                <li>
                    <a href="#" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">Products</a>
                </li>
                <li>
                    <a href="#" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">Billing</a>
                </li>
                <li>
                    <a href="#" class=" text-s text-white flex py-2 px-4 items-center justify-center rounded-lg hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">Invoice</a>
                </li>
            </ul>
            <button type="button" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400" aria-controls="dropdown-example3" data-collapse-toggle="dropdown-example3">
                <span class="flex-1 ml-3 text-center whitespace-nowrap text-s text-white" sidebar-toggle-item>Shop</span>
                <svg sidebar-toggle-item class="w-6 h-6 " fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="dropdown-example3" class="hidden">
                <li>
                    <a href="#" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">Products</a>
                </li>
                <li>
                    <a href="#" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">Billing</a>
                </li>
                <li>
                    <a href="#" class=" text-s text-white flex py-2 px-4 items-center justify-center rounded-lg hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">Invoice</a>
                </li>
            </ul>
            <button type="button" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400" aria-controls="dropdown-example4" data-collapse-toggle="dropdown-example4">
                <span class="flex-1 ml-3 text-center whitespace-nowrap text-s text-white" sidebar-toggle-item>Themes</span>
                <svg sidebar-toggle-item class="w-6 h-6 " fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="dropdown-example4" class="hidden">
                <li>
                    <a href="#" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">Products</a>
                </li>
                <li>
                    <a href="#" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">Billing</a>
                </li>
                <li>
                    <a href="#" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">Invoice</a>
                </li>
            </ul>
            <button type="button" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400" aria-controls="dropdown-example5" data-collapse-toggle="dropdown-example5">
                <span class="flex-1 ml-3 text-center whitespace-nowrap text-s text-white" sidebar-toggle-item>Users</span>
                <svg sidebar-toggle-item class="w-6 h-6 " fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="dropdown-example5" class="hidden">
                <li>
                    <a href="#" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">Products</a>
                </li>
                <li>
                    <a href="#" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">Billing</a>
                </li>
                <li>
                    <a href="#" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">Invoice</a>
                </li>
            </ul>
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
        <table class="border-collapse border border-gray-800">
            <thead>
            <tr>
                <th class="border border-gray-800 px-4 py-2">ID</th>
                <th class="border border-gray-800 px-4 py-2">Username</th>
                <th class="border border-gray-800 px-4 py-2">Email</th>
                <th class="border border-gray-800 px-4 py-2">Password</th>
                <th class="border border-gray-800 px-4 py-2">Is Admin</th>
                <th class="border border-gray-800 px-4 py-2">Created at</th>
            </tr>
            </thead>
            <tbody>
            <?php
            use App\Models\User;

            if (isset($_GET['load_admins'])) {
                $users = User::where('is_admin', 1)->get();
            } elseif (isset($_GET['load_nonadmins'])) {
                $users = User::where('is_admin', 0)->get();
            } else {
                $users = User::all();
            }

            foreach ($users as $user) {
                echo '<tr>';
                echo '<td class="border border-gray-800 px-4 py-2">' . $user->userId . '</td>';
                echo '<td class="border border-gray-800 px-4 py-2">' . $user->username . '</td>';
                echo '<td class="border border-gray-800 px-4 py-2">' . $user->email . '</td>';
                echo '<td class="border border-gray-800 px-4 py-2" data-password="' . htmlspecialchars($user->password) . '"><span class="password-display">************</span></td>';
                echo '<td class="border border-gray-800 px-4 py-2">' . ($user->is_admin ? 'Yes' : 'No') . '</td>';
                echo '<td class="border border-gray-800 px-4 py-2">' . $user->created_at . '</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </main>
</div>

<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</body>
</html>
