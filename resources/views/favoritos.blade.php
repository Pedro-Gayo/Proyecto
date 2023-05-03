@extends('index')
@section('content')

<div class="row my-3">
    <div class="col">
        @foreach ($misRutas as $ruta)
        <div class="card">
            <ul>
                <h2>{{ $ruta->nombre }}</h2>
                <p>Dificultad: {{ $ruta->dificultad }}</p>
                <p>Deporte: {{ $ruta->deporte }}</p>
                <p>Municipio: {{ $ruta->municipio }}</p>
                <!-- <img src="{{ $ruta->imagen }}" alt="{{ $ruta->nombre }}"> -->
                <p>{{$ruta->imagen}}</p>
               
                <div>
                <form action="{{ route('borrar', [$ruta->ruta_id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>

                </div>


            </ul>
        </div>
        @endforeach
    </div>
</div>

@endsection