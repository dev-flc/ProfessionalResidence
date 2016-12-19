@extends('admin.templates.main')

@section('title', 'Lista de alumnos')

@section('titulo', 'Lista de alumnos')

@section('buttonlink')

@endsection
@section('content')
<style type="text/css">
	#imgperfil
	{
		width: 200px;
		height: 220px;
	}
</style>
<div class="panel panel-default">
  <div class="panel-heading">Asignar asesor </div>
  <div class="panel-body">
    <div class="row">
    	<div class="col-sm-4">

<div class="thumbnail">
        @foreach ($usuario as $usu)
          <br>
          <img id="imgperfil" src="/files/documentos/{{ $usu->foto }} " alt="...">
        @endforeach
          <div class="caption">
             @foreach ($alumno as $alumnos)
                <center>
                <h3>
                  {{ $alumnos->ALU_nombre }}
                </h3>
                <p>{{ $alumnos->ALU_apellido_p }} {{ $alumnos->ALU_apellido_m }}</p>
                <table class="table">
                  <tr>
                    <td>
                      <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> 
                      Matricula:
                    </td>
                    <td>{{ $alumnos->ALU_matricula }}</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="glyphicon glyphicon-time" aria-hidden="true"></span> 
                      Periodo:
                    </td>
                    <td>{{ $alumnos->ALU_periodo }}</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 
                      Telefono:
                    </td>
                    <td>{{ $alumnos->ALU_tel }}</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                      Celular:
                    </td>
                    <td>{{ $alumnos->ALU_cel }}</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                      Semestre:
                    </td>
                    <td>{{ $alumnos->ALU_semestre }}</td>
                  </tr>
                </table>
                @endforeach
        </div>
        </div>
		    </div>
        <div class="col-sm-8"><br><br><br><br><br>
        <div class="panel panel-default">
  <div class="panel-heading">Lista de asesores</div>
  <div class="panel-body">
    @foreach ($alumno as $alu)
         {{Form::open(['route'=>['admin.alumnos.updateasesorr',$alu->id],'method'=>'PUT'])}}
            <div class="form-group">       
            <select  name="asesor" class="form-control" required>
                <option value="">Seleccione un asesor</option>
                @foreach($asesores as $use)
    
               
    
                @if($use->ASE_nombre=="pendiente")
    
                @else
                <option value="{{ $use->id}}">{{ $use->ASE_nombre}}  </option>
                @endif
    
                @endforeach     
        <style type="text/css">
          #asignar
          { 
width: 100%;
          }
        </style>
            </select> </div><div class="form-group"> <br>
            <button type="submit"  class="btn btn-success form-control">Asignar <span class="glyphicon glyphicon-ok"></span>
            </button>
              {!! Form::close() !!}
            @endforeach  
       
      </div>
  </div>
</div>
       
    	</div>
    </div>
  </div>
</div>

@endsection