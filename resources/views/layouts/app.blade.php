<!DOCTYPE html>

<html lang="en">
<html lang="{{ app()->getLocale() }}">
<head>
     <title>Monitec</title>      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <center>
        <img src="/media/logo.jpeg" alt="Logo" style="width:410px;">
    </center>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>



<nav class="navbar navbar-expand-sm navbar-dark bg-dark">

<div class="container-fluid">
    <a class="navbar-brand" href="http://127.0.0.1:8000">home</a>
    <div class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/duvidas"> Dúvidas </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href "#"> Seriviço </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href "#"> Perfil </a>
            </li>
        </ul>

                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                       
                            <li class="nav-item">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                

                                 <li <button class="btn-danger"> <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                   </button> </a>
                             

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

<div>
    <div class="container-fluid">
    <div>
        <span class="Senac"><a href="http://127.0.0.1:8000/"><img src="/media/logo.jpeg" width="300" alt="senac" /></a></span>
        <br /><br />
        
    </div>
    <div >
        <div style="float: right">
            <a href="#" target="_blank"><img alt="Youtube" title="Youtube" style="width:30px;" src="/media/youtube.jpg" /></a>
            
            <a href="https://www.facebook.com/monitec2/?modal=admin_todo_tour" target="_blank"><img alt="Facebook" title="Facebook" style="width:30px;" src="/media/facebook.jpg"  /></a>
            <a href="#" target="_blank"><img alt="Twitter" title="Twitter" style="width:30px;" src="/media/twitter.jpg" /></a>
            
            <a href="#" target="_blank"><img alt="Instagram" title="Instagram" style="width:30px;" src="/media/insta.jpg" /></a>
        </div>
        <br />
        <span class="Direitos">Todos os direitos reservados</span>
    </div>
    </div>
</div>
</body>
</html>
