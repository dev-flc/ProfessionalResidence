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

.panel-custom-horrible-color {
    border-color: rgb(93, 173, 226);
}
.panel-custom-horrible-color > .panel-heading {
    background: rgb(93, 173, 226);
    color: #ffffff;
    border-color: rgb(93, 173, 226);
}
</style>
    @foreach($userr as $usee)
    <div class="thumbnail">
    <br>
      <img id="imgperfil" src="/files/documentos/{{ $usee->foto }} " alt="...">
      <a id="shower" href="#"><span class="label label-primary">Editar foto <span class="glyphicon glyphicon-camera" aria-hidden="true"></span></span></a>
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

        <p><a id="link" href="{{ route('asesor.alumnos.edit', $asee->id) }}"><span class="label label-primary">Editar perfil<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span></a></p>
        </center>
      </div>
    </div>
    @endforeach

@endsection

@section('content')
<div class="panel panel-custom-horrible-color">
  <div class="panel-heading">Lista de alumnos</div>
  <div class="panel-body">
 @foreach($pivot as $alumno)
 <style type="text/css">
      .img-circle{
        width: 100px;
      }
      .color-l{
       border: 2px solid rgb(26, 188, 156);
        background: rgb(26, 188, 156);
        position: relative;
        top: 0px;
        left: 15px;
        width: 130px;
        height: 106px;
        transition: .7s;

      }
  
      
    .list-group-item{
        transition: .7s;
        border: 2px solid rgb(26, 188, 156);
         padding: 0px;

      }
      .list-group:hover .color-l{
        border: 2px solid rgb(52, 152, 219);
        background: rgb(52, 152, 219);

      }
      .list-group:hover  #h{
        border: 2px solid rgb(52, 152, 219);

      }
      .position
      {
        margin: 10px;
      }
  </style>
<div class="list-group ">
  <a href="{{ route('asesor.alumnos.show', $alumno->ALU_id) }}" class="list-group-item" id="h">
    <div class="row  gg ">
        <div class="col-sm-2 color-l"><img src="/files/documentos/{{ $alumno->foto }} " class="img-circle" ></div>
        <div class="col-sm-10 position"><h3>  {!! $alumno->ALU_nombre !!} {!! $alumno->ALU_apellido_p !!} {!! $alumno->ALU_apellido_m !!}</h3> 
            <p>
            <strong>Matricula:</strong> {!! $alumno->ALU_matricula !!} | 
            <strong>Celular: </strong> {!! $alumno->ALU_cel !!} |
            <strong>Semestre: </strong> {!! $alumno->ALU_semestre !!} |
            <strong>Periodo: </strong> {!! $alumno->ALU_periodo !!} 
            </p>
        </div>
    </div>
  </a>
</div>
    @endforeach



  </div>
</div>
@endsection

