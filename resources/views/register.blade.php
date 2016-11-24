

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>inicio</title>
  <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugin/dist/ui/trumbowyg.css') }}">
</head>

<body>
<style type="text/css">
  body
  {
    background: rgb(229, 231, 233);
  }
</style>

<br>
<br>
<br>
<br>
<div class="container-fluid">
    @include('flash::message')
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">

			<div class="panel panel-default">
  				<div class="panel-heading">Ingreses sus datos</div>
  				<div class="panel-body">
    				{!! Form::open(['route'=>'registro.store','method'=>'POST','files'=>'true']) !!}
  					<div class="form-group">
              <label for="nombre">Nombre de usuario</label>
              <input type="nombre" name="nombre" class="form-control" id="exampleInputEmail1" placeholder="nombre" required>
            </div>
            <div class="form-group">
    					<label for="exampleInputEmail1">Email address</label>
    					<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
  					</div>
  					<div class="form-group">
    					<label for="contrasena">Password</label>
    					<input type="password" name="contra" class="form-control" id="contrasena" placeholder="contraseña" required>
  					</div>
  					<div class="form-group">
    					<label for="verifiacr">Password</label>
    					<input type="password" name="verifica" class="form-control" id="verifiacr" placeholder="contraseña" required>
  					</div>
  				</div>
  				<div class="panel-footer">
  					 <button type="submit" class="btn btn-success ">Crear Cuenta</button>
  					 </form>
  				</div>
			</div>	
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>
<script  src="{{ asset('plugin/jquery/jquery-3.1.1.js') }}"></script>
<script  src="{{ asset('plugin/bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>
