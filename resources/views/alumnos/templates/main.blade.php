<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default')</title>
	<link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}">
</head>
<style type="text/css">
	body{
		background: rgb(235, 237, 239);
	}
</style>
<header>
	@include('alumnos.templates.partes.nav')	
</header>
<body>
	<div class="container-fluid">
		@include('flash::message')
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				@yield('submenu')	
			</div>
			<div class="col-sm-9">	
				@yield('content')
			</div>
		</div>
	</div>
<script  src="{{ asset('plugin/jquery/jquery-3.1.1.js') }}"></script>
<script  src="{{ asset('plugin/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
