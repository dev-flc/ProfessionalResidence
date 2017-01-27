<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Entrega seguimiento</title>
	<link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

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

<div class="col-sm-2">
			
		</div>
		<div class="col-sm-9">
			<style type="text/css">
				.contenedor{
					height: 170px;
					border: 1px solid rgb(133, 193, 233);
					transition: .7s;
				}
				.columnas1{
					background: rgb(133, 193, 233);
					height: 168px;
					transition: .7s;

				}
				.columnas2{
					height: 168px;
				}

				.contenedor:hover .columnas1
				{
					background: rgb(52, 152, 219);
				}
				.contenedor:hover
				{
					border: 1px solid rgb(52, 152, 219);
				}
				strong,label{
					color: rgb(52, 152, 219);
				}
			</style>
			<div class="container-fluid contenedor">
				<div class="row">

					<!-- Inicio Documento -->
					@foreach ($documento as $doc)
					<div class="col-sm-2 columnas1">
					<br>
						<center><img  src="/files/documentos/notebook.png" alt="...">
						</center>
					</div>
					<div class="col-sm-8 columnas2">
						<h3>
						<center>
						<strong>" {{ $doc->SEG_nombre }} "</strong>
						</center>
						</h3>
						<label>Descripcion:</label> {{ $doc->SEG_descripcion}}
						<p>
						<strong>Fecha:</strong> {{ $doc->SEG_fecha }} | <strong>Fecha y hora de entrega:</strong> {{ $doc->SEG_fecha_entrega }} | {{ $doc->SEG_hora_entrega }} 
						</p>
						<p>
							@foreach ($alumno as $alu)
							<strong>Alumno: </strong>{{ $alu->ALU_nombre }} {{ $alu->ALU_apellido_p }}  {{ $alu->ALU_apellido_m }}
					@endforeach
						</p>
					</div>
					<div class="col-sm-2 columnas1">
						<br>
						<style type="text/css">
							#download
							{
								text-decoration: none;
								color: rgb(255,255,255);
							}
						</style>
						<center>
						<a id="download" href="{{ route('asesor.alumno.descargaanteproyecto', $doc->id) }}">
						<img  src="/files/documentos/multimedia.png" alt="...">
						<p>Descargar archivo</p>
						</a>
						</center>
					</div>

					@endforeach
				</div>
			</div>
			<br>
  		
		</div>














		<div class="col-sm-2"></div>
		



<!-- inicio comentarios -->
  		<style>
 .la {
    color: #6d84b4;
    text-decoration: none;
}

.comment {
    overflow: hidden;
    padding: 0 0 1em;
   # border-bottom: 1px solid #ddd;
    margin: 0 0 1em;
    margin-left: 40px;
    *zoom: 1;
    width: 90%;
}

.comment-img {
    float: left;
    margin-right: 33px;
    border-radius: 50%;
    overflow: hidden;
}

.comment-img img { display: block }

.comment-body { overflow: hidden }

.comment .text {
    padding: 10px;
    border: 1px solid rgb(52, 152, 219); /*color borde*/
    border-radius: 5px;          /* contenido del texto */
    background: #fff;
}

.comment .text p:last-child { margin: 0 }

.comment .attribution {
    margin: 0.5em 0 0;
    font-size: 14px;
    color: #666;
}

/* Decoration */

.comments, .comment { position: relative }

.comments:before, .comment:before, .comment .text:before {
    content: "";
    position: absolute;
    top: 0;
    left: 65px;
}

.comments:before {
    width: 6px;
    left: 103px;
    bottom: 0px;
    background: rgba(0,0,0,0.1);
}

.comment:before {
    width: 15px;
    height: 15px;
    border: 3px solid #fff;
    border-radius: 100px;
    margin: 16px 0 0 -6px;
    box-shadow: 0 1px 1px rgba(0,0,0,0.2), inset 0 1px 1px rgba(0,0,0,0.1);
    background: #ccc;
}


.comment:hover:before { 
	background: rgb(52, 152, 219);
}

.comment .text:before {
    top: 18px;
    left: 78px;
    width: 9px;
    height: 9px;
    border-width: 0 0 1px 1px;
    border-style: solid;
    border-color: rgb(52, 152, 219);  /* color pikito*/
    background: #fff;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
}
.color{
	border: 1px solid rgb(202, 207, 210);
	background: #fff;
	
	box-shadow: -3px 2px 3px  3px rgb(229, 231, 233);
}
#li{
	text-decoration: none;
	color: rgb(231, 76, 60);
}
#agregar{
	text-decoration: none;
	font-size: 20px;
}
.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;

}
.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}
.btn-circle.btn-xl {
  width: 70px;
  height: 70px;
  padding: 10px 16px;
  font-size: 24px;
  line-height: 1.33;
  border-radius: 35px;
}
#co{
	color: #FFF;
}
</style>
		<div class="col-sm-9">
		
		<div class="container-fluid color">
		<br>
		
			<section class="comments">                              
				@foreach ($comentario as $com)
			    <article class="comment">
			        <a class="comment-img" href="#non">
			            <button type="button" class="btn btn-info btn-circle btn-lg"><strong id="co">{{ $numcom++ }}</strong></button>
			        </a>  
			        <div class="comment-body">
			            <div class="text">
			              <p>{{ $com->COSE_comentario }}</p>
			            </div>
			            <p class="attribution">Comentario por <a href="#">{{ $com->COSE_usuario }}</a> | Fecha y Hora <a href="#">{{ $com->COSE_fecha }}</a></p>
			        </div>
			    </article>
			    @endforeach
			     <article class="comment">
			        <a class="comment-img" href="#non">
			            <button type="button" class="btn btn-info btn-circle btn-lg"><strong id="co"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></strong></button>
			        </a>  
			        <div class="comment-body">
			            <div class="text">
			            <style type="text/css">
			            	textarea{
			            		height: 100px;
								width: 100%;
								padding: 10px;
								font-size: 15px;
								border: none;
								outline:0px;
			            	}
			            	.btn-primary{
			            		margin: 5px;
			            	}
			            </style>
			              @foreach($documento as $do)
        {{Form::open(['route'=>['asesor.alumno.comentarioseguimiento',$do->id],'method'=>'PUT'])}}
            @foreach ($asesor as $as)
                {!! Form::text('nombre',$as->ASE_nombre,['class'=>'novisible','readonly']) !!}
            @endforeach
			              			<textarea placeholder="Agregar comentario" name="comentario" required></textarea>
			     
			            </div>

							<button type="submit" class="btn btn-primary">Cometar</button>
			             {!! Form::close() !!}
        					@endforeach
			        </div>
			    </article>
			</section>​
		</div>
		
		<br>
		<br>
		<br>
		</div>
  		<!-- Fin comentarios -->





	
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
        {{Form::open(['route'=>['asesor.alumno.comentarioseguimiento',$do->id],'method'=>'PUT'])}}
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