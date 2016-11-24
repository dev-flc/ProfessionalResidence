
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
<br>
<br>
<div class="container-fluid">
    @include('flash::message')
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-default">
  <div class="panel-heading">Inicio de Sesión</div>
  <div class="panel-body">
    {!! Form::open(['route'=>'admin.auth.login', 'method'=>'POST']) !!}
  <div class="form-group">
  
  {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'ejemplo@gmail.com']) !!}

  </div>

  <div class="form-group">
  {!! Form::password('password',['class'=>'form-control','placeholder'=>'***']) !!}
  </div>
  </div>
  <div class="panel-footer">
	<a href="">Cancelar</a>
    {!! Form::submit('Acceder',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>


<script  src="{{ asset('plugin/jquery/jquery-3.1.1.js') }}"></script>
<script  src="{{ asset('plugin/bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>