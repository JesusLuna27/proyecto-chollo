<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CholloController;

// Ruta para pagina de inicio
Route::get('/', function () {
    return view('welcome');
});
Route::get('/chollos', 'CholloController@index')->name('chollos.index');

// Ruta para listar todos los chollos
Route::get('/index', [CholloController::class, 'index'])->name('chollos.index');

// Rutas para crear un nuevo chollo
Route::get('/chollos/create', [CholloController::class, 'create'])->name('chollos.create');
Route::post('/chollos', [CholloController::class, 'store'])->name('chollos.store');

// Rutas para editar un chollo existente
Route::get('/chollos/{chollo}/edit', [CholloController::class, 'edit'])->name('chollos.edit');
Route::put('/chollos/{chollo}', [CholloController::class, 'update'])->name('chollos.update');

// Ruta para eliminar un chollo
Route::delete('/chollos/{chollo}', [CholloController::class, 'destroy'])->name('chollos.destroy');

