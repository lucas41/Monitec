@extends('layouts.app')

@section('content')

<br><br>

<p><center><h1>Bem vindos a Monitec</h1></center></p>
<div class="container">
<p><center> O site de monitoria da ETEC </p></center> 
</div>
</div>
<br>

<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/media/02.jpg" alt="First slide">
      <div class="carousel-caption">
    <h3>Los Angeles</h3>
    <p>We had such a great time in LA!</p>
  </div>

    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/media/02.jpg" alt="Second slide">
      <div class="carousel-caption">
    <h3>Los Angeles</h3>
    <p>We had such a great time in LA!</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/media/02.jpg" alt="Third slide">
      <div class="carousel-caption">
    <h3>Los Angeles</h3>
    <p>We had such a great time in LA!</p>
  </div>
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
<hr>
<div class="row">
<div class="col-md-6">
<div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/N9zjXIrgmYA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
</div>
<div class="col-md-6">
<center>
<h2> titulo </h2>
<p> DUAHAUHAIJDHDAJAIHIADHDUJDIDH 
DUHAUHXAIDAIJAIHADIJDAIJDIJAIJDIJADIDA
DIJASIJDISJDAIJADIJADIJADIJADIJDIJDIJAIADISJ
</p>
</center>
</div>
</div>
</div>
<hr>
</div>

    <br>
    <div class="container">
        <div class="row mb-4">

            <div class="col-sm-4">

                <div class="card">
                    <img class="card-img-bottom" src="/media/1ano.jpg">
                    <div class="card-body">
                        <h4 class="card-title"> 1 ano </h4>
                        <h6 class="card-subtitle mb-2 text-muted"> Monitoria</h6>
                        <p class="card-text">Aqui você encontra todo o material ja disponivel para esse ano até o momento </p>
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
                                
                                <ul>
                                <li>Some text in modal</li>
                                <li>Some text in modal</li>
                                <li>Some text in modal</li>
                                <li>Some text in modal</li>
                                </ul>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

  
      

            <div class="col-sm-4">

                <div class="card">
                    <img class="card-img-bottom" src="/media/2ano.jpg">
                    <div class="card-body">
                        <h4 class="card-title"> 2 ano </h4>
                        <h6 class="card-subtitle mb-2 text-muted"> Monitoria</h6>
                        <p class="card-text">Aqui você encontra todo o material ja disponivel para esse ano até o momento</p>
                        <a  href="http://127.0.0.1:8000/segundoano" <button type="button" class="btn btn-success">Acesse</button></a>
                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#eae">Informação</button>
                    </div>
                    
                </div>
                <!-- Modal -->
                <div id="eae" class="modal fade" role="dialog">
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
            
           
        

           <div class="col-sm-4">

<div class="card">
    <img class="card-img-bottom" src="/media/3ano.jpg">
    <div class="card-body">
        <h4 class="card-title"> 3 ano </h4>
        <h6 class="card-subtitle mb-2 text-muted"> Monitoria</h6>
        <p class="card-text">Aqui você encontra todo o material ja disponivel para esse ano até o momento</p>
        <a  href="http://127.0.0.1:8000/segundoano" <button type="button" class="btn btn-success">Acesse</button></a>
        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#salve">Informação</button>
    </div>
    
</div>
<!-- Modal -->
<div id="salve" class="modal fade" role="dialog">
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

           </div>
        </div>
    </div>
</div>




@endsection
