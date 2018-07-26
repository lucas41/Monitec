<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Monitec</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <center>
        <img src="/media/logo.jpeg" alt="Logo" style="width:410px;">
    </center>
</head>

    <body>


    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">

        <div class="container-fluid">
            <a class="navbar-brand" href="#">home</a>
            <div class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href "#"> Inicio </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href "#"> Seriviço </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href "#"> Perfil </a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"> Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"> Cadastro </a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    

@yield('site')
             

<div id="DivFooterBaixo">
    <div class="container-fluid">
    <div id="DivCopyrightFooter">
        <span class="Senac"><a href="http://www.senac.br"><img src="/media/logo.jpeg" width="300" alt="senac" /></a></span>
        <br /><br />
        
    </div>
    <div id="DivMenuAuxFooter">
        <div style="float: right">
            <a href="https://www.youtube.com/channel/UCFFwDexmyycG16Xhr_wDcqA" target="_blank"><img alt="Youtube" title="Youtube" style="width:30px;" src="/media/youtube.jpg" /></a>
            <a href="https://plus.google.com/u/0/b/114648504410653938793/114648504410653938793/posts" target="_blank"><img alt="Google Plus" title="Google Plus" style="width:30px;" src="/util/img/google-plus.png" /></a>
            <a href="https://www.facebook.com/SenacEADoficial/" target="_blank"><img alt="Facebook" title="Facebook" style="width:30px;" src="/media/facebook.jpg"  /></a>
            <a href="https://twitter.com/SenacEADoficial" target="_blank"><img alt="Twitter" title="Twitter" style="width:30px;" src="/util/img/twitter.png" /></a>
            <a href="https://www.linkedin.com/company/2655383?trk=tyah" target="_blank"><img alt="Linkedin" title="Linkedin" style="width:30px;" src="/util/img/linkedin.png" /></a>
            <a href="https://www.instagram.com/senacEADoficial/" target="_blank"><img alt="Instagram" title="Instagram" style="width:30px;" src="/util/img/instagram.png" /></a>
        </div>
        <br />
        <span class="Direitos">Todos os direitos reservados</span>
    </div>
    </div>
</div>
            </div>
        </div>
    </div>
</div>
</div>
    </body>
</html>

