@extends('template/teamplate')


@section('site')

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
                        <img class="img-fluid" src="/media/05.jpeg">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="/media/05.jpeg">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="/media/05.jpeg">

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
        
    </div>
    <br>
    <div class="container">
        <div class="row mb-5">

            <div class="col-sm-4 md-2 mb-5">

                <div class="card">
                    <img class="card-img-bottom" src="/media/1ano.jpg">
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
                    <img class="card-img-bottom" src="/media/2ano.jpg">
                    <div class="card-body">
                        <h4 class="card-title"> 2 ano </h4>
                        <h6 class="card-subtitle mb-2 text-muted"> Monitoria</h6>
                        <p class="card-text">bla bla bla bla bla bla bla bla bla bla </p>
                        <button type="button" class="btn btn-success">Acesse</button>
                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#myModal">Open Modal</button>
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

                <div class="card" style="width:350px">
                    <img class="card-img-bottom" src="/media/3ano.jpg">
                    <div class="card-body">
                        <h4 class="card-title"> 3 ano </h4>
                        <h6 class="card-subtitle mb-2 text-muted"> Monitoria</h6>
                        <p class="card-text">bla bla bla bla bla bla bla bla bla bla </p>
                        <button type="button" class="btn btn-success">Acesse</button>
                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#myModal">Open Modal</button>
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


@endsection('site')

