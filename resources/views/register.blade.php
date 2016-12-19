

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugin/dist/ui/trumbowyg.css') }}">
</head>

<body>
<style type="text/css">
  body
  {
    background: rgb(229, 231, 233);
  }
  #errores{
    color: rgb(148, 49, 38);
  }
  input[type='text'],input[type='password']{
    display: block;
    margin: 0 auto;
    width: 75%;
    border: 0;
    border-bottom: 1px solid rgba(0,0,0,.2);
    height: 45px;
    line-height: 45px;  
    margin-bottom: 10px;
    font-size: 17px;
    color: rgba(0,0,0,.4);
  }
  input[type='text']:focus {
    outline: none;
    border-color: rgb(46, 204, 113);
  }
  input[type='password']:focus {
    outline: none;
    border-color: rgb(46, 204, 113);

  }

  #enviar
  {
    width: 70%;
  }
  .panel-default
  {
    border-radius: 100px 0px 100px 0px;
    -moz-border-radius: 100px 0px 100px 0px;
    -webkit-border-radius: 100px 0px 100px 0px;
    border: 0px solid #000000;
    height: 500px;
  }
</style>

<br>
<br>
<br>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
    </div>
		<div class="col-sm-6">
      @include('flash::message')
			<div class="panel panel-default">
          <br>
          <br>
  				<br>
  				<div class="panel-body">
            <center>
            <div id="errores"></div>
            </center>
    				{!! Form::open(['route'=>'registro.store','method'=>'POST','files'=>'true','name'=>'loginform']) !!}

  					<div id="divnombre" class="form-group" >
              <input type="text" name="nombre"  id="nombre" placeholder="nombre" >
            </div>
            <div id="divemail" class="form-group">
    					
    					<input type="text" name="email" id="email" placeholder="Email" >
  					</div>
  					<div id="divpass" class="form-group">
    					
    					<input type="password" name="contra"  id="pass" placeholder="contraseña" >
  					</div>
  					<div id="divverifica" class="form-group">
    					<input type="password" name="verifica"  id="passverifica" placeholder="verificar contraseña" >
  					</div>
  				</div>
  				<div class="form-group"><center>  
  					 <button type="button" id="enviar" class="btn btn-success ">Crear Cuenta</button><br><br>
  					 </form>
  				</div>
			</div>	
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>
<script  src="{{ asset('plugin/jquery/jquery-3.1.1.js') }}"></script>
<script  src="{{ asset('plugin/bootstrap/js/bootstrap.min.js') }}"></script>
<script  src="{{ asset('js/login.js') }}"></script>

</body>
</html>
