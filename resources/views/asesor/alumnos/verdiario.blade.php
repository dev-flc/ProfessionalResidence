<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Entrega</title>
	<link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>
<style type="text/css">
	body{
		background: rgb(235, 237, 239);
	}
</style>
@include('asesor.templates.partes.navbar')
<body>
	
<div class="container-fluid">
	@include('flash::message')
</div>
<style type="text/css">
	p{
		text-align: justify;
	}
</style>

<div class="container-fluid">
<div class="panel panel-default">
  <div class="panel-heading">Diario</div>
  <div class="panel-body">
   	<div class="row">
   		<div class="col-sm-6">
   			<center><h2>Mi diario</h2></center>
   			<div class="panel panel-default">
			  <div class="panel-heading">...</div>
			  <div class="panel-body">
			    @foreach ($diario as $dia)
				<label>{{ $dia->DIA_nombre }}</label>
				<div class="panel panel-default">
				  <div class="panel-body">
				    <p>{{ $dia->DIA_descripcion}}</p>
				  </div>
				</div>
			    @endforeach
			  </div>
			</div>
   		</div>
   		<div class="col-sm-6">
   			<center><h2>Bitacora</h2></center>
   			<div class="panel panel-default">
			  <div class="panel-heading">...</div>
			  <div class="panel-body">
			    @foreach ($nota as $not)
			    	<label>{{ $not->NOT_nombre }}</label>
					<div class="panel panel-default">
					  <div class="panel-body">
					    <p>{{ $not->NOT_descripcion}}</p>
					  </div>
					 
					  <center>
					  <a href="{{ route('asesor.alumno.descargadiarioasesor', $not->id) }}" id="link" target="_blank">Descargar <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                       </a>
                       </center>
                      
                       <br>
					</div>
			    @endforeach
			  </div>
			</div>
   		</div>
   	</div>
  </div>
</div>
</div>
	



	<script  src="{{ asset('plugin/jquery/jquery-3.1.1.js') }}"></script>
	<script  src="{{ asset('plugin/bootstrap/js/bootstrap.min.js') }}"></script>

</body>

</html>