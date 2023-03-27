<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="" alt="">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('inicio')}}">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('rutas')}}">RUTAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('voluntarios')}}">PROGRAMA DE VOLUNTARIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('nosotros')}}">SOBRE NOSOTROS</a>
                    </li>
                    <li class="mx-3 float-end">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" 
                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" 
                        width="40" height="40" x="0" y="0" viewBox="0 0 24 24" 
                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g transform="matrix(0.9799999999999999,0,0,0.9799999999999999,0.2400000000000002,
                        0.2400000000000002)"><path d="M19 0H5a5.006 5.006 0 0 0-5 5v14a5.006 5.006 0 0 0 5 
                        5h14a5.006 5.006 0 0 0 5-5V5a5.006 5.006 0 0 0-5-5ZM7 22v-1a5 5 0 0 1 10 0v1Zm15-3a3 
                        3 0 0 1-3 3v-1a7 7 0 0 0-14 0v1a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3h14a3 3 0 0 1 3 3Z" 
                        fill="#1c7710" data-original="#000000" class=""></path>
                        <path d="M12 4a4 4 0 1 0 4 4 4 4 0 0 0-4-4Zm0 6a2 2 0 1 1 2-2 2 2 0 0 1-2 2Z" 
                        fill="#1c7710" data-original="#000000" class=""></path></g></svg>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <div class="row">
            <div class="col">
                <p>NUESTRAS REDES</p><br>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Youtube</li>
                    <li class="list-group-item">Twitter</li>
                    <li class="list-group-item">Instagram</li>
                    <li class="list-group-item">Facebook</li>
                    <li class="list-group-item">Tu corazon</li>
                </ul>
            </div>
            <div class="col">

            </div>
        </div>
    </footer>
</body>

</html>