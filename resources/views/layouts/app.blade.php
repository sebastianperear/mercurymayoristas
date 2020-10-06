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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    

    
            
</head>
<link href='https://fonts.googleapis.com/css?family=Abel:300,400,700' rel='stylesheet' type='text/css'>
<link href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">    

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
                <a href="#" id="navbarIluminacionMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Iluminación<b class="caret"></b></a>
                <ul class="dropdown-menu multi-column columns-2">
                    <div class="row">
                       
                        <div class="col-sm-6">
                            
                          
                            <ul class="multi-column-dropdown">

                                <li><a href="#">Iluminación solar</a></li>
                                <li><a href="#">Páneles y balas led</a></li>
                                <li class="rdivider"></li>
                                <li><a href="#">Reflectores led y alumbrado público</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Bombillos led</a></li>
                                <li><a href="#">Tubos y lamparas led</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">

                            <ul class="multi-column-dropdown">
                                <li><a href="#">Decoración led</a></li>
                                <li><a href="#">Linternas y emergencias</a></li>
                                <li><a href="#">Cinta led y accesorios</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Sensores y fotoceldas</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </ul>
            </li>
            <li class=" nav-item dropdown">
                <a href="#" id="navbarIluminacionMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Eléctricos<b class="caret"></b></a>
                <ul class="dropdown-menu multi-column columns-2">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="multi-column-dropdown">
                                <li><a href="#">Multitomas y extensiones</a></li>
                                <li><a href="#">Accesorios eléctricos</a></li>
                                <li class="rdivider"></li>
                                <li><a href="#">Toma corrientes y interruptores</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Lineas premium</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="multi-column-dropdown">
                                <li><a href="#">Timbres</a></li>
                                <li><a href="#">Cintas aislantes</a></li>
                                <li><a href="#">Manufacturas plasticas</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Ventilación y extractores</a></li>
                                <li class="divider"></li>
                                
                            </ul>
                        </div>
                    </div>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarIluminacionMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Innovación y tecnología
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarIluminacionMenuLink">
                 <div class="dropdown-row">
                  <a class="dropdown-item" href="#">Smart Home</a>
                  </div>
                </div>
              </li>
            
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarIluminacionMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Ferretería
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarIluminacionMenuLink">

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
            </div>
        </body>

        <footer>
 <div class="container">
   <div class="row">
   
            <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                <ul class="adress">
                     <img src="/img/logo1.png" style="width:55%;"></img>    
                     <li>
                        <p>Lorem ipsum dolor sit amet, vero omnis vocibus</p>
                      </li>
                           
                      <li>
                        <p>+90 1234 56789</p>
                      </li>
                           
                      <li>
                        <p>info@gmail.com</p>
                      </li>
                 </ul>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul class="contact">
                     <span>Contact</span>    
                     <li>
                        <a href="#">Home</a>
                      </li>
                           
                      <li>
                         <a href="#">About</a>
                      </li>
                           
                      <li>
                        <a href="#">Blog</a>
                      </li>
                           
                      <li>
                         <a href="#">Gallery </a>
                      </li>
                           
                      <li>
                        <a href="#">Contact</a>
                     </li>
                </ul>
            </div>
       
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
               <ul class="social">
                          <span>Social</span>    
                           <li>
                                <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                           </li>
                          
                           <li>
                                <a href="#"><i class="fa fa-github fa-2x"></i></a>
                           </li>
                            
                           <li>
                                <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                           </li>
                           
                           <li>
                                <a href="#"><i class="fa fa-tumblr fa-2x"></i></a>
                           </li>
                            
                           <li>
                                <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                          </li>
                          
                 </ul>
            </div>
       
       
       </div> 
    </div>
</footer>
</html>
