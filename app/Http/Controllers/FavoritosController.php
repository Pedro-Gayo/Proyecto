<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FavoritosController extends Controller
{
    //
    public function mostrar()
    {
            // Obtener el id del usuario autenticado actualmente
            $user_id = auth()->id();
            
            // Obtener las rutas favoritas del usuario actualmente autenticado
            $rutas_favoritas = DB::table('rutas')
                                ->join('favoritos', 'rutas.id', '=', 'favoritos.ruta_id')
                                ->select('rutas.*','favoritos.ruta_id','favoritos.user_id')
                                ->where('favoritos.user_id', '=', $user_id)
                                ->get();
            
            // Retornar la vista con las rutas favoritas

        return view('favoritos', ['misRutas' => $rutas_favoritas]);
    }

    //borrar
    public function borrar($ruta_id, $user_id)
    {

        $ruta_voluntario = DB::table('favoritos')->where('ruta_id', $ruta_id)
            ->where('user_id', $user_id)
            ->delete();

        return redirect()->route('favoritos');
    }
}
