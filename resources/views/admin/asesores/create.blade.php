@extends('admin.templates.main')

@section('title', 'Escuelas')

@section('content')
<!-- Nav tabs -->
<div class="panel panel-primary">
  <div class="panel-heading">Nuevo registro</div>
  <div class="panel-body">
	<ul class="nav nav-tabs" role="tablist">
 		<li role="presentation" class="active"><a href="#escuela" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Asesor</a></li>
  		<li role="presentation"><a href="#director" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Usuario</a></li>
  		<li role="presentation"><a href="#direccion" role="tab" data-toggle="tab"> <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Dirección</a></li>
	</ul><br>
	<div class="tab-content">
		<!-- inicio escuela -->
  		<div role="tabpanel" class="tab-pane active" id="escuela">
  			<div class="panel panel-default">
  			<div class="panel-heading">Datos personales del asesor</div>
  			<div class="panel-body">
				{!! Form::open(['route'=>'admin.asesores.store','method'=>'POST']) !!}
                <div class="form-group">
                {!! Form::label('nombre','Nombre *') !!}
                {!! Form::text('nombre',null,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('apellidop','Apellido Paterno *') !!}
                    {!! Form::text('apellidop',null,['class'=>'form-control','required'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('apellidom','Apellido Paterno *') !!}
                    {!! Form::text('apellidom',null,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('tel','Telefono') !!}
                    {!! Form::text('tel',null,['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('cel','Celular') !!}
                    {!! Form::text('cel',null,['class'=>'form-control'])!!}
                </div>

  			</div>
  			<div class="panel-footer">
                
            </div>
  			</div>
  			
  		</div>
  		<!-- fin escuela-->
  		<!-- Inicio director-->
  		<div role="tabpanel" class="tab-pane" id="director">
  			<div class="panel panel-default">
  			<div class="panel-heading">Datos Usuario</div>
  			<div class="panel-body">
                <div class="form-group">
                {!! Form::label('nombreuser','Nombre de usuario *') !!}
                {!! Form::text('nombreuser',null,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('correo','Correo *') !!}
                    {!! Form::text('correo',null,['class'=>'form-control','required'])!!}
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
                        null,['class'=>'form-control']) !!}
                </div> 
                -->               
                <div class="form-group">
                    {!! Form::label('pass','Contraseña *') !!}
                    {!! Form::password('pass',['class'=>'form-control','required'])!!}
                </div>
  			</div>
  			<div class="panel-footer">
               <br> 
            </div>
  			</div>
  			
  		</div>
  		
  		<div role="tabpanel" class="tab-pane" id="direccion">
  			<div class="panel panel-default">
  			<div class="panel-heading">Dirección Asesor</div>
  			<div class="panel-body">
				
                <div class="form-group">
                {!! Form::label('calle','Calle') !!}
                {!! Form::text('calle',null,['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('numero','numero') !!}
                    {!! Form::number('numero',null,['class'=>'form-control'])!!}
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
                        ,null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('ciudad','Ciudad') !!}
                    {!! Form::text('ciudad',null,['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('colonia','Colonia') !!}
                    {!! Form::text('colonia',null,['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('cp','Codigo postal') !!}
                    {!! Form::number('cp',null,['class'=>'form-control'])!!}
                </div>
  			</div>
  			<div class="panel-footer">
                <div class="form-group">
                    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Registrar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
                </div><br>
            </div>
  			</div>
  			{!! Form::close() !!}
  		</div>
  		<!-- fin direcciones -->
	</div>

 </div>
</div>


@endsection