<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Biar nongol doang pas slicing
Route::get('/landing', function(){
    return view('landing');
});

Route::get('/onboarding', function(){
    return view('onboarding');
});