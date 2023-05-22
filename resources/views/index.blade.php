<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Segoe+Script&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rutas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/voluntarios.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">
    <link rel="stylesheet" href="{{ asset('css/favoritos.css') }}">

</head>

<body>
  <div class="background-image"></div>

    <nav class="navbar navbar-expand-lg navbar-asturcross">
        <div class="container-fluid">
            <img src="" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>            
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
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('favoritos')}}">RUTAS FAVORITAS</a>
                        </li>
                    @endauth
                </ul>
                <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        @yield('content')
    </div>
    <footer>
        <div class="container">
          <div class="footer-content">
            <p>NUESTRAS REDES</p>
            <ul class="list-group">
              <li class="list-group-item">
                <img
                  src="https://cdn.discordapp.com/attachments/1085486925714042903/1105145369576353853/youtube.png"
                  alt=""
                />
              </li>
              <li class="list-group-item">
                <img
                  src="https://cdn.discordapp.com/attachments/1085486925714042903/1105145751144759337/instagram.png"
                  alt=""
                />
              </li>
              <li class="list-group-item">
                <img
                  src="https://cdn.discordapp.com/attachments/1085486925714042903/1105145992011067392/gorjeo.png"
                  alt=""
                />
              </li>
              <li class="list-group-item">
                <img
                  src="https://cdn.discordapp.com/attachments/1085486925714042903/1105146220424466554/tik-tok_1.png"
                  alt=""
                />
              </li>
              <li class="list-group-item">
                <img
                  src="https://cdn.discordapp.com/attachments/1085486925714042903/1105146386141417593/facebook.png"
                  alt=""
                />
              </li>
            </ul>
            <p class="copyright">
              &copy; 2023 AsturCross. Todos los derechos reservados.
            </p>
          </div>
        </div>
      </footer>
  
    @yield('scripts')
</body>

</html>