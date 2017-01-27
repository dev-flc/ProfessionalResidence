<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Diario</title>
	<link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>
<style type="text/css">
body{
	background: #FFF;
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

	.panel-custom-horrible-color1 {
    	border-color: rgb(93, 173, 226);
		transition: .7s;
	}
	.panel-custom-horrible-color1 > .panel-heading {
    	background: rgb(93, 173, 226);
   		color: #ffffff;
    	border-color: rgb(93, 173, 226);
		transition: .7s;
	}

	.panel-custom-horrible-color1:hover
	{
		border-color: rgb(52, 152, 219);
	}
	.panel-custom-horrible-color1:hover .panel-heading
	{
		background: rgb(52, 152, 219);
	}
	


	.panel-custom-horrible-color2 {
    	border-color: rgb(93, 173, 226);
		transition: .7s;
	}
	.panel-custom-horrible-color2 > .panel-heading {
    	background: rgb(93, 173, 226);
   		color: #ffffff;
    	border-color: rgb(93, 173, 226);
    		transition: .7s;	
	}


	.panel-custom-horrible-color2:hover
	{
		border-color: rgb(46, 134, 193);
	}
	.panel-custom-horrible-color2:hover .panel-heading
	{
		background: rgb(46, 134, 193);
	}
	#imgprofile
	{
		width: 30px;
	}
</style>

<div class="container-fluid">
   	<div class="row">
   		
   		<div class="col-sm-5">
   			<div class="panel panel-custom-horrible-color1">
			  <div class="panel-heading"><h2>Diario</h2></div>
			  <div class="panel-body">
			    @foreach ($diario as $dia)
					<p><strong>Titulo:  </strong>{{ $dia->DIA_nombre }}</p>
					<p><strong>Descripcion: </strong></p>
					<p>{{ $dia->DIA_descripcion}}</p>
					<hr>
					<p><img id="imgprofile" src="/files/documentos/c.png" alt="..."> {{ $dia->DIA_fecha}} </p>
					<p>
					@if($alumno->ALU_sexo=="hombre")
						<img id="imgprofile" src="/files/documentos/hombre1.png" alt="...">
					@else
						<img id="imgprofile" src="/files/documentos/mujer2.png" alt="...">
					@endif
					{{ $alumno->ALU_nombre}} {{ $alumno->ALU_apellido_p}} {{ $alumno->ALU_apellido_m}}
					</p>
			    @endforeach
			  </div>
			</div>
   		</div>
   		<div class="col-sm-4">
   			
   			<div class="panel panel-custom-horrible-color2">
			  <div class="panel-heading"><h2>Bitacora</h2></div>
			  <div class="panel-body">
			    @foreach ($nota as $not)
			    	<p><strong>Titulo:</strong> {{ $not->NOT_nombre }}
					</p>
					  <p><strong>Descripcion:</strong></p>
					    <p>{{ $not->NOT_descripcion}}</p>
					  <hr>
						@if($not->NOT_archivo=="archivo.pdf")

						@else
					  <center>
					  <a href="{{ route('asesor.alumno.descargadiarioasesor', $not->id) }}" id="link" target="_blank">Descargar <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                       </a>
                       </center>
                      
						@endif
                       <br>
					
			    @endforeach
			  </div>
			</div>
   		</div>








<div class="col-sm-3">
   		<!-- inicio notas diario-->
   		            <style>
 

.la {
    text-decoration: none;
}


.comment {
    
  
   # border-bottom: 1px solid #ddd;
   
    *zoom: 1;
    width: 100%;
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
    border: 1px solid rgb(245, 183, 177); /* color  marco comentario*/
    border-radius: 5px;
    background: #fff;
}

.comment .text p:last-child { margin: 0 }

.comment .attribution {
    margin: 0.5em 0 0;
    font-size: 12px;
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
/*
.comments:before {
    width: 1px;
    left: 24%;
    bottom: 0px;
    background: red;
}
*/

.comment:before {
    width: 15px;
    height: 15px;
    border: 3px solid #fff;
    border-radius: 100px;
    margin: 16px 0 0 -6px;
    box-shadow: 0 1px 1px rgba(0,0,0,0.2), inset 0 1px 1px rgba(0,0,0,0.1);
    background: #ccc;
}


.comment:hover:before { background: rgb(231, 76, 60); }

.comment .text:before {
    top: 18px;
    left: 78px;
    width: 9px;
    height: 9px;
    border-width: 0 0 1px 1px;
    border-style: solid;
    border-color: rgb(245, 183, 177); /*colo pikito */
    background: #fff;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
}
.divbor{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    color: #777;
    text-align: center;
    border: 1px solid rgb(245, 183, 177);;
    font-size: 20px;
}
.divbor img{
    width: 30px;
    height: 30px;
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
.cont
{
	border: 1px solid rgb(245, 183, 177);
	transition: .7s;
}
.cont:hover
{
	
	border: 1px solid rgb(236, 112, 99);
	border-radius: 15px;
}
#link{
	text-decoration: none;
}
</style>
   <div class="container-fluid cont">
   <section class="comments">
    @foreach($di as $diaa)
  <br>
    <article class="comment">

        <a class="comment-img" href="{{ route('asesor.alumno.verdiairio', $diaa->id) }}">
            <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="glyphicon glyphicon-ok"></i></button>
            
        </a> 
        <a href="{{ route('asesor.alumno.verdiairio', $diaa->id) }}" id="link"> 
        <div class="comment-body">
            <div class="text">
              <p><strong>Titulo:</strong> {!! $diaa->DIA_nombre !!}</p>
               <p class="attribution"><strong>Fecha y Hora: </strong>{!! $diaa->DIA_fecha !!}</p>
            </div>
        </div>
        </a>
    </article>
    <br>

    @endforeach
    <center>
    {!! $di->render()!!}
    </center>
    
</section>​
<!-- Fin notas diario-->
   		</div>
   		</div>











   	</div>
</div>
	



	<script  src="{{ asset('plugin/jquery/jquery-3.1.1.js') }}"></script>
	<script  src="{{ asset('plugin/bootstrap/js/bootstrap.min.js') }}"></script>

</body>

</html>