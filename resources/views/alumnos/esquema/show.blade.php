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
  #izq{
    float: right;
  }
  #descrip{
  text-align: justify;
  }
  #link{
    text-decoration: none;
  }
  .novisible{
    background: #fff;
    color: #fff;
    border: none;
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
                      <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>
                      Semestre:
                    </td>
                    <td>{{ $alumnos->ALU_semestre }}</td>
                  </tr>
                </table>
               <p>
                  <a href="{{ route('alumno.perfil.edit', $alumnos->id) }}" id="link">
                    <span class="label label-primary">Editar perfil <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
                  </a>
                 <!--
                  <a href="{{ route('alumno.perfil.show', $alumnos->id) }}" id="link">
                    <span class="label label-success">ver perfil <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
                  </a>
                  -->
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
          <div class="panel-heading">...</div>
          <div class="panel-body">
            @foreach ($documento as $doc)
            <h1>{{ $doc->DOC_nombre }}</h1>
            <div class="panel panel-default">
            <div class="panel-body">
            <label>Descripcion:</label><br>
            <p id="descrip">{{ $doc->DOC_descripcion}}</p> 
            <p>  <a href="{{ route('alumno.descarga.descarga', $doc->id) }}" id="link" target="_blank">Descargar <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                             </a></p>
            <p>
            <strong>Fecha de entrega:</strong> {{ $doc->DOC_fecha }} <strong>Subido:</strong> {{ $doc->DOC_fecha_entrega }} | {{ $doc->DOC_hora_entrega }} 
            @foreach ($alumno as $alu)
            <span id="izq"><strong>Alumno: </strong><span class="label label-primary">{{ $alu->ALU_nombre }} {{ $alu->ALU_apellido_p }}  {{ $alu->ALU_apellido_m }}</span></span>
            @endforeach
            </p>
            </div>
            </div>
            
            @endforeach

            @foreach ($comentario as $com)
     
      <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-heading"><h4><span class="label label-danger">{{ $com->CODO_usuario }}</span></h4></div>
        <div class="panel-body">
          <p>{{ $com->CODO_comentario }}</p>
          <a id="izq" href="#" data-toggle="modal" data-target="#myModal">Cometar <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
        </div>
      </div>
      </div>

      @endforeach
          </div>
        </div>
      </div> 
    </div><!-- fin row -->
  </div>

  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo Comentario</h4>
      </div>
      <div class="modal-body">
         @foreach($documento as $do)
        {{Form::open(['route'=>['alumno.esquema.comentdocument',$do->id],'method'=>'PUT'])}}
           
            @foreach ($alumno as $as)
                {!! Form::text('nombre',$as->ALU_nombre,['class'=>'novisible','readonly']) !!}
            @endforeach
            <div class="form-group">
                
                <textarea name="comentario" class="form-control" placeholder="comentario" rows="8" required ></textarea>
            </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Cometar</button>
        {!! Form::close() !!}
        @endforeach
      </div>
    </div>
  </div>
</div>

<script  src="{{ asset('plugin/jquery/jquery-3.1.1.js') }}"></script>
<script  src="{{ asset('plugin/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>