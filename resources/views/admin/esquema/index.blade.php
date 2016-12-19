@extends('admin.templates.main')

@section('title', 'Esquemas')
@section('titulo', 'Esquemas')
@section('buttonlink')


<!-- Buscador inicio -->
{!! Form::open(['route'=>'admin.esquema.index', 'method'=>'GET','class'=>'navbar-form pull-center']) !!}
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
            <th><center>#</center></th>
            <th><center>Nombre</center></th>
            <th><center>Descripcion</center></th>
            <th><center>Ver</center></th>
        </tr>
        </thead>
        <tbody>
            @foreach($esquema as $asesores)
            <tr>
                <td><center>{{ $asesores->id }}</center></td>
                <td><center>{{ $asesores->ESQ_nombre }}</center></td>
                <td><center>{{ $asesores->ESQ_descripcion }}</center></td>           
                <td><center>
                <a href="{{ route('admin.esquema.veresquema', $asesores->id) }}" class="btn btn-primary">Ver...</a>
                </center></td>
            </tr>
        @endforeach
        </tbody>
        </table>
</div>
<center>    
{!! $esquema->render() !!}
</center>

</div>
        </div>
@endsection