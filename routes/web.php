<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



Route::get('/', function () {
    return view('home', ['title' => 'homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'about']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});

Route::get('/posts', [PostController::class, 'showAll']);
Route::get('/posts/{post:slug}', [PostController::class, 'showSinglePost']);
Route::get('/authors/{user:username}', [PostController::class, 'authorPost']);
Route::get('/categories/{category:slug}', [PostController::class, 'showAllCategories']);


Route::get('/register', [RegisterController::class, 'index'])->name('login')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::resource('/dashboard/posts', DashboardPostController::class);
    Route::get('/dashboard/post/checkSlug', [DashboardPostController::class, 'checkSlug']);
});
