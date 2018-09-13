@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">

    <div class="col-sm-4">


              <div class="card">
                    <img class="card-img-bottom" src="/media/eu.jpg">
                    <div class="card-body">
                        <h4 class="card-title"> {{ Auth::user()->name }} </h4>
                        <h6 class="card-subtitle mb-2 text-muted"> {{ Auth::user()->RmAluno}}</h6>
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
            
            <div class="col-sm-8">
            <div class="row">
                    <div class="col-sm-2">

                            <p> </p>
                    </div>
                    
                    <div id="info" class="col-sm-8">
                    
                    <br>
                            <h1> Seja bem Vindo(a): {{ Auth::user()->name }}</h1>
                            <br> 
                            <p> Email: {{ Auth::user()->email }}</p>
                            <br>
                            <p> conta criada em: {{ Auth::user()->created_at }}</p>
                            <br>
                            <p> Colabore conosco!! nos envie seus resumos para podermos disponibiza-los para todos</p>
                          
                        
                        <div class="form-group row">
                            <button class="btn btn-primary">
                            <input TYPE="file" SRC="/media/upload.png"NAME="imagesubmit1" ALIGN="top" width="100">
                            </button>
                           
                            
                        </div>  
                        <input type="submit">

            </div>
        </div>
        
    </div>

      
 
@endsection('content')