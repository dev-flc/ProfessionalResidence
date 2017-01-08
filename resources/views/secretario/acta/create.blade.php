

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nueva acta</title>
  <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugin/dist/ui/trumbowyg.css') }}">


</head>
<header>
<!-- Inicio navbar -->
<div id="navbar-menu" class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#">ENUF</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ route('secretario.perfil.index') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"> </span>  Inicio</a>
                </li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>{{ Auth::user()->name}}
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="{{ route('admin.auth.logout') }}"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Cerrar Sesion</a>
                    </li>
                    <li>
                    
                    </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
  <!-- Fin navbar-->
</header>
<body>
<style type="text/css">
  body
  {
    background: rgb(215, 219, 221);
  }
</style>
<div class="container-fluid">
      <div class="row">
    <div class="col-sm-3"> 
    <div class="panel panel-default">
        <div class="panel-heading">...</div>
        <div class="panel-body">       
            <div class="thumbnail">
             <img id="imgperfil" src="/files/documentos/{{ $foto }} " alt="...">
              
              @foreach ($secretario as $secre)
              <div class="caption">
              <center>
                <h3>{{ $secre->SEC_nombre  }}</h3>
                <p>{{ $secre->SEC_apellido_p  }} {{ $secre->SEC_apellido_m  }}</p>
                <table class="table">
                  <tr>
                    <td>Telefono:</td>
                    <td>{{ $secre->SEC_tel }}</td>
                  </tr>
                  <tr>
                    <td>Celular:</td>
                    <td>{{ $secre->SEC_cel }}</td>
                  </tr>
                </table>
                <style type="text/css">
                  .btn-editar
                  {
                    width: 100%;
                  }
                </style>
                <p>
                  <a href="{{ route('secretario.perfil.edit', $secre->id) }}" class="btn btn-primary btn-editar" role="button">Editar</a> 
                </p>
                </center>
              @endforeach
              </div>
              
            </div>
        </div>
      </div>
    </div>
   
              {!! Form::open(['route'=>'secretario.acta.store','method'=>'POST','files'=>'true']) !!}
       
              <div class="col-sm-9">
                <div class="panel panel-default">
                  <div class="panel-heading">Acta</div>
                  <div class="panel-body">
                    <div class="form-group">
                      {!! Form::label('nombre','Nombre ') !!}
                      {!! Form::text('titulo',null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="form-group">
                    <label>Descripcion</label>
                      <textarea class="form-control descripcionn" rows="6" name="descripcion" required></textarea>
                    </div>
                  </div>
                  <div class="panel-footer">

                    {{ Form::button('Guardar <span class="glyphicon glyphicon-ok"></span>', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
                    <br>
                    <br>
                  </div>
                </div>
              </div>
              {!! Form::close() !!}
    
    </div><!-- fin row -->
  </div>
<script  src="{{ asset('plugin/jquery/jquery-3.1.1.js') }}"></script>
<script  src="{{ asset('plugin/bootstrap/js/bootstrap.min.js') }}"></script>
<script  src="{{ asset('plugin/dist/trumbowyg.js') }}"></script>


<script type="text/javascript">
  $('.descripcionclass').trumbowyg();
  $('.descripcionn').trumbowyg();
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
