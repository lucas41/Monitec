@extends('template/teamplate')


@section('site')
<br><br>
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/media/emo.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/media/emo.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/media/ridiculo.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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
                        <a  href="http://127.0.0.1:8000/primeiroano" <button type="button" class="btn btn-success">Acesse</button></a>
                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#myModal">Informação</button>
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
                        <a  href="http://127.0.0.1:8000/segundoano" <button type="button" class="btn btn-success">Acesse</button></a>
                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#myModal">Informação</button>
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
                        <a  href="http://127.0.0.1:8000/terceiroano" <button type="button" class="btn btn-success">Acesse</button></a>
                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#myModal">Informação</button>
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
                            </div> ..
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
           </div>
        </div>
    </div>
</div>

@endsection('site')

