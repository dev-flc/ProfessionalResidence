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
	#izq{
		float: right;
	}
	#descrip{
	text-align: justify;
	}
	#link{
		text-decoration: none;
	}
	.novisible{
		background: #fff;
		color: #fff;
		border: none;
	}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-9">
		<div class="panel panel-default">
  			<div class="panel-heading">...</div>
  			<div class="panel-body">			 
  				@foreach ($documento as $doc)
					<h1>{{ $doc->DOC_nombre }}</h1>
					<div class="panel panel-default">
					  <div class="panel-body">
					  <label>Descripcion:</label><br>
					   <p id="descrip">{{ $doc->DOC_descripcion}}</p> 
					    <p> <a href="{{ route('asesor.alumno.descargaanteproyecto', $doc->id) }}">Descargar</a></p>
					  </div>
					</div>
					<p>
					<strong>Fecha de entrega:</strong> {{ $doc->DOC_fecha }} <strong>Subido:</strong> {{ $doc->DOC_fecha_entrega }} | {{ $doc->DOC_hora_entrega }} 
					@foreach ($alumno as $alu)
					<span id="izq"><strong>Alumno: </strong><span class="label label-primary">{{ $alu->ALU_nombre }} {{ $alu->ALU_apellido_p }}  {{ $alu->ALU_apellido_m }}</span></span>
					@endforeach
					</p>
  				@endforeach
  			</div>
  		</div>
  		</div>

		@foreach ($comentario as $com)
  		<div class="col-sm-2">
  		</div>
  		<div class="col-sm-9">
  			<div class="panel panel-default">
			  <div class="panel-heading"><h4><span class="label label-danger">{{ $com->CODO_usuario }}</span></h4></div>
			  <div class="panel-body">
			    <p>{{ $com->CODO_comentario }}</p>
			    <a id="izq" href="#" data-toggle="modal" data-target="#myModal">Cometar <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
			  </div>
			</div>
  		</div>

  		@endforeach
  	</div>
</div>
	

	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo Comentario</h4>
      </div>
      <div class="modal-body">
         @foreach($documento as $do)
        {{Form::open(['route'=>['asesor.alumno.comentariodocumento',$do->id],'method'=>'PUT'])}}
            @foreach ($asesor as $as)
                {!! Form::text('nombre',$as->ASE_nombre,['class'=>'novisible','readonly']) !!}
            @endforeach
            <div class="form-group">
                
                <textarea name="comentario" class="form-control" placeholder="comentario" rows="8" required ></textarea>
            </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Cometar</button>
        {!! Form::close() !!}
        @endforeach
      </div>
    </div>
  </div>
</div>


	<script  src="{{ asset('plugin/jquery/jquery-3.1.1.js') }}"></script>
	<script  src="{{ asset('plugin/bootstrap/js/bootstrap.min.js') }}"></script>

</body>

</html>