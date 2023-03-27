<?php

use App\Http\Controllers\RutasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/rutas',[RutasController::class,'mostrar'])->name('rutas');

Route::get('/filtrado',[RutasController::class,'filtrado'])->name('filtrar');

Route::get('/voluntarios', function () {
    return view('voluntarios');
})->name('voluntarios');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

