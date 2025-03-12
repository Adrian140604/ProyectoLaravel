<?php

use App\Http\Controllers\ArticuloController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('articulos', ArticuloController::class);
