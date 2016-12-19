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
  <div class="panel-heading">Alumnos</div>
  <div class="panel-body">

 <?php 
 /*
    foreach($asesor as $userr)
        {
            $idd=$userr->ASE_nombre;
        }
        print $idd;
  */
  ?>
<table class="table table-hover table-condensed">
<tr>
    <th>foto</th>
    <th>nombre</th>
    <th>apellidos</th>
    <th>matricula</th>
    <th>celular</th>
    <th>opcion</th>
</tr>
    @foreach($pivot as $alumno)
    <tr>
        <td><img id="imglist" src="/files/documentos/{{ $alumno->foto }} " alt="..."></td>
        <td> {!! $alumno->ALU_nombre !!}</td>
        <td> {!! $alumno->ALU_apellido_p !!}</td>
        <td> {!! $alumno->ALU_matricula !!}</td>
        <td> 
        <span class="label label-primary"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>{!! $alumno->ALU_cel !!}</span></td>
        <td>
            <a class="" href="{{ route('asesor.alumnos.show', $alumno->ALU_id) }}">
                Ver perfil <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>
            </a>
        </td>
    </tr>
    @endforeach
   </table>

  </div>
</div>
@endsection

