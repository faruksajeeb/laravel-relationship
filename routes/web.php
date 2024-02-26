<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'posts'=>PostController::class,
    'categories' =>CategoryController::class,
    'authors' =>AuthorController::class,
    'books' =>BookController::class,
    'chapoters' =>ChapterController::class,
    'logs' =>LogController::class,
    'images' =>ImageController::class,
]);

Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
