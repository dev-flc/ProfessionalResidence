@extends('layouts.welcome')

@section('title','Contactanos')

@section('contenido')

<img class="img-responsive" src="../../img/CONTACTANOS.jpg">
<style type="text/css">
	iframe{
		width: 100%;
		height: 466px;
	}
	.icot{
		font-size: 40px;
	}
	  	.ip1{
    		position: center;
    		width: 100%;
    		padding: 5px;
    		height: 50px;
    		color: #777;
    		margin: 10px;

    	}
    	.ip2{
    		position: center;
    		width: 100%;
    		padding: 5px;
    		height: 50px;
    		color: #777;
    		margin: 10px;
    	}
    	.ip3{
    		position: center;
    		width: 100%;
    		padding: 5px;
    		height: 200px;
    		color: #777;
    		margin: 10px;
    	}
    	.enviar{
			width: 30%;
			border-radius: 30px;
			background-color: white;
    		border: 2px solid rgb(88, 214, 141);
    		padding: 5px;
    		height: 50px;
    		color: rgb(88, 214, 141);
    		margin: 10px;
    		transition: .8s;
		}
	.enviar:hover{
			color: rgb(236, 112, 99);
			border: 2px solid rgb(236, 112, 99);
		}
    	.fondoformu{
    		background: #fff;
    	}
		.titulocontactanos{
			color: rgb(52, 152, 219);
		}
		h5{
			color: rgb(93, 173, 226);
		}
		.spann{
			color: rgb(88, 214, 141);
		}
		.spann1{
			color: rgb(52, 152, 219);
		}
		.spann2{
			color: rgb(236, 112, 99);
		}
		.avisoprivaciodad{
			color: #777;
			text-align: center;
		}
		.linkk{
			color: #777;
		}

</style>
		  
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2755299.0271340064!2d-100.56028020220437!3d17.49532668602591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc9b249daa8e540fc!2sEscuela+Normal+Urbana+Federal+Profesor+Rafael+Ram%C3%ADrez!5e0!3m2!1ses!2smx!4v1477103528443" frameborder="0" style="border:0" allowfullscreen>
</iframe>
<div class="container-fluid fondoformu">
<div class="row">
    <div class="col-sm-12">
    <center>
    <h1 class="titulocontactanos">EN LA ENUF NOS GUSTARÍA ESCUCHARTE Y PODER RESOLVER TUS DUDAS PARA QUE TOMES LA MEJOR DECISIÓN PARA CONTINUAR CON TUS ESTUDIOS.
    </h1>
    <h5>Déjanos tus datos y un asesor te contactará para brindarte toda la infromacion que necesites.</h5>
    </center>
    <br />
    </div>
</div>
</div>

<div class="container-fluid fondoformu">

<div class="row">
    <div class="col-sm-4">
    	<center>
    		<h4 class="linkk"><span class="fa fa-phone icot spann" aria-hidden="true"></span><span class="spann">Telefono:  </span>(747) 472-52-27</h4>
    	</center>
    </div>
    <div class="col-sm-4">
    	<center>
    		<h4 class="linkk"><span class="fa fa-envelope icot spann2" aria-hidden="true"></span><span class="spann2">Correo:  </span>enufrr@hotmail.com</h4>
    	</center>
    </div>
    <div class="col-sm-4">
    	<center>
    		<h4><span class="fa fa-facebook-square icot spann1" aria-hidden="true"></span><span class="spann1">Facebook:  </span><a class="linkk" href="https://www.facebook.com/Escuela-Normal-Urbana-Federal-Prof-Rafael-Ram%C3%ADrez-203071469773794/"> https://www.facebook.com/ENUF/</a></h4>
    	</center>
    </div>
</div>
</div>
<div class="container-fluid fondoformu">
<br />
<div class="row">
<!--
   	<form>
    <div class="col-sm-6">
    	<input type="text" class="ip1" name="nombre" placeholder="Nombre *">
    </div>
    <div class="col-sm-6">
    	<input type="text" class="ip1" name="apellidos" placeholder="Apellidos *">
    </div>
    <div class="col-sm-12">
    	<input type="mail" class="ip2" name="correo" placeholder="correo electronico *">
    </div>	
    <div class="col-sm-12">	
    	<input type="number" class="ip2" name="telefono" placeholder="Telefono">
    </div>
    <div class="col-sm-6">		
    	<input type="text" class="ip1" name="estado" placeholder="Estado">
    </div>
    <div class="col-sm-6">				
    	<input type="text" class="ip1" name="ciudad" placeholder="Ciudad *">
    </div>
    <div class="col-sm-12">		
    	<input type="text" class="ip2" name="asunto" placeholder="Asunto *">
    </div>
    <div class="col-sm-12">		
    	<textarea class="ip3" placeholder="Mensaje"></textarea>
    	<p class="avisoprivaciodad">Al momento de dar click al botón "Enviar" aceptas el Aviso de Privacidad y otorgas tu consentimiento para que tus datos personales sean tratados de conformidad con dicho Aviso.</p>
    </div>
    <div class="col-sm-12">		
    	<input type="submit" class="enviar" value="Enviar">
    </div>	
    </form>
    -->

    </div>
    <br />
</div>

</div>
@endsection