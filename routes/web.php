<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get("/register", [UserController::class, "showRegistrationForm"]);
Route::post("/register", [UserController::class, "submitRegistrationForm"]);
Route::get("/loggedHome", [UserController::class, "showMainPage"])->name('loggedHome');
Route::get('/', [UserController::class, "showLogin"])->name('publicSite');
Route::post('/', [UserController::class, "submitLogin"]);
Route::post('/logout', [UserController::class, "logout"]);
