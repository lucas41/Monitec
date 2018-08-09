@extends('template/teamplate')


@section('site')
<br>
<p><center><h2>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos,</h2></center></p>
<div class="container">
<p><center>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos </p></center> 
</div>
</div>
<br><br>

<div class="container">
<div class="row">
  <div class="col-sm-6">
<center>
<div class="zoom">
<a href="http://127.0.0.1:8000/primeiroano/matematica1ano"> <img src="/media/bola.jpg" class="img-responsive" width="200px"></a>
	<div class="text-item">
		<h3>Monitoria Matematica</h3> 
	</div>
</div>
</div>   
<div class="col-sm-6">
<center>
<div class="zoom">
<a href="http://127.0.0.1:8000/primeiroano/portugues1ano"> <img src="/media/bola.jpg" class="img-responsive" width="200px"></a>
	<div class="text-item">
		<h3>Monitoria Portugues</h3> 
	</div>
</div>
</div>   
</center>
</div>
</div>
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