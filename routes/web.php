<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/register", [UserController::class, "showRegistrationForm"]);
Route::post("/register", [UserController::class, "submitRegistrationForm"]);
Route::post('/logout', [UserController::class, "logout"]);
Route::get('/signup', [UserController::class, "showLogin"])->name('publicSite');
Route::post('/signup', [UserController::class, "submitLogin"]);
Route::get("/", [UserController::class, "showMainPage"])->name('loggedHome');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostController::class, 'store']);
Route::get('/posts/index', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class, 'destroy']);
