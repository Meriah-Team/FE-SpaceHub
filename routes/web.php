<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});


// Biar nongol doang pas slicing
Route::get('/', function(){
    return view('landing');
});

Route::get('/onboarding', function(){
    return view('onboarding');
});

Route::get('/signup', function(){
    return view('auth/signup');
});