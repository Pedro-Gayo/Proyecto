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

    <div class="row">
        <div class="col">
            <form action="{{route('añadir')}}" method="post">
                <p>Añadir ruta</p>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre">
                <label for="municipio">Municipio:</label>
                <input type="text" name="municipio" id="municipio">
                <label for="estado">Estado:</label>
                <input type="text" name="estado" id="estado">
                <label for="dificultad">Dificultad:</label>
                <input type="text" name="dificultad" id="dificultad">
                <input type="submit" value="Añadir">
            </form>
        </div>
        <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23202.872128132516!2d-5.866167390987546!3d43.369516711551654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd368c9a60ac1c67%3A0x3134440ecc5e6224!2sOviedo%2C%20Asturias!5e0!3m2!1ses!2ses!4v1679918635957!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    

@endsection