<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default')  | Panel de admin</title>
	<link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}">
	
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
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-3">	
		<div class="panel panel-default">
  			<div class="panel-heading">...</div>
  			<div class="panel-body">			 
  				@yield('submenu')
  			</div>
  		</div>
		</div>
		<div class="col-sm-9">	
			@yield('content')
		</div>
	</div>
</div>
	


	<script  src="{{ asset('plugin/jquery/jquery-3.1.1.js') }}"></script>
	<script  src="{{ asset('plugin/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript">
  function previewFile() {
  var preview = document.querySelector('img');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "";
  }
}
</script>
<script>
$( "#hider" ).click(function() {
  $( ".cla" ).hide("swing");
  });
$( "#shower" ).click(function() {
  $( ".cla" ).show("slow");
});
</script>
<script type="text/javascript">
  function previewFile() {
  var preview = document.querySelector('img');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "";
  }
}
</script>
<script>
$( "#hider" ).click(function() {
  $( ".cla" ).hide("swing");
  });
$( "#shower" ).click(function() {
  $( ".cla" ).show("slow");
});
</script>
</body>

</html>
