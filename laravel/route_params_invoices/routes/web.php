<?php

use Illuminate\Support\Facades\Route;


route::get('/',[App\Http\Controllers\InvoiceController::class,'index']);

route::get('/offerte/{id}',[App\Http\Controllers\InvoiceController::class,'show']);