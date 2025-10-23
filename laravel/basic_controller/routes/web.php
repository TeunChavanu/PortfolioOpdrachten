<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/our_team', function () {
    return view('our_team');
});
