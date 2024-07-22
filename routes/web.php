<?php

use App\Http\Controllers\SelectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrearController;
use App\Http\Controllers\ValidarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/crearUsuario', [CrearController::class, 'crearUsuario'])->name('index');
Route::post('/crearUsuario', [CrearController::class, 'crearUsuario'])->name('indexPost');
Route::get('/iniciarSesion', [ValidarController::class, 'ingresar'])->name('login');
Route::post('/iniciarSesion', [ValidarController::class, 'ingresar'])->name('loginPost');
Route::post('/crearUsuario', [CrearController::class, 'crearUsuario'])->name('indexPost');
Route::get('/Recordatorios', [SelectController::class, 'listar'])->name('recordatorios');
Route::post('/Recordatorios', [SelectController::class, 'listar'])->name('recordatorios');