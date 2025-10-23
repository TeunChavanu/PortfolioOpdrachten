<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SitesController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('projects', ProjectsController::class)-> only(['index', 'show', 'create', 'store', 'edit', 'update', 'destroy']);
Route::resource('sites', SitesController::class)-> only(['index', 'show', 'create', 'store', 'edit', 'update', 'destroy']);
