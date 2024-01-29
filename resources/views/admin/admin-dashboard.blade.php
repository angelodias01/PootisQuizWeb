
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
            <img src="pootisquiz.svg" alt="">
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
                        <a href="{{ route('check.all.users') }}" class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg hover:bg-gray-700 hover:text-gray-400 focus:bg-gray-700 focus:text-gray-400">Check All Users</a>
                    </li>
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
            <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-full mr-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(147, 51, 234, 1);"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>
                    </div>
                    <?php
                    use App\Models\User;
                    $totalUsers = User::where('is_admin', 0)->count();
                    $totalAdmins = User::where('is_admin', 1)->count();
                    ?>
                    <div>
                        <span class="block text-gray-500">App Users</span>
                        <span class="block text-center text-2xl font-bold"><?php echo $totalUsers; ?></span>
                    </div>

                    <div class="ml-auto">
                        <span class="block text-gray-500">App Admins</span>
                        <span class="text-center block text-2xl font-bold"><?php echo $totalAdmins; ?></span>
                    </div>
                </div>
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold">6.8</span>
                        <span class="block text-gray-500">Average mark</span>
                    </div>
                </div>
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                        </svg>
                    </div>
                    <div>
                        <span class="inline-block text-2xl font-bold">9</span>
                        <span class="inline-block text-xl text-gray-500 font-semibold">(14%)</span>
                        <span class="block text-gray-500">Underperforming students</span>
                    </div>
                </div>
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold">83%</span>
                        <span class="block text-gray-500">Finished homeworks</span>
                    </div>
                </div>
            </section>
            <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-full mr-6">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold">62</span>
                        <span class="block text-gray-500">Students</span>
                    </div>
                </div>
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold">6.8</span>
                        <span class="block text-gray-500">Average mark</span>
                    </div>
                </div>
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                        </svg>
                    </div>
                    <div>
                        <span class="inline-block text-2xl font-bold">9</span>
                        <span class="inline-block text-xl text-gray-500 font-semibold">(14%)</span>
                        <span class="block text-gray-500">Underperforming students</span>
                    </div>
                </div>
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold">83%</span>
                        <span class="block text-gray-500">Finished homeworks</span>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    </body>
</html>
