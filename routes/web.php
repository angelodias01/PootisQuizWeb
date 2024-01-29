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

// routes for the admin dashboard options
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('questions', QuestionsController::class);
    Route::resource('achievements', AchievementController::class);
    Route::resource('achievement_user', AchievementUserController::class);
    Route::resource('scores', ScoresController::class);
    Route::resource('users', UserController::class);
    Route::resource('user_currency', UserCurrencyController::class);
    Route::resource('themes', ThemesController::class);
    Route::resource('shop', ShopController::class);
});
// routes for clicking the admin dashboard options
//Route::get('/admin/questions', [QuestionsController::class, 'index'])->name('admin.questions.index');
//Route::get('/admin/achievements', [AchievementController::class, 'index'])->name('admin.achievements.index');
//Route::get('/admin/achievement_user', [AchievementUserController::class, 'index'])->name('admin.achievement_user.index');
//Route::get('/admin/scores', [ScoresController::class, 'index'])->name('admin.scores.index');
//Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
//Route::get('/admin/user_currency', [UserCurrencyController::class, 'index'])->name('admin.user_currency.index');
//Route::get('/admin/themes', [ThemesController::class, 'index'])->name('admin.themes.index');
//Route::get('/admin/shop', [ShopController::class, 'index'])->name('admin.shop.index');
