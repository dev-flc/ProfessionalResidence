@extends('admin.templates.main')

@section('title', 'Lista de alumnos')

@section('titulo', 'Lista de alumnos')

@section('buttonlink')

<a href="{{ route('admin.alumnos.create') }}" class="btn btn-default nuevoalumno">
    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nuevo Alumno
</a>
<!-- Buscador inicio -->
{!! Form::open(['route'=>'admin.alumnos.list', 'method'=>'GET','class'=>'navbar-form pull-center']) !!}
<div class="input-group">
    {!! Form::text('matricula',null,['class'=>'form-control', 'placeholder'=>'buscar','aria-describedby'=>'search']) !!}
    <span class="input-group-btn" >
        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button></button>
    </span>
</div><!-- /input-group -->
{!! Form::close() !!}
<!--  Buscador final-->
@endsection
@section('content')

<style type="text/css">
.caption{
    background: rgb(229, 231, 233);
    border-radius: 10px;
}
#imagenn{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    -webkit-box-shadow: -1px 0px 5px 3px rgba(229, 231, 233,0.75);
    -moz-box-shadow: -1px 0px 5px 3px rgba(229, 231, 233,0.75);
    box-shadow: -1px 0px 5px 3px rgba(229, 231, 233,0.75);
}
#linkk{
    text-decoration: none;
    cursor: pointer;
}
.label-largo{
  width: 100%;
  font-size: 20px;
}
</style>
<div class="panel panel-menu">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-6 col-xs-6">
                        <h3 class="panel-title titlealumno">@yield('titulo')</h3>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                    @yield('buttonlink')
                    </div>
                </div>          
            </div>
            <div class="panel-body">

           

<table class="table table-hover">
     <tr>
         <th><center>Nombre</center></th>
         <th><center>Apellidos</center></th>
         <th><center>Matricula</center></th>
         <th><center>Semestre</center></th>
         <th><center>Periodo</center></th>
         <th><center>Asesor</center></th>
     </tr>        
 @foreach($aaa as $user)
    
    @if($user->ALAS_tipo=="asesor")
        <tr>
        <td><center>{{ $user->ALU_nombre }}</center></td>
        <td><center>{{ $user->ALU_apellido_p }} {{ $user->ALU_apellido_m }}</center></td>
        <td><center>{{ $user->ALU_matricula }}</center></td>
        <td><center>{{ $user->ALU_semestre }}</center></td>
        <td><center>{{ $user->ALU_periodo }}</center></td>
        <td><center>
           @if($user->ASE_nombre=="pendiente")
            <a  id="linkk" href="{{ route('admin.alumnos.asignar', $user->id) }}">
            <span class="label label-danger ">
                Pendiente
                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
            </span>
            </a>
            @else
                

                <a href="{{ route('admin.alumnos.asignar', $user->id) }}">
                <span class="label label-success">Asignar
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </span>
                </a>
               
            @endif
        </td>
     </tr>

    @else
   
     @endif
@endforeach
 </table>
<center>	
{!! $aaa->render()!!}
</center>


</div>


@endsection