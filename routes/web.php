<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\AchievementsController;
use App\Http\Controllers\ScoresController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ThemesController;
use App\Http\Controllers\UserCurrencyController;
use App\Http\Controllers\AchievementUserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/features', function () {
    return view('features');
})->name('features');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/admin', function () {
    return view('admin.admin-dashboard');
})->name('admin');


// deletes
Route::delete('/admin/themes/{theme}', [ThemesController::class, 'deleteTheme'])->name('admin.themes.deleteTheme');
Route::delete('/admin/questions/{question}', [QuestionsController::class, 'deleteQuestion'])->name('admin.questions.delete');
Route::delete('/admin/achievements/{achievement}', [AchievementsController::class, 'deleteAchievement'])->name('admin.achievements.delete');
Route::delete('/admin/users/{user}', [UsersController::class, 'deleteUser'])->name('admin.users.delete');


// routes to get to the admin pages
Route::get('/admin/themes/checkThemes', [ThemesController::class, 'checkAllThemes'])->name('check.all.themes');
Route::get('/admin/questions/checkQuestions', [QuestionsController::class, 'checkAllQuestions'])->name('check.all.questions');
Route::get('/admin/achievements/checkAchievements', [AchievementsController::class, 'checkAllAchievements'])->name('check.all.achievements');
Route::get('/admin/users/checkUsers', [UsersController::class, 'checkAllUsers'])->name('check.all.users');



// resources from the controllers
Route::resource('questions', QuestionsController::class);
Route::resource('achievements', AchievementsController::class);
Route::resource('scores', ScoresController::class);
Route::resource('shop', ShopController::class);
Route::resource('themes', ThemesController::class);
Route::resource('users', UsersController::class);
Route::resource('user-currency', UserCurrencyController::class);
Route::resource('achievement-user', AchievementUserController::class);
