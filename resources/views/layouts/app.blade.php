<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mercury</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Favicon -->
     <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
    

    
            
</head>
<link href='https://fonts.googleapis.com/css?family=Abel:300,400,700' rel='stylesheet' type='text/css'>
<link href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet"> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/regular.min.css" rel="stylesheet">

<body>

    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                    <!--{{ config('app.name', 'Web Mayorista Mercury') }} Config for default-->
                <div class="col-sm-8 logo">
                    <a href="{{ url('/') }}">
                     <img src="/img/logo1.png" style="width:30%;"></img>
                    </a>
                </div>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Hola, {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <a class="dropdown-item" href="#">
                                        {{ __('Administra tu perfil') }}
                                    </a>

                                    <a class="dropdown-item" href="#">
                                        {{ __('Mercury Elite') }}
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

        <nav class="navbar navbar-expand-lg navbar-light ym">
         <div class="container">
            
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            
            <ul class="navbar-nav">
              <li class=" nav-item dropdown">
                <a href="#" id="navbariluminacionMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Iluminación<b class="caret"></b></a>
                <ul class="dropdown-menu multi-column columns-2">
                    <div class="row">
                       
                        <div class="col-sm-6">
                            
                          
                            <ul class="multi-column-dropdown">

                                <li><a href="#">Iluminación solar</a></li>
                                <li><a href="/categoria/ILUMINACION/PANELES%20Y%20BALAS%20LED">Páneles y balas led</a></li>
                                <li class="rdivider"></li>
                                <li><a href="/categoria/ILUMINACION/REFLECTORES%20LED%20Y%20ALUMBRADO%20PUBLICO">Reflectores led y alumbrado público</a></li>
                                <li class="divider"></li>
                                <li><a href="/categoria/ILUMINACION/BOMBILLOS%20LED">Bombillos led</a></li>
                                <li><a href="/categoria/ILUMINACION/TUBOS%20Y%20LAMPARAS%LED">Tubos y lamparas led</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">

                            <ul class="multi-column-dropdown">
                                <li><a href="/categoria/ILUMINACION/DECORACION%20LED">Decoración led</a></li>
                                <li><a href="/categoria/ILUMINACION/LINTERNAS%20Y%20EMERGENCIAS">Linternas y emergencias</a></li>
                                <li><a href="/categoria/ILUMINACION/CINTA%20LED%20Y%20ACCESORIOS">Cinta led y accesorios</a></li>
                                <li class="divider"></li>
                                <li><a href="/categoria/ILUMINACION/SENSORES%20Y%20FOTOCELDAS">Sensores y fotoceldas</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </ul>
            </li>
            <li class=" nav-item dropdown">
                <a href="#" id="navbariluminacionMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Eléctricos<b class="caret"></b></a>
                <ul class="dropdown-menu multi-column columns-2">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="multi-column-dropdown">
                                <li><a href="/categoria/ILUMINACION/MULTITOMAS%20Y%20EXTENSIONES">Multitomas y extensiones</a></li>
                                <li><a href="/categoria/ILUMINACION/ACCESORIOS%20ELECTRICOS">Accesorios eléctricos</a></li>
                                <li class="rdivider"></li>
                                <li><a href="/categoria/ILUMINACION/TOMA%20CORRIENTES%20Y%20INTERRUPTORES">Toma corrientes y interruptores</a></li>
                                <li class="divider"></li>
                                <li><a href="/categoria/ILUMINACION/LINEAS%20PREMIUM">Lineas premium</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="multi-column-dropdown">
                                <li><a href="/categoria/ILUMINACION/TIMBRES">Timbres</a></li>
                                <li><a href="/categoria/ILUMINACION/PANELES%20Y%20BALAS%20LED">Cintas aislantes</a></li>
                                <li><a href="/categoria/ILUMINACION/MANUFACTURAS%20PLASTICAS">Manufacturas plasticas</a></li>
                                <li class="divider"></li>
                                <li><a href="/categoria/ILUMINACION/VENTILACION%20Y%20EXTRACTORES">Ventilación y extractores</a></li>
                                <li class="divider"></li>
                                
                            </ul>
                        </div>
                    </div>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbariluminacionMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Innovación y tecnología
                </a>
                <div class="dropdown-menu" aria-labelledby="navbariluminacionMenuLink">
                 <div class="dropdown-row">
                  <a class="dropdown-item" href="#">Smart Home</a>
                  </div>
                </div>
              </li>
            
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbariluminacionMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Ferretería
                </a>
                <div class="dropdown-menu" aria-labelledby="navbariluminacionMenuLink">

                 <div class="dropdown-row">

                  <a class="dropdown-item" href="#">Iluminación solar</a>
                  <a class="dropdown-item" href="#">Paneles y balas led</a>
                  <a class="dropdown-item" href="#">Reflectores led y alumbrado publico</a>
                  <a class="dropdown-item" href="#">Bombillos led</a>
                  <a class="dropdown-item" href="#">Tubos y lamparas led</a>
                  </div>
                 <div class="dropdown-row">
                  <a class="dropdown-item" href="#">Iluminación solar</a>
                  <a class="dropdown-item" href="#">Paneles y balas led</a>
                  <a class="dropdown-item" href="#">Reflectores led y alumbrado publico</a>
                  <a class="dropdown-item" href="#">Bombillos led</a>
                  <a class="dropdown-item" href="#">Tubos y lamparas led</a>
                  </div>
                </div>
              </li>
             
              
            </ul>
          </div>

          </div>
        </nav>

                    @yield('slide')
                
                
                <main class="py-4">
                    @yield('content')
                </main>

                @include('tickets.create')
            </div>

            
        </body>

        <footer>
 <div class="container">
   <div class="row">
   
            <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                <ul class="adress">
                     <img src="/img/logo1.png" style="width:55%;"></img>    
                     <li>
                        <p class="footer-slogan">Los mejores productos, siempre</p>
                      </li>
                        <li>
                          <span class="footer-subtitle">¿Necesitas ayuda?</span>
                          <a href="#" class="btn btn-outline-success pull-left" data-toggle="modal" data-target="#create">
                             Crear Ticket
                          </a>
                        </li>
                        <li>
                          
                        </li>
                      <br>
                      <hr>
                      <li>
                        <p><i class="fa fa-phone" aria-hidden="true"></i>+57 321 304 8303</p>
                      </li>
                           
                      <li>
                        <p><i class="fa fa-envelope fa-1x"></i> hola@grupomercury.com.co</p>
                      </li>
                 </ul>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul class="contact">
                     <span class="footer-title">Familias</span>    
                     <li>
                        <a href="#">Iluminación</a>
                      </li>
                           
                      <li>
                         <a href="#">Eléctricos</a>
                      </li>
                           
                      <li>
                        <a href="#">Innovación y tecnologia</a>
                      </li>
                           
                      <li>
                         <a href="#">Ferretería</a>
                      </li>
                           
                      <li>
                        <a href="#">Contact</a>
                     </li>
                </ul>
            </div>
       
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
               <ul class="social">
                          <span class="footer-title">Síguenos en:</span>    
                           <li>
                                <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                           </li>
                          
                           
                            
                           <li>
                                <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                           </li>

                           <li>
                                <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                          </li>
                          
                 </ul>
            </div>
       
       
       </div> 
    </div>

</footer>
<!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright: GRUPO EMPRESARIAL MERCURY S.A.S - TIC
  </div>
  <!-- Copyright -->
</html>
