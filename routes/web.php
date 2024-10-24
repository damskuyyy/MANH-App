<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
   return view('front.home');
});

Route::get('/ekstra', function () {
    return view('front.ekstra');
});

Route::get('/profil', function () {
    return view('front.profil');
});

Route::get('/galeri', function () {
    return view('front.galeri');
});