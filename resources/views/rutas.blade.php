@extends('index')
@section('content')

{{-- <div class="row">
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
</div> --}}

<div class="form-container my-5">
    <div class="row">
        <form action="{{route('filtrar')}}" method="get" class="search-form">
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
        <div class="card my-3">
            <ul>
                <li>{{$ruta->nombre}}</li>
                <li>{{$ruta->dificultad}}</li>
                <li>{{$ruta->deporte}}</li>
                <img src="{{ $ruta->imagen }}" alt="Imagen de la ruta">
                <li>{{$ruta->municipio}}</li>
                <li>
                    @if($ruta->nota != null)
                    <p>Nota media: {{ $ruta->nota }}</p>
                    @else
                    <p>Esta ruta aún no ha sido valorada</p>
                    @endif
                </li>
                @auth
                <div data-ruta-id="{{$ruta->id}}">
                    <label for="voto">Valoración:</label>
                    <select name="voto"  onchange="enviarValoracion(this)">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div>
                    <form action="{{ route('addfavorito', $ruta->id) }}" method="post">
                        @csrf
                        <input type="submit" value="Favoritos">
                    </form>
                </div>
                <div>
                    <form action="{{ route('addvoluntario', $ruta->id) }}" method="post">
                        @csrf
                        <input type="submit" value="Voluntario">
                    </form>

                </div>
                @if(auth()->user()->esAdministrador())
                <!-- Mostrar contenido solo para usuarios autenticados con rol de administrador -->
                <div>
                    <form action="{{route('borrar',$ruta->id)}}" method="post">
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
                        <li><h2>{{$ruta->nombre}}</h2></li>
                        <li>Dificultad: {{$ruta->dificultad}}</li>
                        <li>Deporte: {{$ruta->deporte}}</li>
                        <li>Municipio: {{$ruta->municipio}}</li>
                        <li>
                            @if($ruta->nota != null)
                            <p>Nota media: {{ $ruta->nota }}</p>
                            @else
                            <p>Esta ruta aún no ha sido valorada</p>
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <img class="ruta-imagen" src="{{ $ruta->imagen }}" alt="Imagen de la ruta">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="ruta-botones">
                        @auth
                        <div data-ruta-id="{{$ruta->id}}" class="valoracion-container">
                            <label for="voto">Valoración:</label>
                            <select name="voto"  onchange="enviarValoracion(this)" class="mx-2">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div>
                            <form action="{{ route('addfavorito', $ruta->id) }}" method="post">
                                @csrf
                                <input type="submit" value="Favoritos" class="mx-2">
                            </form>
                        </div>
                        <div>
                            <form action="{{ route('addvoluntario', $ruta->id) }}" method="post">
                                @csrf
                                <input type="submit" value="Voluntario" class="mx-2">
                            </form>
                        </div>
                        @if(auth()->user()->esAdministrador())
                        <!-- Mostrar contenido solo para usuarios autenticados con rol de administrador -->
                        <div>
                            <form action="{{route('borrar',$ruta->id)}}" method="post">
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



@auth
 <div class="row custom-row my-5">
    <div class="col-sm-12 col custom-col my-2">
        <form action="{{route('añadir')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h2>Añadir ruta</h2>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <label for="municipio">Municipio:</label>
            <input type="text" name="municipio" id="municipio">
            <label for="dificultad">Dificultad:</label>
            <input type="text" name="dificultad" id="dificultad">
            <label for="dificultad">Deporte:</label>
            <select name="deporte" id="deporte">
                <option value="todo" selected>todo</option>
                <option value="bici">bici</option>
                <option value="andar">senderismo</option>
            </select>
            <label for="imagen">Imagen de la ruta:</label>
            <input type="file" name="imagen" id="imagen">

            <input type="submit" value="Añadir">
        </form>
    </div>
    <div class="col custom-col">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23202.872128132516!2d-5.866167390987546!3d43.369516711551654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd368c9a60ac1c67%3A0x3134440ecc5e6224!2sOviedo%2C%20Asturias!5e0!3m2!1ses!2ses!4v1679918635957!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
 </div>
@endauth

@endsection

@section('scripts')

<script>
    function enviarValoracion(select) {
        let voto = select.value;
        let rutaId = select.parentElement.getAttribute("data-ruta-id");

        $.ajax({
            url: "{{ route('votar') }}",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                voto: voto,
                ruta_id: rutaId
            },
            success: function(data) {
                // aquí puedes hacer algo si la petición fue exitosa
                window.location.reload();
            },
            error: function(xhr, status, error) {
                // aquí puedes manejar errores si la petición falla
            }
        });
    }
</script>

@endsection