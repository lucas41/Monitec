@extends('template/teamplate')


@section('site')
<br><br><br>
<div class="container">
<div class="row">
  <div class="col-sm-4">
<center>
<div class="zoom">
<a href="http://127.0.0.1:8000/primeiroano/matematica1ano/capitulo"> <img src="/media/bola.jpg" class="img-responsive" width="200px"></a>
	<div class="text-item">
		<h3>Capitulo 1</h3> 
	</div>
</div>
</div>   
<div class="col-sm-4">
<center>
<div class="zoom">
<a href="http://127.0.0.1:8000/primeiroano/matematica1ano/capitulo2"> <img src="/media/bola.jpg" class="img-responsive" width="200px"></a>
	<div class="text-item">
		<h3>Capitulo 2</h3> 
	</div>
</div>
</div>   
</center>

<div class="col-sm-4">
<center>
<div class="zoom">
<a href="http://127.0.0.1:8000/primeiroano/matematica1ano/capitulo3"> <img src="/media/bola.jpg" class="img-responsive" width="200px"></a>
	<div class="text-item">
		<h3>Capitulo 3</h3> 
	</div>
</div>
</div>   
</center>
</div>
</div>

<br>

<div class="container">
<div class="row">
  <div class="col-sm-6">
<center>
<div class="zoom">
<a href="http://127.0.0.1:8000/primeiroano/matematica1ano/capitulo4"> <img src="/media/bola.jpg" class="img-responsive" width="200px"></a>
	<div class="text-item">
		<h3>Capitulo 4</h3> 
	</div>
</div>
</div>   
<div class="col-sm-6">
<center>
<div class="zoom">
<a href="http://127.0.0.1:8000/primeiroano/matematica1ano/capitulo5"> <img src="/media/bola.jpg" class="img-responsive" width="200px"></a>
	<div class="text-item">
		<h3>Capitulo 5</h3> 
	</div>
</div>
</div>   
</center>
<style>
.zoom {
	overflow: hidden;
}

.zoom img {
	max-width: 100%;
	-moz-transition: all 0.3s;
	-webkit-transition: all 0.3s;
	transition: all 0.3s;
}

.zoom:hover img {
	-moz-transform: scale(1.1);
	-webkit-transform: scale(1.1);
	transform: scale(1.1);
}

.text-item {
	position: relative;
	left: 2%;
	right: 100%;
	bottom: 20px;
	z-index: 10;
	padding-top: 20px;
	padding-bottom: 20px;
	color: #000000;
	text-align: center;
	text-shadow: 0 1px 3px rgba(0,0,0,0.6);
}


</style>
@endsection('site')