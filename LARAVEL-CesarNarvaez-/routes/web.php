<?php

use App\Http\Controllers\cursocontroller;
use App\Http\Controllers\SaludoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', [SaludoController::class,'saludito']);

Route::resource('/curso', CursoController::class);
