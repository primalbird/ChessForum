<?php

use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::resource('discussions', DiscussionController::class);
Route::post('discussions/{discussion}/comments', [CommentController::class, 'store'])->name('comments.store');

// Главная страница
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Маршруты аутентификации
Auth::routes();

// Страница главной
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Страницы сайта
Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/learning', function () {
    return view('learning');
})->name('learning');
