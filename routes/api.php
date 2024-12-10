<?php

use App\Http\Controllers\AdminModulosController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\PerfilesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//CRUD de Perfiles

Route::get('/perfiles', [PerfilesController::class, 'index']);

Route::post('/perfiles', [PerfilesController::class, 'store']);

Route::post('/perfiles/suspender', [PerfilesController::class, 'suspender']);

//CRUD de los Módulos

Route::get('/modulos', [AdminModulosController::class, 'index']);

//CRUD de los Departamentos

Route::get('/departamentos', [DepartamentoController::class, 'index']);

//CRUD de las Empresas

Route::get('/empresas', [EmpresasController::class, 'index']);

Route::post('/empresas', [EmpresasController::class, 'store']);
