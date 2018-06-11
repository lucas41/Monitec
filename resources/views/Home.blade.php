<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Monitec</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
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
                        <a class="nav-link" href "#"> Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href "#"> Cadastro </a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <br>

    <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="container">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="container">
                    <div class="carousel-item active">
                        <img class="img-fluid" src="/media/01.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="/media/01.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="/media/01.jpg">

                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
        
    </div>
    <br>
    <div class="container">
        <div class="row mb-5">

            <div class="col-sm-4 md-2 mb-5">

                <div class="card">
                    <img class="card-img-top" src="/media/00.jpg">
                    <div class="card-body">
                        <h4 class="card-title"> 1 ano </h4>
                        <h6 class="card-subtitle mb-2 text-muted"> Monitoria</h6>
                        <p class="card-text">bla bla bla bla bla bla bla bla bla bla </p>
                        <button type="button" class="btn btn-success">Acesse</button>
                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#myModal">Open Modal</button>
                    </div>

                </div>
                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">materias</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                
                            </div>
                            <div class="modal-body">
                                <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

  
       

            <div class="col-sm-4 md-2 mb-5">

                <div class="card">
                    <img class="card-img-top" src="/media/00.jpg">
                    <div class="card-body">
                        <h4 class="card-title"> 1 ano </h4>
                        <h6 class="card-subtitle mb-2 text-muted"> Monitoria</h6>
                        <p class="card-text">bla bla bla bla bla bla bla bla bla bla </p>
                        <button type="button" class="btn btn-primary">Acesse</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Open Modal</button>
                    </div>

                </div>
                <!-- Modal -->
                <div id="myModal1" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Materias</h4>
                               
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          

                            </div>
                            <div class="modal-body">
                                <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
           
        

            <div class="col-sm-4 md-2 mb-5">

                <div class="card">
                    <img class="card-img-top" src="/media/00.jpg">
                    <div class="card-body">
                        <h4 class="card-title"> 1 ano </h4>
                        <h6 class="card-subtitle mb-2 text-muted"> Monitoria</h6>
                        <p class="card-text">bla bla bla bla bla bla bla bla bla bla </p>
                        <button type="button" class="btn btn-primary">Acesse</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Open Modal</button>
                    </div>

                </div>
                <!-- Modal -->
                <div id="myModal2" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Máterias</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                
                            </div>
                            <div class="modal-body">
                                <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
           </div>
        </div>   
    </div>           




</body>
</hmtl>
