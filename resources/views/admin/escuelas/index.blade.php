@extends('admin.templates.main')

@section('title', 'Lista de escuelas')

@section('titulo', 'Lista de Escuelas')
@section('buttonlink')

<a href="{{ route('admin.escuelas.create') }}" class="btn btn-default nuevoalumno">
    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nueva Escuela
</a>

<!-- Buscador inicio -->
{!! Form::open(['route'=>'admin.escuelas.index', 'method'=>'GET','class'=>'navbar-form pull-center']) !!}
<div class="input-group">
    {!! Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'buscar','aria-describedby'=>'search']) !!}
    <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button></button>
    </span>
</div>
{!! Form::close() !!}
<!--  Buscador final-->
@endsection
@section('content')

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
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th><center>Nombre</center></th>
            <th><center>Clave</center></th>
            <th><center>Director</center></th>
            <th><center>Apellidos</center></th>
            <th><center>Opciones</center></th>
        </tr>
        </thead>
        <tbody>
         	@foreach($escuelas as $escuela)
			<tr>
                <td><center>{{ $escuela->ESC_nombre }}</center></td>
                <td><center>{{ $escuela->ESC_clave }}</center></td>
                <td><center>{{ $escuela->DI_nombre }}</center></td>
				<td><center>{{ $escuela->DI_apellido_p }}  {{ $escuela->DI_apellido_m }}</center></td>
				
				
				<td><center>
				<a href="{{ route('admin.escuelas.destroy', $escuela->id) }}" onclick="return confirm('¿esta seguro que quiere eliminar este usuario..?')" class="btn btn-danger">Eliminar</a>  

				<a href="{{ route('admin.escuelas.edit', $escuela->id) }}" class="btn btn-primary">Editar</a>
				</center></td>
			</tr>
		@endforeach
        </tbody>
        </table>
</div>
<center>	
{!! $escuelas->render() !!}
</center>

</div>
        </div>
@endsection