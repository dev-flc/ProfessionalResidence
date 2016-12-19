@extends('admin.templates.main')

@section('title', 'Detalle esquema')
@section('titulo', 'Detalle esquema')

@section('content')

<div class="panel panel-menu">
<style type="text/css">
    td
    {
        width: 50%;
        font-size: 20px;
    }
    label{
        font-size: 25px;
    }
</style>
    <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-6 col-xs-6">
                        <h3 class="panel-title titlealumno">@yield('titulo')</h3>
                        <br>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                    @yield('buttonlink')
                    </div>
                </div>          
            </div>
            <div class="panel-body">
            
            <label>Esquema</label>
            <table class="table table-hover">
                <tr>
                    <td>Nombre</td>
                    <td>{{ $esquema->ESQ_nombre }}</td>
                </tr>
                <tr>
                    <td>Descripcion</td>
                    <td>{{ $esquema->ESQ_descripcion }}</td>
                </tr>
            </table>
            <label>Alumno</label>
            @foreach ($alumno as $alum)
            <table class="table table-hover">
                <tr>
                    <td>Nombre</td>
                    <td>{{ $alum->ALU_nombre }}</td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td>{{ $alum->ALU_apellido_p }} {{ $alum->ALU_apellido_m }}</td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td>{{ $alum->ALU_tel }}</td>
                </tr>
                <tr>
                    <td>Celular</td>
                    <td>{{ $alum->ALU_cel }}</td>
                </tr>
                <tr>
                    <td>Matricula</td>
                    <td>{{ $alum->ALU_matricula }}</td>
                </tr>
                <tr>
                    <td>Periodo</td>
                    <td>{{ $alum->ALU_periodo }}</td>
                </tr>
                
            </table>
            <label>Escuela</label>
            <table class="table">
                <tr>
                    <td>Nombre</td>
                    <td>{{ $alum->ESC_nombre }}</td>
                </tr>
                <tr>
                    <td>Clave</td>
                    <td>{{ $alum->ESC_clave }}</td>
                </tr>
            </table>
            @endforeach
            </div>
</div>
@endsection