

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
      <div class="panel panel-default">
        <div class="panel-heading">Datos personales del asesor</div>
        <div class="panel-body">
        {{Form::open(['route'=>['secretario.perfil.update',$asesores->id],'method'=>'PUT'])}}
                <div class="form-group">
                {!! Form::label('nombre','Nombre') !!}
                {!! Form::text('nombre',$asesores->SEC_nombre,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('apellidop','Apellido Paterno') !!}
                    {!! Form::text('apellidop',$asesores->SEC_apellido_p,['class'=>'form-control','required'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('apellidom','Apellido Paterno') !!}
                    {!! Form::text('apellidom',$asesores->SEC_apellido_m,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('tel','Telefono') !!}
                    {!! Form::text('tel',$asesores->SEC_tel,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('cel','Celular') !!}
                    {!! Form::text('cel',$asesores->SEC_cel,['class'=>'form-control','required'])!!}
                </div>

        </div>
        <div class="panel-footer">
                <div class="form-group">
                    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Modificar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
                </div><br>
            </div>
  
      {!! Form::close() !!}
      </div>  
      <!-- fin escuela-->
      <!-- Inicio director-->
      <div role="tabpanel" class="tab-pane" id="director">
        <div class="panel panel-default">
        <div class="panel-heading">Datos Usuario</div>
        <div class="panel-body">
          {{Form::open(['route'=>['secretario.perfil.updateusersecretario',$asesores->USU_id],'method'=>'PUT'])}}
                <div class="form-group">
                {!! Form::label('nombre','Nombreusuario') !!}
                {!! Form::text('nombre',$asesores->name,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('correo','Correo') !!}
                    {!! Form::text('correo',$asesores->email,['class'=>'form-control','required'])!!}
                </div>
                <!--
                <div class="form-group">
                        {!! Form::label('type','Tipo') !!}
                        {!! Form::select('type',[
                        ''=>'seleccione un Tipo',
                        'subdirector'=>'subdirector',
                        'secretario'=>'secretario',
                        'presidente'=>'presidente',
                        'asesor'=>'asesor',],
                        $asesores->type,['class'=>'form-control']) !!}
                </div> 
                -->               
                <div class="form-group">
                    {!! Form::label('pass','Contraseña') !!}
                    {!! Form::password('pass',['class'=>'form-control','required'])!!}
                </div>
        </div>
        <div class="panel-footer">
                <div class="form-group">
                    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Modificar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
                </div>
            </div><br>
        </div>
        {!! Form::close() !!}
      </div>
      <!-- fin director-->

      <!-- inicio direcciones -->
      <div role="tabpanel" class="tab-pane" id="direccion">
        <div class="panel panel-default">
        <div class="panel-heading">Dirección Asesor</div>
        <div class="panel-body">
        {{Form::open(['route'=>['secretario.perfil.updatedireccion',$asesores->DIR_id],'method'=>'PUT'])}}
                <div class="form-group">
                {!! Form::label('calle','Calle') !!}
                {!! Form::text('calle',$asesores->DIR_calle,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('numero','numero') !!}
                    {!! Form::number('numero',$asesores->DIR_numero,['class'=>'form-control','required'])!!}
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
                        ,$asesores->DIR_estado,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('ciudad','Ciudad') !!}
                    {!! Form::text('ciudad',$asesores->DIR_ciudad,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('colonia','Colonia') !!}
                    {!! Form::text('colonia',$asesores->DIR_colonia,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('cp','Codigo postal') !!}
                    {!! Form::number('cp',$asesores->DIR_cp,['class'=>'form-control','required'])!!}
                </div>
        </div>
        <div class="panel-footer">
                <div class="form-group">
                    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Modificar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
                </div>
            </div><br>
        </div>
        {!! Form::close() !!}
      </div>
      <!-- fin direcciones -->
  </div>
 
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
