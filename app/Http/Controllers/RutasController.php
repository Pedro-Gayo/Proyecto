<?php

namespace App\Http\Controllers;

use App\Models\municipios;
use App\Models\Rutas;
use Illuminate\Http\Request;

class RutasController extends Controller
{
  public function mostrar()
  {
    $rutas = Rutas::all();
    return view('rutas', ['misRutas' => $rutas]);
  }

  public function añadir(Request $req)
  {

    $ruta = new Rutas;

    $ruta->nombre = $req->input('nombre');
    $ruta->municipio = $req->input('municipio');
    $ruta->estado = $req->input('estado');
    $ruta->dificultad = $req->input('dificultad');
    $ruta->latitud = $req->input('latitud');
    $ruta->longitud = $req->input('longitud');

    $ruta->save();

    $rutas = rutas::all();
    return view('rutas', ["misRutas" => $rutas]);
  }

  public function filtrado(Request $req)
  {
    $option = new Rutas;
    $option = $req->input('select');

    if ($option == 'municipio') {
      $rutas = Rutas::where('municipio', '=', $req->input('busqueda'))->get();
    } elseif ($option == 'dificultad') {
      $rutas = Rutas::where('dificultad', '=', $req->input('busqueda'))->get();
    } else {
      $rutas = Rutas::where('deporte', '=', $req->input('busqueda'))->get();
    }

    return view('rutas', ['misRutas' => $rutas]);
  }
}
