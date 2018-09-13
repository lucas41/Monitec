<!DOCTYPE html>

<html lang="br">
<html lang="{{ app()->getLocale() }}">
<head>
     <title>Monitec</title>      
    
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
<link rel="icon" href="/media/logo.png" type="image/x-icon" />
<link rel="shortcut icon" href="/media/logo.png" type="image/x-icon" />

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

              <li>
          <div class="dropdown">
          <a class="nav-link" href="#"> Monitoria </a>
                <div class="dropdown-content">
                 <a href="/primeiroano">1 ano</a>
                 <a href="/segundoano">2 ano</a>
                 <a href="/terceiroano">3 ano</a>
                </div>
            </div>
          </li>

          
            <li class="drop">
                <a class="nav-link" href="http://127.0.0.1:8000/faleconosco"> Fale Conosco </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/duvidas"> Dúvidas </a>
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
                                <a id="navbarDropdown" class="nav-link" href="http://127.0.0.1:8000/perfil">
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


<style>


/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
}
</style>


