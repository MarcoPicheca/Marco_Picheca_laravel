<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home') -> name('home');

Route::view('/about_me', 'about_me') -> name('about_me');
