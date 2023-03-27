<?php

namespace App\Http\Controllers;

use App\Models\municipios;
use App\Models\Rutas;
use Illuminate\Http\Request;

class RutasController extends Controller
{
    public function mostrar(){
        $rutas=Rutas::all();
        return view('rutas',['misRutas'=>$rutas]);
    }

   public function filtrado(Request $req)
   {
     $option= new Rutas;
     $option=$req->input('select');
   
     if ($option == 'municipio') {
       $rutas = Rutas::where('municipio', '=', $req->input('busqueda'))->get();
     } elseif ($option == 'dificultad') {
       $rutas = Rutas::where('dificultad', '=', $req->input('busqueda'))->get();
     } else {
       $rutas = Rutas::where('deporte', '=', $req->input('busqueda'))->get();
     }
   
     return view('rutas',['misRutas'=>$rutas]);
   }
   
   
}
