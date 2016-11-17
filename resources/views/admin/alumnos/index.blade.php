@extends('admin.templates.main')

@section('title', 'Lista de alumnos')

@section('titulo', 'Lista de alumnos')

@section('buttonlink')

<a href="{{ route('admin.alumnos.create') }}" class="btn btn-default nuevoalumno">
    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nuevo Alumno
</a>
<!-- Buscador inicio -->
{!! Form::open(['route'=>'admin.alumnos.index', 'method'=>'GET','class'=>'navbar-form pull-center']) !!}
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
            <div class="row">
@foreach($aaa as $user)
    <div class="col-sm-3">
       <div class="thumbnail">
        <img id="imagenn" src="http://easymove.pl/wp-content/uploads/2016/01/empty_profile2.png" alt="...">
        
        <div class="caption">
        <center>
            
            <p> {{ $user->ALU_nombre }}</p>
            <small>Apellidos{{ $user->ALU_apellido_p }} {{ $user->ALU_apellido_m }}</small>
            <br />
            <small>matricula: {{ $user->ALU_matricula }}</small>
            
            <p>
                <a id="linkk" href="{{ route('admin.alumnos.destroy', $user->id) }}"
                onclick="return confirm('¿esta seguro que quiere eliminar este usuario..?')"
                >
                    <span class="label label-danger">Eliminar</span></a> 
                <a id="linkk" href="{{ route('admin.alumnos.edit', $user->id) }}">
                    <span class="label label-success">Editar</span>
                </a> 
                <a id="linkk" href="{{ route('admin.alumnos.show', $user->id) }}">
                    <span class="label label-primary">Ver Perfil</span>
                </a> 
            </p>
        </center>
        </div>
        </div>
    </div> 
@endforeach
</div>
<center>	
{!! $aaa->render()!!}
</center>

</div>
        </div>
@endsection