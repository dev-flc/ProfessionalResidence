

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>editar inf</title>
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
                <li><a href="{{ route('alumno.esquema.index') }}"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Anteproyecto</a>
                </li>
                @foreach($alumno as $al)
                @if($al->ALU_semestre==8)
                <li><a href="{{ route('alumno.ensayo.index') }}"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Enquema</a>
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
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                      Semestre:
                    </td>
                    <td>{{ $alumnos->ALU_semestre }}</td>
                  </tr>
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
          <div class="panel-heading">Datos personales</div>
          <div class="panel-body">
            @foreach ($alumno as $alum)
            {{Form::open(['route'=>['alumno.perfil.update',$alum->id],'method'=>'PUT','files'=>'true'])}}
              <div class="form-group">
                {!! Form::label('nombre','Nombre') !!}
                {!! Form::text('nombre',$alum->ALU_nombre,['class'=>'form-control','required'])!!}
              </div>

              <div class="form-group">
                {!! Form::label('apellidop','Apellido paterno') !!}
                {!! Form::text('apellidop',$alum->ALU_apellido_p,['class'=>'form-control','required'])!!}
              </div>

              <div class="form-group">
                {!! Form::label('apellidom','Apellido materno') !!}
                {!! Form::text('apellidom',$alum->ALU_apellido_m,['class'=>'form-control','placeholder'=>'Requiere apellido materno','required'])!!}
              </div>

              <div class="form-group">
                {!! Form::label('sexo','Sexo') !!}<br>
                {{ Form::radio('sex', 'hombre',true) }} Hombre  {{ Form::radio('sex', 'mujer') }} Mujer
              </div>

              <div class="form-group">
                {!! Form::label('telefono','Telefono') !!}
                {!! Form::number('telefono',$alum->ALU_tel,['class'=>'form-control','placeholder'=>'Requiere telefono','required'])!!}
              </div>

              <div class="form-group">
                {!! Form::label('celular','Celular') !!}
                {!! Form::number('celular',$alum->ALU_cel,['class'=>'form-control','placeholder'=>'Requiere telefono','required'])!!}
              </div>
              
              <div class="form-group">
                {!! Form::label('periodo','Periodo') !!}<br>
                {{ Form::radio('periodo', 'Agosto-Diciembre',true) }} Agosto-Diciembre  {{ Form::radio('periodo', 'Enero-Agosto') }} Enero-Agosto
              </div>

              <div class="form-group">
                {!! Form::label('matricula','matricula') !!}
                {!! Form::number('matricula',$alum->ALU_matricula,['class'=>'form-control','placeholder'=>'Requiere telefono','required'])!!} 
              </div>
                <div class="form-group">
                {!! Form::label('semestre','semestre') !!}
                {!! Form::select('semestre',['7'=>'7','8'=>'8'],null,['class'=>'form-control']) !!}
              </div>
            </div>  
            <div class="panel-footer foo">
              <div class="form-group">
                {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Guardar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
              </div><br>
            </div>

            {!! Form::close() !!}
            @endforeach
            </div>
          </div>
          <div class="col-sm-3"></div>
          <div class="col-sm-9">
            <div class="panel panel-default">
          <div class="panel-heading">Direccion</div>
          <div class="panel-body">
            <div class="row">
            <div class="container-fluid">
              @foreach ($direccion as $dir)
                 {{Form::open(['route'=>['alumno.update.updatedirecc',$dir->id],'method'=>'PUT'])}}
                            <div class="form-group">
                                {!! Form::label('calle','Calle') !!}
                                {!! Form::text('calle',$dir->DIR_calle,['class'=>'form-control','required'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('numero','numero') !!}
                                {!! Form::number('numero',$dir->DIR_numero,['class'=>'form-control','required'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('estado','Estado') !!}
                                {!! Form::select('estado',[
                                ''=>'seleccione una estado',
                                'Aguascalientes'=>'Aguascalientes',
                                'Baja California'=>'Baja California',
                                'Baja California Sur'=>'Baja California Sur',
                                'Campeche'=>'Campeche',
                                'Chiapas'=>'Chiapas',
                                'Chihuahua'=>'Chihuahua',
                                'Coahuila'=>'Coahuila',
                                'Colima'=>'Colima',
                                'Distrito Federal'=>'Distrito Federal',
                                'Durango'=>'Durango',
                                'Estado de México'=>'Estado de México',
                                'Guanajuato'=>'Guanajuato',
                                'Guerrero'=>'Guerrero',
                                'Hidalgo'=>'Hidalgo',
                                'Jalisco'=>'Jalisco',
                                'Michoacán'=>'Michoacán',
                                'Morelos'=>'Morelos',
                                'Nayarit'=>'Nayarit',
                                'Nuevo Leon'=>'Nuevo Leon',
                                'Oaxaca'=>'Oaxaca',
                                'Puebla'=>'Puebla',
                                'Queretaro'=>'Queretaro',
                                'Quintana Roo'=>'Quintana Roo',
                                'San Luis Potosi'=>'San Luis Potosi',
                                'Sinaloa'=>'Sinaloa',
                                'Sonora'=>'Sonora',
                                'Tabasco'=>'Tabasco',
                                'Tamaulipas'=>'Tamaulipas',
                                'Tlaxcala'=>'Tlaxcala',
                                'Veracruz'=>'Veracruz',
                                'Yucatán'=>'Yucatán',
                                'Zacatecas'=>'Zacatecas',]
                                ,$dir->DIR_estado,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('ciudad','Ciudad') !!}
                                {!! Form::text('ciudad',$dir->DIR_ciudad,['class'=>'form-control','required'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('colonia','Colonia') !!}
                                {!! Form::text('colonia',$dir->DIR_colonia,['class'=>'form-control','required'])!!}
                            </div>
                             <div class="form-group">
                                {!! Form::label('cp','Codigo postal') !!}
                                {!! Form::number('cp',$dir->DIR_cp,['class'=>'form-control','required'])!!}
                            </div>
                        </div>  
                    
                        <div class="panel-footer">
                            <div class="form-group">
                                {{ Form::button('<span class="glyphicon glyphicon-remove"></span> Guardar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
                            </div>
                            {!! Form::close() !!}
                        </div>

              @endforeach
            </div>
            </div>

          </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">Tutor</div>
                        <div class="panel-body">
                            @foreach ($tutor as $tu)
                              {{Form::open(['route'=>['alumno.update.updatetutor',$tu->id],'method'=>'PUT','files'=>'true'])}}

                                <div class="form-group">
                                  {!! Form::label('nombre','Nombre') !!}
                                  {!! Form::text('nombre',$tu->TUT_nombre,['class'=>'form-control','required'])!!}
                                </div>

                                <div class="form-group">
                                  {!! Form::label('nombre','Apellido paterno') !!}
                                  {!! Form::text('ap',$tu->TUT_apellido_p,['class'=>'form-control','required'])!!}
                                </div>

                                <div class="form-group">
                                  {!! Form::label('nombre','Apellido materno') !!}
                                  {!! Form::text('am',$tu->TUT_apellido_m,['class'=>'form-control','required'])!!}
                                </div>

                                <div class="form-group">
                                  {!! Form::label('nombre','Correo') !!}
                                  {!! Form::email('email',$tu->TUT_correo,['class'=>'form-control','required'])!!}
                                </div>

                                <div class="form-group">
                                  {!! Form::label('nombre','Telefono') !!}
                                  {!! Form::text('tel',$tu->TUT_tel,['class'=>'form-control','required'])!!}
                                </div>

                                <div class="form-group">
                                  {!! Form::label('nombre','celular') !!}
                                  {!! Form::text('cel',$tu->TUT_cel,['class'=>'form-control','required'])!!}
                                </div>
          
                          <div class="panel-footer">
                            <div class="form-group">
                                {{ Form::button('<span class="glyphicon glyphicon-remove"></span> Guardar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
                            </div>
                            {!! Form::close() !!}
                        </div>

              @endforeach

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

</body>
</html>
