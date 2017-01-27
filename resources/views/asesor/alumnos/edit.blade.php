@extends('asesor.templates.main')

@section('title', 'Alumnos')

@section('submenu')
<style type="text/css">
    #imglist{
        width: 40px;
        height: 40px;
        border-radius: 50%
    }
    #imgperfil{
        border-radius: 50%;
        width: 200px;
        height: 200px;

        -webkit-box-shadow: 0px 0px 0px 5px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 0px 5px rgba(0,0,0,0.75);
box-shadow: 0px 0px 0px 5px rgba(0,0,0,0.75);

    }
    .caption{
        background: rgb(229, 231, 233);
        border-radius: 10px;
    }
    #link{
        text-decoration: none;
    }
    #shower{
        text-decoration: none;
        position: relative;
        left: 70%;
    }
</style>
    @foreach($userr as $usee)
    <div class="thumbnail">
    <br>
      <img id="imgperfil" src="/files/documentos/{{ $usee->foto }} " alt="...">
      <a id="shower" href="#"><span class="label label-primary">Editar <span class="glyphicon glyphicon-camera" aria-hidden="true"></span></span></a>
        <br><br>
         <!-- Formulario de imagen -->
              <div class="cla" style="display:none;">
                 {{Form::open(['route'=>['alumno.update.updatefotoasesor',$usee->id],'method'=>'PUT','files'=>'true'])}}
                <div class="form-group">
                  {!! Form::file('file',['class'=>'form-control','onchange'=>'previewFile()','required']) !!}
                </div> 
                <center>
                  <button  id="hider" class="btn btn-danger bb" type="button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  <button class="btn btn-success bb" type="submit"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                </center>
                {!! Form::close() !!}
              </div>
              <!-- Fin formulario de imagen -->      
      @endforeach





      @foreach ($asesor as $asee)
      <div class="caption">
        <center>
        <h3>{{ $asee->ASE_nombre }}</h3>
        <p>{{ $asee->ASE_apellido_p }} {{ $asee->ASE_apellido_m }}</p>
        
        <table class="table table-hover">
            <tr>
                <td><strong>Telefono:</strong></td>
                <td> {{ $asee->ASE_tel}} </td>
            </tr>
            <tr>
                <td><strong>Celular:</strong></td>
                <td> {{ $asee->ASE_tel}} </td>
            </tr>
            <tr>
                <td><strong>Correo</strong></td>
                <td> {{$usee->email}} </td>
            </tr>
            <tr>
                <td><strong>Tipo</strong></td>
                <td> {{$usee->type}} </td>
            </tr>
        </table>

        <p><a id="link" href="{{ route('asesor.alumnos.edit', $asee->id) }}"><span class="label label-primary">Editar <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span></a></p>
        </center>
      </div>
    </div>
    @endforeach

@endsection

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Datos Direccion</div>
  <div class="panel-body">
  @foreach ($direccion as $dir)
    {{Form::open(['route'=>['asesor.escuelas.updatedir',$dir->id],'method'=>'PUT'])}}
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
                            <div class="panel-footer">
                            <div class="form-group">
                                {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Modificar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
                                {!! Form::close() !!}
                                    <br>
                                @endforeach
                            </div>
                        </div>
  </div>
  
</div>

<div class="panel panel-default">
  <div class="panel-heading">Datos personaledss</div>
  <div class="panel-body">
    @foreach($asesor as $asee )
    {{Form::open(['route'=>['asesor.user.updateuserr',$asee->id],'method'=>'PUT'])}}
       <div class="form-group">
            {!! Form::label('nombre','Nombre') !!}
            {!! Form::text('nombre',$asee->ASE_nombre,['class'=>'form-control','required'])!!}
        </div> 
        <div class="form-group">
            {!! Form::label('apellidop','Apellido Paterno') !!}
            {!! Form::text('apellidop',$asee->ASE_apellido_p,['class'=>'form-control','required'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('apellidom','Apellido Materno') !!}
            {!! Form::text('apellidom',$asee->ASE_apellido_m,['class'=>'form-control','required'])!!}
        </div> 

        <div class="form-group">
            {!! Form::label('tel','Telefono') !!}
            {!! Form::number('tel',$asee->ASE_tel,['class'=>'form-control','required'])!!}
        </div> 
        <div class="form-group">
            {!! Form::label('cel','Celular') !!}
            {!! Form::number('cel',$asee->ASE_cel,['class'=>'form-control','required'])!!}
        </div> 
   
        </div>
            <div class="panel-footer">
                <div class="form-group">
                    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Modificar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
                    {!! Form::close() !!}
                    @endforeach
                    <br>
                </div>
            </div>
</div>
@endsection

