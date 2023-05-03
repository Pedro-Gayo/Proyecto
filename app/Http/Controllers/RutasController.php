<?php

namespace App\Http\Controllers;

use App\Models\Favoritos;
use App\Models\Calificaciones;
use App\Models\Rutas;
use App\Models\RutasVoluntarios;
use Illuminate\Http\Request;

class RutasController extends Controller
{

  //mostrar rutas
  public function mostrar()
  {
    // $rutas = Rutas::all();
    // return view('rutas', ['misRutas' => $rutas]);

    $rutas = Rutas::all();

    foreach ($rutas as $ruta) {
        $ruta->nota = Calificaciones::where('ruta_id', $ruta->id)->avg('voto');
    }

    return view('rutas', ['misRutas' => $rutas]);
  }

  //añadir rutas
  public function añadir(Request $req)
  {

    $ruta = new Rutas;

    $ruta->nombre = $req->input('nombre');
    $ruta->municipio = $req->input('municipio');
    $ruta->dificultad = $req->input('dificultad');
    $ruta->deporte = $req->input('deporte');
    $ruta->imagen = $req->input('imagen');
    // $ruta->latitud = $req->input('latitud');
    // $ruta->longitud = $req->input('longitud');

    $ruta->save();

    $rutas = Rutas::all();
    return view('rutas', ['misRutas' => $rutas]);
  }


  //filtrar rutas
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


  //borrar rutas
  public function borrar($id){

    $ruta=Rutas::find($id);
    $ruta->delete();

    return redirect()->route('rutas');
  }


public function añadirVoluntario($id)
{
    $voluntario = new RutasVoluntarios();

    $voluntario->ruta_id = $id;
    $voluntario->voluntario_id = auth()->id();

    $voluntario->save();

    $rutas = Rutas::all();
    return view('rutas', ['misRutas' => $rutas]);
}

public function añadirFavorito($id)
{
    $voluntario = new Favoritos();

    $voluntario->ruta_id = $id;
    $voluntario->user_id = auth()->id();

    $voluntario->save();

    $rutas = Rutas::all();
    return view('rutas', ['misRutas' => $rutas]);
}

public function votar(Request $request) {
  $rutaId = $request->input('ruta_id');
  $nota = $request->input('voto');

  $voto = Calificaciones::updateOrCreate(
    ['ruta_id' => $rutaId, 'user_id' => auth()->id()],
    ['voto' => $nota]
  );

  return redirect()->route('rutas');
}


}
