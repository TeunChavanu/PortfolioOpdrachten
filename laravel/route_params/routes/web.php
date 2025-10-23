<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/categories/{category}/products', function ($category) {
    return view('category_products', ['category' => $category]);
});
