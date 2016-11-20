@extends('asesor.templates.main')

@section('title', 'Alumnos')

@section('submenu')
<style type="text/css">
	.glyphicon { margin-right:10px; }
	.panell { padding:0px; }
	.panell table tr td { padding-left: 15px }
	.panell .table {margin-bottom: 0px; }
</style>
 
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <h4 class="panel-title"> 
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <span class="glyphicon glyphicon-folder-close">
                            </span>Diario</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body panell">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://www.jquery2dotnet.com">Diario</a>
                                    </td>  
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-flash text-success"></span><a href="http://www.jquery2dotnet.com">Vitacora</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-info"></span><a href="http://www.jquery2dotnet.com">Nueva nota</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-comment text-success"></span><a href="http://www.jquery2dotnet.com">Commentarios</a>
                                        <span class="badge">42</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>

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
        <td> <img src="{!! $alumno->foto !!}"></td>
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