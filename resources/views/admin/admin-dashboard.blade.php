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
        <img src="{{ asset('pootisquiz.svg') }}" style="width: 200px; height: 280px;" alt="">
    </a>
    <div class="flex-grow flex flex-col justify-between text-gray-500 bg-purple-400 text-purple-100">
        <nav class="flex flex-col mx-6 my-4 space-y-2">
            <a href="{{ route('admin') }}"
               class="flex py-2 px-2 items-center justify-center rounded-lg {{ Request::route()->getName() == 'admin' ? 'bg-gray-500 hover:bg-gray-500 hover:text-gray-500 focus:bg-gray-500 focus:text-gray-500' : 'bg-gray-500 hover:bg-gray-500 hover:text-gray-500 focus:bg-gray-500 focus:text-gray-500' }}">
                <span class="text-s text-center text-white">Home</span>
            </a>
            <hr class="border-solid border-4 border-white rounded-lg">
            <a href="{{ route('check.all.themes') }}"
               class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg {{ Request::route()->getName() == 'check.all.themes' ? 'bg-gray-700 hover:bg-green-600 hover:text-gray-400 focus:bg-green-600 focus:text-gray-400' : 'hover:bg-green-700 hover:text-gray-400 focus:bg-green-700 focus:text-gray-400' }}">Themes</a>
            <a href="{{ route('check.all.questions') }}"
               class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg {{ Request::route()->getName() == 'check.all.questions' ? 'bg-gray-700 hover:bg-red-600 hover:text-gray-400 focus:bg-red-600 focus:text-gray-400' : 'hover:bg-red-700 hover:text-gray-400 focus:bg-red-700 focus:text-gray-400' }}">Questions</a>
            <a href="{{ route('check.all.achievements') }}"
               class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg {{ Request::route()->getName() == 'check.all.achievements' ? 'bg-gray-700 hover:bg-blue-600 hover:text-gray-400 focus:bg-blue-600 focus:text-gray-400' : 'hover:bg-blue-700 hover:text-gray-400 focus:bg-blue-700 focus:text-gray-400' }}">Achievements</a>
            <a href="{{ route('check.all.users') }}"
               class="text-s text-white flex py-2 px-4 items-center justify-center rounded-lg {{ Request::route()->getName() == 'check.all.users' ? 'bg-gray-700 hover:bg-yellow-600 hover:text-gray-400 focus:bg-yellow-600 focus:text-gray-400' : 'hover:bg-yellow-600 hover:text-gray-400 focus:bg-yellow-600 focus:text-gray-400' }}">Users</a>
        </nav>
    </div>
</aside>
<div class="flex-grow text-gray-800">
    <header class="flex items-center h-20 px-6 sm:px-10 bg-white">
        <button
            class="block sm:hidden relative flex-shrink-0 p-2 mr-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800 focus:bg-gray-100 focus:text-gray-800 rounded-full">
            <span class="sr-only">Menu</span>
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
            </svg>
        </button>
        <div class="relative w-full max-w-md sm:-ml-2">
            <h1 class="text-4xl font-semibold mb-2">Pootis Quiz Dashboard</h1>
        </div>
        <div class="flex flex-shrink-0 items-center ml-auto">
            <div class="border-l pl-3 ml-3 space-x-1">
                <button
                    class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
                    <span class="sr-only">Log out</span>
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                </button>
            </div>
        </div>
    </header>
    <main class="p-6 sm:p-10 space-y-6">
        <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
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
                        <span class="block text-gray-500 text-center">Total Themes</span>
                        <span class="block text-center text-2xl font-bold"><?php echo $themeCount; ?></span>
                    </div>
                </div>
            </div>
            <div class="flex items-center p-8 bg-white border border-black border-4 rounded-lg shadow">
                <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"/>
                    </svg>
                </div>
                <div class="flex justify-center items-center">
                    <?php

                    use App\Models\Questions;

                    $questionCount = Questions::count();
                    ?>
                    <div>
                        <span class="block text-gray-500 text-center">Total Questions</span>
                        <span class="block text-center text-2xl font-bold"><?php echo $questionCount; ?></span>
                    </div>
                </div>
            </div>
            <div class="flex items-center p-8 bg-white border border-black border-4 rounded-lg shadow">
                <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <div class="flex justify-center items-center">
                    <?php

                    use App\Models\Achievements;

                    $achievementCount = Achievements::count();
                    ?>
                    <div>
                        <span class="block text-gray-500 text-center">Total Achievements</span>
                        <span class="block text-center text-2xl font-bold"><?php echo $achievementCount; ?></span>
                    </div>
                </div>
            </div>
        </section>
        <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
            <div class="flex items-center p-8 bg-white border border-black border-4 rounded-lg shadow">
                <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
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
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                </div>
                <?php
                 use App\Models\AchievementsUser;

                 $totalAchievements = AchievementsUser::count();
                 $totalUsers = User::count();

                 $averageAchievementCount = $totalUsers > 0 ? $totalAchievements / $totalUsers : 0;
                 $averageAchievementCountFormatted = number_format($averageAchievementCount);

                 ?>

                <div class="flex justify-center items-center">
                    <div>
                        <span class="block text-gray-500 text-center">Average User Achievements</span>
                        <span class="block text-center text-2xl font-bold">{{ $averageAchievementCountFormatted }}</span>
                    </div>
                </div>
            </div>
            <div class="flex items-center p-8 bg-white border border-black border-4 rounded-lg shadow">
                <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"/>
                    </svg>
                </div>
                <?php
                use App\Models\UserCurrency;

                $totalCurrencyAmount = UserCurrency::sum('amount');
                $totalUsers = User::count();

                $averageCurrencyAmount = $totalUsers > 0 ? $totalCurrencyAmount / $totalUsers : 0;
                $averageCurrencyAmountFormatted = number_format($averageCurrencyAmount);
                ?>

                <div class="flex justify-center items-center">
                    <div>
                        <span class="block text-gray-500 text-center">Average User Currency</span>
                        <span class="block text-center text-2xl font-bold">{{ $averageCurrencyAmountFormatted }}</span>
                    </div>
                </div>
            </div>
            <div class="flex items-center p-8 bg-white border border-black border-4 rounded-lg shadow">
                <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
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
</div>
<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</body>
</html>
