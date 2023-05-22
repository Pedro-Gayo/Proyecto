@extends('index')
@section('content')
<div class="form-container my-5">
    <div class="row">
        <form action="{{route('filtrarV')}}" method="get" class="search-form">
            <label for="select" class="my-3">Opciones de filtrado</label>
            <select name="select" id="select" class="my-3 mx-2">
                <option value="municipio">municipio</option>
                <option value="dificultad">dificultad</option>
                <option value="deporte">deporte</option>
            </select>
            <label for="busqueda">Busca:</label>
            <input type="text" name="busqueda" id="busqueda">
            <input type="submit" value="Buscar" class="my-3">
        </form>
    </div>
</div>
{{-- <div class="row my-3">
    <div class="col">
        @foreach ($misRutas as $ruta)
        <div class="card">
            <ul>
                <h2>{{ $ruta->nombre }}</h2>
                <p>Dificultad: {{ $ruta->dificultad }}</p>
                <p>Deporte: {{ $ruta->deporte }}</p>
                <p>Municipio: {{ $ruta->municipio }}</p>
                <p>Impartida por: {{ $ruta->name }} metodo de contacto: ({{ $ruta->email }})</p>
                <!-- <img src="{{ $ruta->imagen }}" alt="{{ $ruta->nombre }}"> -->
                <p>{{$ruta->imagen}}</p>
                @auth
                <div>
                    <form action="">
                        <input type="submit" value="favoritos">
                    </form>
                </div>
                @if(auth()->id()==$ruta->voluntario_id)
                <!-- Mostrar contenido solo para usuarios autenticados con rol de administrador -->
                <div>
                <form action="{{ route('borrar', [$ruta->ruta_id, $ruta->voluntario_id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>

                </div>
                @endif
                @endauth

            </ul>
        </div>
        @endforeach
    </div>
</div> --}}

<div class="row my-3">
    <div class="col">
        @foreach ($misRutas as $ruta)
        <div class="card my-3">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="ruta-info">
                        <li><h2>{{ $ruta->nombre }}</h2></li>
                        <li>Dificultad: {{ $ruta->dificultad }}</li>
                        <li>Deporte: {{ $ruta->deporte }}</li>
                        <li>Municipio: {{ $ruta->municipio }}</li>
                        <li>Impartida por: {{ $ruta->name }} </li>
                        <li>Método de contacto: ({{ $ruta->email }})</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <img class="ruta-imagen" src="{{ $ruta->imagen }}" alt="{{ $ruta->nombre }}">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="ruta-botones">
                        @auth
                        <div>
                            <form action="{{ route('addf', $ruta->ruta_id) }}" method="post">
                                @csrf
                                <input type="submit" value="Favoritos" class="mx-2">
                            </form>
                        </div>
                        @if(auth()->id() == $ruta->voluntario_id)
                        <!-- Mostrar contenido solo para usuarios autenticados con rol de administrador -->
                        <div>
                            <form action="{{ route('borrar', [$ruta->ruta_id, $ruta->voluntario_id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Borrar">
                            </form>
                        </div>
                        @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection