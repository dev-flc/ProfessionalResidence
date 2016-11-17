 @extends('admin.templates.main')

@section('title', 'alumno')

@section('titulo', 'Alumno'.' '. $alum-> ALU_nombre)
@section('buttonlink')

@endsection
@section('content')
<style type="text/css">
	.wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 10px auto;
        margin-bottom: 0;
        width: 70%;
        border-bottom-color: #; /* linea de abajo*/
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {/* linea enmedio */
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 55%;
    margin: 0 auto;
    left: 10px;
    right: 110px;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {/* butones */
    width: 50px;
    height: 50px;
    line-height: 50px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0%;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab { /*  circulo activado */
    background: #fff;
    border: 2px solid #5bc0de;
    
}
.wizard li.active span.round-tab i{/*  color icono activado */
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 20%;
    /* mas botones */
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 60%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de; /* tringulo seleccion circle */
}

.wizard .nav-tabs > li a {
    width: 50px;
    height: 50px;
    margin: 20px auto;
    border-radius: 100%;
     /* sombra de fondo */
    padding: 0;
    left: 30px;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 10px;
}

.wizard h3 {
    margin-top: 0;
}
.panel-footer{
	height: 50px;
}

h3{
	color: #777;
}

@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 25px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 0px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 80%;
    }
}


</style>

<div class="container-fluid">
	<div class="row">
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                           
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-home"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" >
                        <a href="#otro" data-toggle="tab" aria-controls="otro" role="tab" title="otro">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon glyphicon-map-marker"></i>
                            </span>
                        </a>
                    </li>

                    
                </ul>
            </div>

            <div >
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Informacion personal</h3>
						  </div>
						  <div class="panel-body">
						{{Form::open(['route'=>['admin.alumnos.update',$alum->id],'method'=>'PUT'])}}
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
								{{ Form::radio('sex', 'hombre', true) }} Hombre  {{ Form::radio('sex', 'mujer') }} Mujer
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
							</div>
						</div>
						</div>
						{!! Form::close() !!}
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">estatus</h3>
						  </div>
						  <div class="panel-body">
						{{Form::open(['route'=>['admin.alumnos.updateestatus',$alum->EST_id],'method'=>'PUT'])}}
							<div class="form-group">
							<h3>Estatus | {{$alum->EST_estatus}}</h3><br><br>
								{!! Form::label('estatus','Cambiar estatus') !!}
								{!! Form::select('estatus',['aceptado'=>'aceptado','denegado'=>'denegado'],$alum->EST_estatus,['class'=>'form-control']) !!}
							</div>
						</div>	
						<style type="text/css">
							
						</style>
						<div class="panel-footer">
							<div class="form-group">
								{{ Form::button('<span class="glyphicon glyphicon-ok"></span> Guardar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
							</div>
						</div>
						</div>
						{!! Form::close() !!}
                    </div>




                    <div class="tab-pane" role="tabpanel" id="step3">
                        <div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Datos Escuela</h3>
						  </div>
						  <div class="panel-body">
						{{Form::open(['route'=>['admin.alumnos.updateescuelas',$alum->ESC_id],'method'=>'PUT'])}}
							<div class="form-group">
								{!! Form::label('nombre','Nombre') !!}
								{!! Form::text('nombre',$alum->ESC_nombre,['class'=>'form-control','placeholder'=>'Requiere nombre de escuela','required'])!!}
							</div>
							<div class="form-group">
								{!! Form::label('clave','clave') !!}
								{!! Form::number('clave',$alum->ESC_clave,['class'=>'form-control','placeholder'=>'Requiere clave','required'])!!}
							</div>
						</div>	
						<style type="text/css">
							
						</style>
						<div class="panel-footer">
							<div class="form-group">
								{{ Form::button('<span class="glyphicon glyphicon-remove"></span> Guardar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
							</div>
						</div>
						</div>
						{!! Form::close() !!}
                    </div>




<!-- Direccion  Inicio-->
                    <div class="tab-pane" role="tabpanel" id="otro">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title">Direccion</h3>
                          </div>
                          <div class="panel-body">
                        {{Form::open(['route'=>['admin.alumnos.updatedirecciones',$alum->id],'method'=>'PUT'])}}
                            <div class="form-group">
                                {!! Form::label('calle','Calle') !!}
                                {!! Form::text('calle',$alum->DIR_calle,['class'=>'form-control','required'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('numero','numero') !!}
                                {!! Form::number('numero',$alum->DIR_numero,['class'=>'form-control','required'])!!}
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
                                ,$alum->DIR_estado,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('ciudad','Ciudad') !!}
                                {!! Form::text('ciudad',$alum->DIR_ciudad,['class'=>'form-control','required'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('colonia','Colonia') !!}
                                {!! Form::text('colonia',$alum->DIR_colonia,['class'=>'form-control','required'])!!}
                            </div>
                             <div class="form-group">
                                {!! Form::label('cp','Codigo postal') !!}
                                {!! Form::number('cp',$alum->DIR_cp,['class'=>'form-control','required'])!!}
                            </div>
                        </div>  
                        <style type="text/css">
                            
                        </style>
                        <div class="panel-footer">
                            <div class="form-group">
                                {{ Form::button('<span class="glyphicon glyphicon-remove"></span> Guardar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
                            </div>
                        </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
<!-- Direccion Final-->
<!-- Asesores inicio-->

                    <div class="tab-pane" role="tabpanel" id="complete">
                        <!-- Direccion  Inicio-->
                    <div class="tab-pane" role="tabpanel" id="otro">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title">Asesores</h3>
                          </div>
                          <div class="panel-body">
                        {{Form::open(['route'=>['admin.alumnos.updateestatus',$alum->id],'method'=>'PUT'])}}
                            <div class="form-group">
                                {!! Form::label('calle','Asesor principal') !!}
                                {!! Form::text('calle',$alum->DIR_calle,['class'=>'form-control','required'])!!}
                            </div>


                        

                        </div>  
                     
                        <div class="panel-footer">
                            <div class="form-group">
                                {{ Form::button('<span class="glyphicon glyphicon-remove"></span> Guardar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
                            </div>
                        </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
<!-- Asesores Final-->
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
   </div>
</div>
@endsection