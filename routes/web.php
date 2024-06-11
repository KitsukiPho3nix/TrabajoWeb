<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get("/", [CursoController::class, "Listar"]);
Route::get('/index', function () {
    return view('index');
});
Route::get('/index2', function () {
    return view('index2');
});
Route::get('/curso', function () {
    return view('crearCurso');
});
Route::post('/curso', [CursoController::class, 'Crear']);
Route::get('/eliminar/{d}', [CursoController::class, 'Eliminar']);
Route::get('/modificar/{d}', [CursoController::class, 'MostrarFormularioDeModificar']);
Route::post('/modificar', [CursoController::class, 'Modificar']);