<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>inicio</title>
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
                <li><a href="{{ route('alumno.esquema.index') }}"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Esquema</a>
                </li>
                @foreach($alumno as $al)
                @if($al->ALU_semestre==8)
                <li><a href="{{ route('alumno.ensayo.index') }}"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Ensayo</a>
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
    background: #fff;
  }
  table
  {
    width: 100%;
  }
  #link
  {
    text-decoration: none;
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
              <img id="imgperfil" src="http://www.gamesforchange.org/g4cwp/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" alt="...">
              <div class="caption">
                @foreach ($alumno as $alumnos)
                <center>
                <h3>
                  {{ $alumnos->ALU_nombre }}
                </h3>
                <p>{{ $alumnos->ALU_apellido_p }} {{ $alumnos->ALU_apellido_m }}</p>
                <table class="table">
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
                </table>
                <p>
                  <a href="#" id="link">
                    <span class="label label-default">Default <span class="glyphicon glyphicon-star" aria-hidden="true"></span></span>
                  </a>
                  <a href="#" id="link">
                    <span class="label label-default">Default <span class="glyphicon glyphicon-star" aria-hidden="true"></span></span>
                  </a>
                  <a href="#" id="link">
                    <span class="label label-primary">editar <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
                  </a>
                </p>
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
                      <label>Datos Esceula</label>
                      <hr>
                      <table>
                      @foreach($escuela as $school)
                        <tr>
                          <td>Nombre:</td>
                          <td><center>{{ $school->ESC_nombre }}</center></td>
                        </tr>
                        <tr>
                          <td>Clave:</td>
                          <td><center>{{ $school->ESC_clave }}</center></td>
                        </tr>
                      @endforeach
                      </table>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="container-fluid colorfondoblanco">
                      <label>Director</label>
                      <hr>
                      <table>
                      @foreach($director as $di)
                        <tr>
                          <td>Nombre:</td>
                          <td><center>{{ $di->DI_nombre }}</center></td>
                        </tr>
                        <tr>
                          <td>Apellidos:</td>
                          <td><center>{{ $di->DI_apellido_p }} {{ $di->DI_apellido_m }}</center></td>
                        </tr>
                        <tr>
                          <td>Correo:</td>
                          <td><center>{{ $di->DI_correo }}</center></td>
                        </tr>
                      @endforeach
                      </table>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="container-fluid colorfondoblanco">
                      <label>Tutor</label>
                      <hr>
                      <table>
                      @foreach($tutor as $tu)
                        <tr>
                          <td>Nombre:</td>
                          <td><center>{{ $tu->TUT_nombre }}</center></td>
                        </tr>
                        <tr>
                          <td>Apellidos:</td>
                          <td><center>{{ $tu->TUT_apellido_p }} {{ $tu->TUT_apellido_m }}</center></td>
                        </tr>
                        <tr>
                          <td>Correo:</td>
                          <td><center>{{ $tu->TUT_correo }}</center></td>
                        </tr>
                        <tr>
                          <td>Telefono:</td>
                          <td><center>{{ $tu->TUT_tel }}</center></td>
                        </tr>
                        <tr>
                          <td>Celular:</td>
                          <td><center>{{ $tu->TUT_cel }}</center></td>
                        </tr>
                      @endforeach
                      </table>
                    </div>
                  </div>
                </div>
                <hr />
                <a href="" id="link" class="pull-right">|
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar |
                </a>
                <a href="" id="link" class="pull-right">|
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Descargar Solicitud | 
                </a>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">Panel heading without title</div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-6">
                    <label>Asesor</label>
                    <table class="table">
                      @foreach( $asesor as $ase )
                      <tr>
                        <td rowspan="5">
                        <br>
                          <center>
                          <img id="imgasesor" src="http://www.gamesforchange.org/g4cwp/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" alt="...">
                          </center>
                        </td>
                      </tr>
                      <tr>
                        <td>Nombre:</td>
                        <td><center>{{ $ase->ASE_nombre }}</center></td>
                      </tr>
                      <tr>
                        <td>Apellidos:</td>
                        <td><center>{{ $ase->ASE_apellido_p }} {{ $ase->ASE_apellido_m }}</center></td>
                      </tr>
                      <tr>
                        <td>Telefono:</td>
                        <td><center>{{ $ase->ASE_tel }}</center></td>
                      </tr>
                      <tr>
                        <td>Correo:</td>
                        <td><center>{{ $ase->ASE_cel }}</center></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <a id="link" class="pull-right"  href="#">
                            | Ver Perfil <span class="glyphicon glyphicon-user" aria-hidden="true"></span> |
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </table>
                  </div>
                  <div class="col-sm-6">
                    <label>Revisores</label>
                    
                      @foreach( $revisor as $rev )
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
                        <td>Nombre:</td>
                        <td><center>{{ $rev->ASE_nombre }}</center></td>
                      </tr>
                      <tr>
                        <td>Apellidos:</td>
                        <td><center>{{ $rev->ASE_apellido_p }} {{ $rev->ASE_apellido_m }}</center></td>
                      </tr>
                      <tr>
                        <td>Telefono:</td>
                        <td><center>{{ $rev->ASE_tel }}</center></td>
                      </tr>
                      <tr>
                        <td>Correo:</td>
                        <td><center>{{ $rev->ASE_cel }}</center></td>
                      </tr>
                      </table>
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
</body>
</html>