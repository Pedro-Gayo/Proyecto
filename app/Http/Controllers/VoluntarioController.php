<?php

namespace App\Http\Controllers;

use App\Models\RutasVoluntarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoluntarioController extends Controller
{
    //mostrar rutas
    public function mostrar()
    {

        //mostrar
        $rutas = DB::table('rutas')
            ->join('rutas_voluntarios', 'rutas.id', '=', 'rutas_voluntarios.ruta_id')
            ->join('users', 'rutas_voluntarios.voluntario_id', '=', 'users.id')
            ->select(
                'rutas.nombre',
                'rutas.dificultad',
                'rutas.deporte',
                'rutas.imagen',
                'rutas.municipio',
                'users.name',
                'users.email',
                'rutas_voluntarios.ruta_id',
                'rutas_voluntarios.voluntario_id'
            )
            ->get();

        return view('voluntarios', ['misRutas' => $rutas]);
    }

    //borrar
    public function borrar($ruta_id, $voluntario_id)
    {

        $ruta_voluntario = DB::table('rutas_voluntarios')->where('ruta_id', $ruta_id)
            ->where('voluntario_id', $voluntario_id)
            ->delete();

        return redirect()->route('voluntarios');
    }

    //filtrar rutas
    public function filtrado(Request $req)
    {
        $option = $req->input('select');
        $busqueda = $req->input('busqueda');

        $rutas = DB::table('rutas')
            ->join('rutas_voluntarios', 'rutas.id', '=', 'rutas_voluntarios.ruta_id')
            ->join('users', 'rutas_voluntarios.voluntario_id', '=', 'users.id')
            ->select(
                'rutas.nombre',
                'rutas.dificultad',
                'rutas.deporte',
                'rutas.imagen',
                'rutas.municipio',
                'users.name',
                'users.email',
                'rutas_voluntarios.ruta_id',
                'rutas_voluntarios.voluntario_id'
            )
            ->when($option == 'municipio', function ($query) use ($busqueda) {
                return $query->where('rutas.municipio', $busqueda);
            })
            ->when($option == 'dificultad', function ($query) use ($busqueda) {
                return $query->where('rutas.dificultad', $busqueda);
            })
            ->when($option == 'deporte', function ($query) use ($busqueda) {
                return $query->where('rutas.deporte', $busqueda);
            })
            ->get();

        return view('voluntarios', ['misRutas' => $rutas]);
    }
}
