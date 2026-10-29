<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroDgrmController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros', [LibroDgrmController::class, 'index']);