<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\bienvenidoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/bienvenido', [bienvenidoController::class, 'bienvenido']);

route::get('/inicio', [bienvenidoController::class, 'bienvenido']);

route::get('/alumnos', [AlumnoController::class, 'alumnos']);


