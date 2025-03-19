<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/welcome', function () {
    return view('welcome');
});


// Biar nongol doang pas slicing

// landing
Route::get('/', function(){
    return view('pages.landing');
});
// onboarding
Route::get('/onboarding', function(){
    return view('pages.onboarding');
});
// register
Route::get('/register', function(){
    return view('auth/register');
});
Route::post('/register', [RegisterController::class, 'store'])->name('register');


// login
Route::get('/login', function(){
    return view('auth/login');
});