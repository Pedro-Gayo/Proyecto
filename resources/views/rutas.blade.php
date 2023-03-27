@extends('index')
@section('content')

    <div class="row">
        <form action="{{route('filtrar')}}" method="get">
            <label for="select">Opciones de filtrado</label>
            <select name="select" id="select">
                <option value="municipio">municipio</option>
                <option value="dificultad">dificultad</option>
                <option value="deporte">deporte</option>
            </select>
            <label for="busqueda">Busca:</label>
            <input type="text" name="busqueda" id="busqueda">
            <input type="submit" value="Buscar">
        </form>
    </div>
    <div class="row my-3">
        <div class="col">
            @foreach ($misRutas as $ruta)
                <div class="card">
                    <ul>
                        <li>{{$ruta->nombre}}</li>
                        <li>{{$ruta->dificultad}}</li>
                        <li>{{$ruta->estado}}</li>
                        <li>{{$ruta->deporte}}</li>
                        <li>{{$ruta->imagen}}</li>
                        <li>{{$ruta->municipio}}</li>
    
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
    

@endsection