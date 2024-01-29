<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
});
Route::get('/admin', function () {
    return view('admin.admin-dashboard'); // View due to bloody change  (!!)
});
Route::get('/features', function () {
    return view('features');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function(){
    return view('about');
});

Route::get('/admin/users/checkUsers', [UserController::class, 'checkAllUsers'])->name('check.all.users');

// resources from the controllers
Route::resource('questions', QuestionsController::class);
Route::resource('achievements', AchievementController::class);
Route::resource('scores', ScoresController::class);
Route::resource('shop', ShopController::class);
Route::resource('themes', ThemesController::class);
Route::resource('users', UserController::class);
Route::resource('user-currency', UserCurrencyController::class);
Route::resource('achievement-user', AchievementUserController::class);
