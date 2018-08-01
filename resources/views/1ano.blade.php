@extends('template/teamplate')


@section('site')
<br><br>
    <div class="container">
        <div class="row mb-5">

            <div class="col-sm-6 md-6 mb-6">

                <div class="card"style="width:400px">
                    <img class="card-img-bottom" src="#">
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

  
      

            <div class="col-sm-6 md-6 mb-6">

                <div class="card" style="width:400px">
                    <img class="card-img-bottom" src="#">
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
            
           
        

            
        </div>
    </div>
</div>



@endsection('site')