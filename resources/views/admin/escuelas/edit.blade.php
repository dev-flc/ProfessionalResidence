@extends('admin.templates.main')

@section('title', 'Editar')



@section('content')

<!-- Nav tabs -->
<div class="panel panel-default">
  <div class="panel-heading">Editar Informació</div>
  <div class="panel-body">
	
	<div class="tab-content">
		<!-- inicio escuela -->
  		<div role="tabpanel" class="tab-pane active" id="escuela">
  			<div class="panel panel-default">
  			<div class="panel-heading">Dirección de la escuela</div>
  			<div class="panel-body">
				{{ Form::open(['route'=>['admin.escuelas.update',$escuelass->id],'method'=>'PUT']) }}
                <div class="form-group">
                {!! Form::label('nombre','Nombre') !!}
                {!! Form::text('nombre',$escuelass->ESC_nombre,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('clave','Clave') !!}
                    {!! Form::number('clave',$escuelass->ESC_clave,['class'=>'form-control','required'])!!}
                </div> 
               
  			</div>
  			<div class="panel-footer">
                <div class="form-group">
                    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Modificar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
                </div>
            </div><br>
  			</div>
  			{{ Form::close() }}
  		</div>
     
  		<!-- fin escuela-->

 <!-- Inicio director-->
  
        <div class="panel panel-default">
        <div class="panel-heading">Datos direcotor</div>
        <div class="panel-body">
        
          {{Form::open(['route'=>['admin.escuelas.updatedirectores',$director->id],'method'=>'PUT'])}}
        
                <div class="form-group">
                {!! Form::label('nombre','Nombre') !!}
                {!! Form::text('nombre',$director->DI_nombre,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('apellidop','Apellido Paterno') !!}
                    {!! Form::text('apellidop',$director->DI_apellido_p,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('apellidom','Apellido Materno') !!}
                    {!! Form::text('apellidom',$director->DI_apellido_m,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('correo','Correo Electronico') !!}
                    {!! Form::text('correo',$director->DI_correo,['class'=>'form-control','required'])!!}
                </div>
       
        </div>
        <div class="panel-footer">
                <div class="form-group">
                    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Modificar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
                </div>
            </div><br>
        </div>
            {{ Form::close() }}
         
   
     
      <!-- fin director-->
     
  		<!-- inicio direcciones -->
   
        <div class="panel panel-default">
        <div class="panel-heading">Dirección de la escuela</div>
        <div class="panel-body">
        {{Form::open(['route'=>['admin.escuelas.updatedirecciones',$direccion->id],'method'=>'PUT'])}}
                <div class="form-group">
                {!! Form::label('calle','Calle') !!}
                {!! Form::text('calle',$direccion->DIR_calle,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('numero','numero') !!}
                    {!! Form::number('numero',$direccion->DIR_numero,['class'=>'form-control','required'])!!}
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
                        ,$direccion->DIR_estado,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('ciudad','Ciudad') !!}
                    {!! Form::text('ciudad',$direccion->DIR_ciudad,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('colonia','Colonia') !!}
                    {!! Form::text('colonia',$direccion->DIR_colonia,['class'=>'form-control','required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('cp','Codigo postal') !!}
                    {!! Form::number('cp',$direccion->DIR_cp,['class'=>'form-control','required'])!!}
                </div>
        </div>
        <div class="panel-footer">
                <div class="form-group">
                    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Modificar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
                </div>
            </div><br>
        </div>
            {{ Form::close() }}
       
     
      <!-- fin direcciones -->
	</div>

 </div>
</div>

@endsection