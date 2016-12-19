<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Perfil</title>
  <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}">

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
                <li><a href="{{ route('alumno.perfil.index') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"> </span>  Inicio</a>
                </li>
                <li><a href="{{ route('alumno.esquema.index') }}"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Anteproyecto</a>
                </li>
                @foreach($alumno as $al)
                @if($al->ALU_semestre==8)
                <li><a href="{{ route('alumno.ensayo.index') }}"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Esquema</a>
                </li>
                @endif
                @endforeach
                <li><a href="{{ route('alumno.diario.index') }}"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Diario</a>
                </li>  
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    @foreach($alumno as $nomn)
                      {{ $nomn->ALU_nombre}}
                    @endforeach
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="{{ route('admin.auth.logout') }}"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Cerrar Sesion</a>
                    </li>
                    <li>
                    <a href="#"> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Perfil</a>
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
    background: rgb(229, 231, 233);
  }
  #imgperfil
  {
    border-radius: 50%;
    width: 150px;height: 150px;
    -webkit-box-shadow: 0px 0px 0px 7px rgba(230,230,230,1);
    -moz-box-shadow: 0px 0px 0px 7px rgba(230,230,230,1);
    box-shadow: 0px 0px 0px 7px rgba(230,230,230,1);
  }
  #imgasesor
  {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    -webkit-box-shadow: 0px 0px 0px 7px rgba(230,230,230,1);
    -moz-box-shadow: 0px 0px 0px 7px rgba(230,230,230,1);
    box-shadow: 0px 0px 0px 7px rgba(230,230,230,1);
  }
  #imgrevisor{
    width: 100px;
    height: 100px;
    -webkit-box-shadow: 0px 0px 0px 7px rgba(230,230,230,1);
    -moz-box-shadow: 0px 0px 0px 7px rgba(230,230,230,1);
    box-shadow: 0px 0px 0px 7px rgba(230,230,230,1);
  }
  .caption
  {
    background: rgb(230,230,230);
    margin: 10px;
    border-radius: 5px;
  }
  .colorfondoblanco
  {
    background: rgb(229, 231, 233);
    border-radius: 10px;
  }
  table
  {
    width: 100%;
  }
 #link
  {
    text-decoration: none;
  }
  #shower{
    position: relative;
    left: 60%;
    text-decoration: none;
    cursor: pointer;
    transition: .7s;
  }
  #shower:hover{
    background: #5cb85c;
  }
  .bb{
    height: 40px;
    border-radius: 50%;
  }
  
