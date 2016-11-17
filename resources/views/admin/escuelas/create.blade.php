@extends('admin.templates.main')

@section('title', 'Escuelas')

@section('content')
<div class="panel panel-primary">
<div class="panel-heading">Nuevo Registro</div>
<div class="panel-body">
<ul class="nav nav-tabs" role="tablist">
 	<li role="presentation" class="active"><a href="#escuela" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Escuela</a></li>
  	<li role="presentation"><a href="#director" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Director</a></li>
  	<li role="presentation"><a href="#direccion" role="tab" data-toggle="tab"> <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Dirección</a></li>
</ul>
<br>
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="escuela">
<div class="panel panel-default">
  	<div class="panel-heading">Datos de la Escuela</div>
  	<div class="panel-body">
   		{!! Form::open(['route'=>'admin.escuelas.store','method'=>'POST']) !!}
		<div class="form-group">
		{!! Form::label('name','Nombre') !!}
		{!! Form::text('name',null,['class'=>'form-control','required']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('clave','Clave') !!}
		{!! Form::number('clave',null,['class'=>'form-control','required']) !!}
		</div>
  	</div>
</div>
</div>
<div role="tabpanel" class="tab-pane" id="director">
<div class="panel panel-default">
  	<div class="panel-heading">Datos Director</div>
  	<div class="panel-body">
		<div class="form-group">
		{!! Form::label('nombred','Nombre') !!}
		{!! Form::text('nombred',null,['class'=>'form-control','required']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('apellidop','Apellido Paterno') !!}
		{!! Form::text('apellidop',null,['class'=>'form-control','required']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('apellidom','Apellido Materno') !!}
		{!! Form::text('apellidom',null,['class'=>'form-control','required']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('correo','Correo') !!}
		{!! Form::text('correo',null,['class'=>'form-control','required']) !!}
		</div>
  	</div>
</div>
</div>
<div role="tabpanel" class="tab-pane" id="direccion">
<div class="panel panel-default">
  	<div class="panel-heading">Datos Dirección</div>
  	<div class="panel-body">
		<div class="form-group">
		{!! Form::label('calle','Calle') !!}
		{!! Form::text('calle',null,['class'=>'form-control','required']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('numero','Numero') !!}
		{!! Form::number('numero',null,['class'=>'form-control','required']) !!}
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
		{!! Form::text('ciudad',null,['class'=>'form-control','required']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('colonia','Colonia') !!}
		{!! Form::text('colonia',null,['class'=>'form-control','required']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('cp','Codigo Postal') !!}
		{!! Form::text('cp',null,['class'=>'form-control','required']) !!}
		</div>
		
		<div class="form-group">
		{{ Form::button('<span class="glyphicon glyphicon-ok"></span> Registrar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
		</div>
		{!! Form::close() !!}
		<br>
  	</div>
 </div>
</div>
</div>
</div>
</div>



@endsection