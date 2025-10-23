<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('Bedrijf', \App\Http\Controllers\VendorController::class);