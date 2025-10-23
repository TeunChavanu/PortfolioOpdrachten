<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/movies', function () {
    return view('movies');
}); 

Route::get('/series', function () {
    return view('series');
});
