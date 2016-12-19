@extends('admin.templates.main')

@section('title', 'Editar')



@section('content')

<!-- Nav tabs -->
<div class="panel panel-primary">
  <div class="panel-heading">Editar Información</div>
  <div class="panel-body">
	
	<div class="tab-content">
		<!-- inicio escuela -->
  		<div role="tabpanel" class="tab-pane active" id="escuela">
  			<div class="panel panel-default">
  			<div class="panel-heading">Datos personales del asesor</div>
  			<div class="panel-body">
				{{Form::open(['route'=>['admin.secretario.update',$asesores->id],'method'=>'PUT'])}}
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
  		<!-- fin escuela-->
  		<!-- Inicio director-->
  		<div role="tabpanel" class="tab-pane" id="director">
  			<div class="panel panel-default">
  			<div class="panel-heading">Datos Usuario</div>
  			<div class="panel-body">
          {{Form::open(['route'=>['admin.secretario.updateusersecretario',$asesores->USU_id],'method'=>'PUT'])}}
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
				{{Form::open(['route'=>['admin.secretario.updatedireccion',$asesores->DIR_id],'method'=>'PUT'])}}
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
</div>

@endsection