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
Route::delete('/admin/questions/{question}', [QuestionsController::class, 'deleteQuestion'])->name('admin.questions.delete');
Route::delete('/admin/users/{user}', [UsersController::class, 'deleteUser'])->name('admin.users.delete');

// routes to get to the admin pages
Route::get('/admin/themes/checkThemes', [ThemesController::class, 'checkAllThemes'])->name('check.all.themes');
Route::get('/admin/questions/checkQuestions', [QuestionsController::class, 'checkAllQuestions'])->name('check.all.questions');
Route::get('/admin/achievements/checkAchievements', [AchievementsController::class, 'checkAllAchievements'])->name('check.all.achievements');
Route::get('/admin/users/checkUsers', [UsersController::class, 'checkAllUsers'])->name('check.all.users');

// achievements
Route::prefix('admin')->group(function () {
    Route::get('/achievements', [AchievementsController::class, 'index'])->name('admin.achievements.index');
    Route::get('/achievements/create', [AchievementsController::class, 'createAchievement'])->name('admin.achievements.create');
    Route::post('/achievements/store', [AchievementsController::class, 'store'])->name('admin.achievements.store');
    Route::get('/achievements/{achievement}/edit', [AchievementsController::class, 'edit'])->name('admin.achievements.edit');
    Route::put('/achievements/{achievement}', [AchievementsController::class, 'update'])->name('admin.achievements.update');
    Route::delete('/achievements/{achievement}', [AchievementsController::class, 'deleteAchievement'])->name('admin.achievements.delete');
});

// themes
Route::prefix('admin')->group(function () {
    Route::get('/themes', [ThemesController::class, 'index'])->name('admin.themes.index');
    Route::get('/themes/create', [ThemesController::class, 'createTheme'])->name('admin.themes.create');
    Route::post('/themes/store', [ThemesController::class, 'store'])->name('admin.themes.store');
    Route::get('/themes/editTheme/{theme}', [ThemesController::class, 'editTheme'])->name('admin.themes.editTheme');
    Route::put('/themes/{theme}', [ThemesController::class, 'updateTheme'])->name('admin.themes.updateTheme');
    Route::delete('/themes/{theme}', [ThemesController::class, 'deleteTheme'])->name('admin.themes.deleteTheme');
});

// questions
Route::prefix('admin')->group(function () {
    Route::get('/questions', [QuestionsController::class, 'index'])->name('admin.questions.index');
    Route::get('/questions/create', [QuestionsController::class, 'createQuestion'])->name('admin.questions.create');
    Route::post('/questions/store', [QuestionsController::class, 'store'])->name('admin.questions.store');
    Route::get('/questions/{question}/edit', [QuestionsController::class, 'edit'])->name('admin.questions.edit');
    Route::put('/questions/{question}', [QuestionsController::class, 'update'])->name('admin.questions.update');
    Route::delete('/questions/{question}', [QuestionsController::class, 'deleteQuestion'])->name('admin.questions.deleteQuestion');
});


// resources from the controllers
Route::resource('questions', QuestionsController::class);
Route::resource('achievements', AchievementsController::class);
Route::resource('scores', ScoresController::class);
Route::resource('shop', ShopController::class);
Route::resource('themes', ThemesController::class);
Route::resource('users', UsersController::class);
Route::resource('user-currency', UserCurrencyController::class);
Route::resource('achievement-user', AchievementUserController::class);
