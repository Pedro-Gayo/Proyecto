@extends('index')
@section('content')

<div class="row my-3 d-flex align-items-center justify-content-center">
    <div class="col">
        @foreach ($misRutas as $ruta)
        <div class="card">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col col-sm-12 col-md-4">
                    <ul>
                        <h2>{{ $ruta->nombre }}</h2>
                        <p>Dificultad: {{ $ruta->dificultad }}</p>
                        <p>Deporte: {{ $ruta->deporte }}</p>
                        <p>Municipio: {{ $ruta->municipio }}</p>                        
                    </ul> 
                </div>
                <div class="col col-md-7">
                    <img src="{{ $ruta->imagen }}" alt="{{ $ruta->nombre }}" class="img-fluid">
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-center"> 
                <div class="col text-center">
                    <form action="{{ route('borrarF', [$ruta->ruta_id, $ruta->user_id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar" class="btn my-3 btn-delete">
                    </form>
                </div>
            </div>
                      
        </div>
        @endforeach
    </div>
</div>


@endsection