<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});


// Biar nongol doang pas slicing

// landing
Route::get('/', function(){
    return view('landing');
});
// onboarding
Route::get('/onboarding', function(){
    return view('onboarding');
});
// signup
Route::get('/signup', function(){
    return view('auth/signup');
});