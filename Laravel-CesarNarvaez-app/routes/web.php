<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', [AreaController::class, 'hola']);

route::resource('/materias', MateriaController::class);

