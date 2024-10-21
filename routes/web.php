<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, "login"])->name("login");
Route::get('/register', function () {
    return view("showRegistrationForm");
});
Route::post('/register', function () {
    return view("showRegistrationForm");
});
Route::get('/loggedHomepage', function () {
    return view("loggedHome");
});
