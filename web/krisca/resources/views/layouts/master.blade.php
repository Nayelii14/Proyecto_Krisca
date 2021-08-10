<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
    <link rel="stylesheet" href="vendor/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <title>Bienvenidos a Krisca</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" id="bg">
            <div class="container-fluid" id="bg">
              <a class="navbar-brand" href="#" ><img src="{{asset('img/logo.png')}}" alt="" class="logo animate__animated animate__fadeIn"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Novedades</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('explora')}}">Explora</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Cuenta
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                      <li><a class="dropdown-item" href="{{route('inicio_sesion')}}">Inicio Sesión</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('nosotros')}}" tabindex="-1" aria-label="true">Nosotros</a>
                  </li>
                </ul>
                <form class="d-flex invisible" id="buscar">
                  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
              </div>
            </div>
          </nav>
    </header>
    <main>
      @yield('body')
    </main>
    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="{{asset('js/axios_config.js')}}"></script>
    @yield('js')
    
  </body>
</html>