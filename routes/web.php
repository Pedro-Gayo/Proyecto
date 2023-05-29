<?php

use App\Http\Controllers\FavoritosController;
use App\Http\Controllers\RutasController;
use App\Http\Controllers\VoluntarioController;
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


//rutas
Route::get('/rutas',[RutasController::class,'mostrar'])->name('rutas');

Route::post('/rutas',[RutasController::class,'añadir'])->name('añadir');

Route::delete('/rutas/{id}',[RutasController::class,'borrar'])->name('borrarR');

Route::get('/filtrado',[RutasController::class,'filtrado'])->name('filtrar');

Route::post('/voluntario/{ruta}', [RutasController::class,'añadirVoluntario'])->name('addvoluntario');

Route::post('/favorito/{ruta}', [RutasController::class,'añadirFavorito'])->name('addfavorito');

Route::post('/votar', [RutasController::class,'votar'])->name('votar');



//voluntarios
Route::get('/voluntarios',[VoluntarioController::class,'mostrar'])->name('voluntarios');

Route::delete('/voluntarios/{ruta_id}/{voluntario_id}',[VoluntarioController::class,'borrar'])->name('borrar');

Route::get('/filtradoV',[VoluntarioController::class,'filtrado'])->name('filtrarV');

Route::post('/favoritoV/{ruta}', [VoluntarioController::class,'añadirFavorito'])->name('addf');


//favoritos
Route::get('/favoritos',[FavoritosController::class,'mostrar'])->name('favoritos');

Route::delete('/favoritos/{ruta_id}/{user_id}',[FavoritosController::class,'borrar'])->name('borrarF');


Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');







Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
