<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('showroom');
}); 

Route::get('/contact', function () {
    return view('contact');
}); 

use App\Http\Controllers\ShowroomController;

Route::get('/', [ShowroomController::class, 'index']);
Route::get('/contact', [ShowroomController::class, 'contact']);
