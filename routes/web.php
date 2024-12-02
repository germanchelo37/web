<?php

use App\Models\Categoria;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('autores', App\Http\Controllers\AutoreController::class);
Route::resource('categorias', App\Http\Controllers\CategoriaController::class);
Route::resource('editoriales', App\Http\Controllers\EditorialeController::class);
Route::resource('materiales', App\Http\Controllers\MaterialeController::class);
Route::resource('prestamos', App\Http\Controllers\PrestamoController::class);
Route::resource('reservas', App\Http\Controllers\ReservaController::class);
Route::resource('/dashboardbook', App\Http\Controllers\DashboardBookController::class);