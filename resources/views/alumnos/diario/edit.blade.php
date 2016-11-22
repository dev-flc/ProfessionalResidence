

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>inicio</title>
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
  .caption
  {
    background: rgb(230,230,230);
    margin: 10px;
    border-radius: 5px;
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
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
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
          <div class="panel-heading">Nueva notaa</div>
          <div class="panel-body">
            <div class="row">
              @foreach ($diario as $dia)
              {{Form::open(['route'=>['alumno.diario.update',$dia->id],'method'=>'PUT','files'=>true])}}
              <div class="col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-heading">Diario</div>
                  <div class="panel-body">
                    <div class="form-group">
                        {!! Form::label('nombre','Titulo') !!}
                        {!! Form::text('nombre',$dia->DIA_nombre,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                      <textarea class="form-control descripcionclass" rows="6" name="descripcion" required>
                        {{ $dia->DIA_descripcion }}
                      </textarea>
                      </div>
                  </div>
                </div>
              </div>
              @endforeach
              @foreach ($nota as $not)
              <div class="col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-heading">Bitácora</div>
                  <div class="panel-body">
                    <div class="form-group">
                      {!! Form::label('nombre','Nombre ') !!}
                      {!! Form::text('nombree',$not->NOT_nombre,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::file('file',['class'=>'form-control','required']) !!}
                    </div>
                    <div class="form-group">
                      <textarea class="form-control descripcionn" rows="6" name="des" required>
                        {{ $not->NOT_descripcion }}
                      </textarea>
                    </div>
                  </div>
                  <div class="panel-footer">
                    @endforeach
                    {{ Form::button('Modificar <span class="glyphicon glyphicon-ok"></span>', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
                    <br>
                    <br>
                  </div>
                </div>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div> 
    </div><!-- fin row -->
  </div>
<script  src="{{ asset('plugin/jquery/jquery-3.1.1.js') }}"></script>
<script  src="{{ asset('plugin/bootstrap/js/bootstrap.min.js') }}"></script>
<script  src="{{ asset('plugin/dist/trumbowyg.js') }}"></script>


<script type="text/javascript">
  $('.descripcionclass').trumbowyg();
  $('.descripcionn').trumbowyg();
</script> 
</body>
</html>
