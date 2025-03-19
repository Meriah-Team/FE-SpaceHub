<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

Route::get('/welcome', function () {
    return view('welcome');
});


// Biar nongol doang pas slicing

// landing
Route::get('/', function(){
    return view('pages.landing');
})->name('landing');
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
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// home
Route::get('/home', [HomeController::class,'index'])->name('home');
