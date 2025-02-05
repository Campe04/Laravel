<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\HolaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('info');

Route::get('/hola', function () {
    return view('hola');
});

Route::get('/principal', [HolaController::class,'show']);

Route::get('/saludo/{nombre}', [HolaController::class,'saludo']);

Route::delete('/usuario/eliminar/{id}',[UserController::class, 'eliminar']);

Route::post('/usuario/alta',[UserController::class, 'alta'])->name('alta_usuario');

Route::get('/usuario/alta',[UserController::class, 'formAlta'])->name('alta_form');

Route::get('/producto/alta',[ProductController::class, 'addProduct']);
Route::get('/producto/listar',[ProductController::class, 'getProducts']);
Route::get('/producto/listar/{id}',[ProductController::class, 'getProduct']);

Route::get('/alumno/alta',[AlumnoController::class, 'addAlumno']);
Route::get('/alumno/listar',[AlumnoController::class, 'getAlumnos']);
Route::get('/alumno/listar/{id}',[AlumnoController::class, 'getAlumno']);