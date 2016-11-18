@extends('admin.templates.main')

@section('title', 'Alumnos')

@section('content')
<!-- Nav tabs -->
<div class="panel panel-primary">
  <div class="panel-heading">Nuevo registro</div>
  <div class="panel-body">
	<ul class="nav nav-tabs" role="tablist">
 		<li role="presentation" class="active"><a href="#escuela" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Alumno</a></li>
  		<li role="presentation"><a href="#director" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Usuario</a></li>
  		<li role="presentation"><a href="#direccion" role="tab" data-toggle="tab"> <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Dirección</a></li>
      <li role="presentation"><a href="#final" role="tab" data-toggle="tab"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Escuela</a></li>
	</ul><br>
	<div class="tab-content">
		<!-- inicio escuela -->
		<style type="text/css">
			strong{
				color: red;
			}
		</style>
  		<div role="tabpanel" class="tab-pane active" id="escuela">
  			<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Informacion personal</h3>
						  </div>
						  <div class="panel-body">
						{!! Form::open(['route'=>'admin.alumnos.store','method'=>'POST']) !!}
							<div class="form-group">
								{!! Form::label('nombre','Nombre ') !!}<strong> *</strong>
								{!! Form::text('nombre',null,['class'=>'form-control','required'])!!}
							</div>

							<div class="form-group">
								{!! Form::label('apellidop','Apellido paterno ') !!}<strong> *</strong>
								{!! Form::text('apellidop',null,['class'=>'form-control','required'])!!}
							</div>

							<div class="form-group">
								{!! Form::label('apellidom','Apellido materno ') !!}<strong> *</strong>
								{!! Form::text('apellidom',null,['class'=>'form-control','placeholder'=>'Requiere apellido materno','required'])!!}
							</div>

							<div class="form-group">
								{!! Form::label('sexo','Sexo ') !!}<strong> *</strong><br>
								{{ Form::radio('sex', 'hombre', true) }} Hombre  {{ Form::radio('sex', 'mujer') }} Mujer
							</div>

							<div class="form-group">
								{!! Form::label('telefono','Telefono') !!}
								{!! Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Requiere telefono'])!!}
							</div>

							<div class="form-group">
								{!! Form::label('celular','Celular') !!}
								{!! Form::number('celular',null,['class'=>'form-control','placeholder'=>'Requiere telefono'])!!}
							</div>

							<div class="form-group">
								{!! Form::label('matricula','Matricula ') !!}<strong> *</strong>
								{!! Form::number('matricula',null,['class'=>'form-control','placeholder'=>'Requiere telefono','required'])!!}
							</div>
                            
                            <div class="form-group">
                                {!! Form::label('semestre','Semestre ') !!}<strong> *</strong>
      							{!! Form::select('semestre',[''=>'Seleccione un semestre','7'=>'7','8'=>'8'],null,['class'=>'form-control']) !!}
                            </div>
                            <div class="panel-footer">
                				<div class="form-group">
                     				<a href="#director" class="btn btn-primary pull-right" role="tab" data-toggle="tab">
                     				Siguiente
                     				<span class="glyphicon glyphicon-chevron-right"></span>
                     				</a>
                				</div><br>
            				</div>
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
                {!! Form::label('nombreuser','Nombre de usuario ') !!}<strong> *</strong>
                {!! Form::text('nombreuser',null,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('correo','Correo ') !!}<strong> *</strong>
                    {!! Form::email('correo',null,['class'=>'form-control','required'])!!}
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
                    {!! Form::label('pass','Contraseña') !!}<strong> *</strong>
                    {!! Form::password('pass',['class'=>'form-control','required'])!!}
                </div>
  			</div>
  			<div class="panel-footer">
                				<div class="form-group">
                     				<a href="#direccion" class="btn btn-primary pull-right" role="tab" data-toggle="tab">
                     				Siguiente
                     				<span class="glyphicon glyphicon-chevron-right"></span>
                     				</a>
                				</div><br>
            				</div>
  			</div>
  			
  		</div>
  		
  		<div role="tabpanel" class="tab-pane" id="direccion">
  			<div class="panel panel-default">
  			<div class="panel-heading">Dirección Asesor</div>
  			<div class="panel-body">
				
                <div class="form-group">
                {!! Form::label('calle','Calle') !!}
                {!! Form::text('calle',null,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('numero','numero') !!}
                    {!! Form::number('numero',null,['class'=>'form-control','required'])!!}
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
                    {!! Form::text('ciudad',null,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('colonia','Colonia') !!}
                    {!! Form::text('colonia',null,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('cp','Codigo postal') !!}
                    {!! Form::number('cp',null,['class'=>'form-control','required'])!!}
                </div>
  			</div>
  			<div class="panel-footer">
                
            </div>
  			</div>
  			
  		</div>
  		<!-- fin direcciones -->

      <div role="tabpanel" class="tab-pane" id="final">
        <div class="panel panel-default">
        <div class="panel-heading">Datos Usuario</div>
        <div class="panel-body">
          <div class="form-group">
            {!! Form::label('type','Escuela') !!}<br />
            <select class="form-control" name="escuelaid">
              <option value="">Seleccione una escuela</option>
              @foreach($escuela as $escuelas)
                <option value="{{ $escuelas->id }}">{{ $escuelas->ESC_nombre }}</option>
              @endforeach
            </select>             
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
	</div>

 </div>
</div>


@endsection