</style>
  <div class="container-fluid">
    @include('flash::message')
  </div>
  <div class="container-fluid">
    <div class="row">
      <!-- perfil fito -->
      <div class="col-sm-3">
        <div class="panel panel-default">
          <div class="panel-heading">Datos personales</div>
          <div class="panel-body">
            <div class="thumbnail">
              <br />
               @foreach ($user as $use)
              <img id="imgperfil" src="/files/documentos/{{ $use->foto }} " alt="...">
              
              <span id="shower" class="label label-default">editar foto <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
              <br>

            <!-- Formulario de imagen -->
              <div class="cla" style="display:none;">
                 {{Form::open(['route'=>['alumno.update.updatefoto',$use->id],'method'=>'PUT','files'=>'true'])}}
                <div class="form-group">
                  {!! Form::file('file',['class'=>'form-control','onchange'=>'previewFile()','required']) !!}
                </div> 
                <center>
                  <button  id="hider" class="btn btn-danger bb" type="button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  <button class="btn btn-success bb" type="submit"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                </center>
                {!! Form::close() !!}
              @endforeach
              </div>
              <!-- Fin formulario de imagen -->

              <div class="caption">
                @foreach ($alumno as $alumnos)
                <center>
                <h3>
                  {{ $alumnos->ALU_nombre }}
                </h3>



                <p>{{ $alumnos->ALU_apellido_p }} {{ $alumnos->ALU_apellido_m }}</p>
                <table class="table">
                @if($alumnos->ALU_nombre=="")
                <tr>
                  <td>
                    
                    <a href="{{ route('alumno.perfil.edit', $alumnos->id) }}" id="link">
                    <button class="btn btn-danger">
                    Completar informacion <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                  </a>

                  </td>
                </tr>
                @else
                  <tr>
                    <td>
                      <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> 
                      Matricula:
                    </td>
                    <td>{{ $alumnos->ALU_matricula }}</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="glyphicon glyphicon-time" aria-hidden="true"></span> 
                      Periodo:
                    </td>
                    <td>{{ $alumnos->ALU_periodo }}</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 
                      Telefono:
                    </td>
                    <td>{{ $alumnos->ALU_tel }}</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                      Celular:
                    </td>
                    <td>{{ $alumnos->ALU_cel }}</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                      Semestre:
                    </td>
                    <td>{{ $alumnos->ALU_semestre }}</td>
                  </tr>
                <tr>
                <td></td>
                  <td>
                    <p>
                  <a href="{{ route('alumno.perfil.edit', $alumnos->id) }}" id="link">
                    <span class="label label-primary">Editar perfil <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
                  </a>
                  
                </p>
                  </td>
                </tr>
                @endif
                </table>





                </center>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- fin perfil foto -->
      <!-- container inicio -->
      <div class="col-sm-9">  
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="panel panel-default">
              <div class="panel-heading">Escuela</div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="container-fluid colorfondoblanco">
                      <br>
                      <label>Datos Esceula</label>
                      <table class="table table-hover">
                      @foreach($escuela as $school)
                        <tr>
                          <td><strong>Nombre:</strong></td>
                          <td><center>{{ $school->ESC_nombre }}</center></td>
                        </tr>
                        <tr>
                          <td><strong>Clave:</strong></td>
                          <td><center>{{ $school->ESC_clave }}</center></td>
                        </tr>
                      @endforeach
                      </table>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="container-fluid colorfondoblanco">
                      <br>
                      <label>Director</label>
                      
                      <table class="table table-hover">
                      @foreach($director as $di)
                        <tr>
                          <td><strong>Nombre:</strong></td>
                          <td><center>{{ $di->DI_nombre }}</center></td>
                        </tr>
                        <tr>
                          <td><strong>Apellidos:</strong></td>
                          <td><center>{{ $di->DI_apellido_p }} {{ $di->DI_apellido_m }}</center></td>
                        </tr>
                        <tr>
                          <td><strong>Correo:</strong></td>
                          <td><center>{{ $di->DI_correo }}</center></td>
                        </tr>
                      @endforeach
                      </table>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="container-fluid colorfondoblanco">
                      <br>
                      <label>Tutor</label>
                      <table class="table table-hover">
                      @foreach($tutor as $tu)
                      @if($tu->TUT_nombre=="")

                      <td><h2><span class="label label-danger">Pendiente</span></h2></td>
                     @else
                        <tr>
                          <td><strong>Nombre:</strong></td>
                          <td><center>{{ $tu->TUT_nombre }}</center></td>
                        </tr>
                        <tr>
                          <td><strong>Apellidos:</strong></td>
                          <td><center>{{ $tu->TUT_apellido_p }} {{ $tu->TUT_apellido_m }}</center></td>
                        </tr>
                        <tr>
                          <td><strong>Correo:</strong></td>
                          <td><center>{{ $tu->TUT_correo }}</center></td>
                        </tr>
                        <tr>
                          <td><strong>Telefono:</strong></td>
                          <td><center>{{ $tu->TUT_tel }}</center></td>
                        </tr>
                        <tr>
                          <td><strong>Celular:</strong></td>
                          <td><center>{{ $tu->TUT_cel }}</center></td>
                        </tr>
                      @endif
                      </table>
                    </div>
                  </div>
                </div>
                 
                <hr />
                <!--<a href="" id="link" class="pull-right">|
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar |
                </a>
                <a href="" id="link" class="pull-right">|
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Descargar Solicitud | 
                </a>-->
                @endforeach
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
              Asesor 
              @if( $alumnos->ALU_semestre==8)| Revisores @endif</div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-6">
                    <label>Asesor</label>
                    <table class="table">
                      @foreach( $asesor as $ase )

                      @if($ase->ASE_nombre=="pendiente")
                        <tr>
                          <td><span class="label label-danger">Pendiente</span></td>
                        </tr>
                      @else
                      <tr>
                        <td rowspan="5">
                        <br>
                          <center>
                          <img id="imgasesor" src="/files/documentos/{{ $ase->foto }}" alt="...">

                          </center>
                        </td>
                      </tr>
                      <tr>
                        <td><strong>Nombre:</strong></td>
                        <td><center>{{ $ase->ASE_nombre }}</center></td>
                      </tr>
                      <tr>
                        <td><strong>Apellidos:</strong></td>
                        <td><center>{{ $ase->ASE_apellido_p }} {{ $ase->ASE_apellido_m }}</center></td>
                      </tr>
                      <tr>
                        <td><strong>Telefono:</strong></td>
                        <td><center>{{ $ase->ASE_tel }}</center></td>
                      </tr>
                      <tr>
                        <td><strong>Correo:</strong></td>
                        <td><center>{{ $ase->ASE_cel }}</center></td>
                      </tr>
                      @endif

                      @endforeach
                    </table>
                  </div>
                  <div class="col-sm-6">
                   @foreach( $revisor as $rev )
                      @if( $alumnos->ALU_semestre==8)
                    <label>Revisores</label>
                      <table class="table">
                      <tr>
                        <td rowspan="5">
                        <br>
                          <center>
                          <img id="imgrevisor" src="http://www.gamesforchange.org/g4cwp/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" alt="...">
                          </center>
                        </td>
                      </tr>
                      <tr>
                        <td><strong>Nombre:</strong></td>
                        <td><center>{{ $rev->ASE_nombre }}</center></td>
                      </tr>
                      <tr>
                        <td><strong>Apellidos:</strong></td>
                        <td><center>{{ $rev->ASE_apellido_p }} {{ $rev->ASE_apellido_m }}</center></td>
                      </tr>
                      <tr>
                        <td><strong>Telefono:</strong></td>
                        <td><center>{{ $rev->ASE_tel }}</center></td>
                      </tr>
                      <tr>
                        <td><strong>Correo:</strong></td>
                        <td><center>{{ $rev->ASE_cel }}</center></td>
                      </tr>
                      </table>
                      @endif
                      @endforeach
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div><!-- fin row -->

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