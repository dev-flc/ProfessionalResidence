<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default')  | Panel de admin</title>
	<link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>
<style type="text/css">
	body{
		background: rgb(235, 237, 239);
	}
</style>
@include('admin.templates.partes.nav')
<body>
	
	<div class="container-fluid">
		@include('flash::message')
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
			<div class="panel panel-submenu">
  				<div class="panel-heading">
       				<h3 class="panel-title">Menu</h3>
       			</div>		
  				<div class="panel-body">
          <style type="text/css">
            .admin-menu{
              background: rgb(244, 246, 246);
              border-radius: 10px;
            }
          </style>
  					
  	<ul class="nav nav-pills nav-stacked admin-menu">
         
          <li><a href="{{ route('admin.perfil.index') }}" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio  </a>
          </li>
          
          <li><a href="{{ route('admin.alumnos.index') }}" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Alumnos  </a>
          </li>

          

          <li><a href="{{ route('admin.escuelas.index') }}" ><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Ecuelas  </a>
          </li>

          <li><a href="{{ route('admin.asesores.index') }}" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Asesores  </a>
          </li>

          <li><a href="{{ route('admin.esquema.index') }}" ><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Ensayo </a>
          </li>

          <li><a href="{{ route('admin.secretario.index') }}" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Secretario   </a>
          </li>

          <li><a href="{{ route('admin.alumnos.list') }}" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Asignar asesores   </a>
          </li>

          <li><a href="{{ route('admin.plan.index') }}" ><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Plan de trabajo   </a>
          </li>

          <li><a href="{{ route('admin.revisores.index') }}" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Asignar revisores   </a>
          </li>

          <!--<li><a href="#" ><span class="glyphicon glyphicon-book" aria-hidden="true"></span> proyectos  </a></li>-->
          
        </ul>
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
    $(document).ready(function(){
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
});
     })
</script>
</body>

</html>
