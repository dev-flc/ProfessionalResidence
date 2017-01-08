@extends('admin.templates.main')

@section('title', 'Plan de trabajo')

@section('titulo', 'Plan de trabajo')

@section('content')
<style type="text/css">
    #li
    {
        color: #FFF;
        text-decoration: none;
    }
</style>
<div class="panel panel-menu">
    <div class="panel-heading">
        </div>
        <div class="panel-body">
            
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                  <div class="panel-heading"><a href="{{ route('admin.plan.create') }}" id="li">Anteproyecto <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></div>
                  <div class="panel-body">
                    <table class="table">
                    <tr>
                        <th>Nombre</th>
                        <th><center>Fecha</center></th>
                        <th><center>Opcion</th>
                       
                    </tr>
                    @foreach( $docs as $doc)
                        <tr>
                            <td>{{ $doc->DOCS_nombre }}</td>
                            <td><center><span class="label label-success">{{ $doc->DOCS_fecha }}</span></center></td>
                            <td><center>
                                <a href="{{ route('admin.plan.edit', $doc->id) }}"><span class="label label-primary">Editar</span></a>

                              <a href="{{ route('admin.plan.destroy', $doc->id) }}" onclick="return confirm('¿esta seguro que quiere eliminar esta tarea? \n \n Recuerde que se eliminara del plan de trabajo de  cada uno de los alumno  registrados')" ><span class="label label-danger">Eliminar</span></a>  
                            </td>
                        </tr>
                    @endforeach
                    </table>
                  </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-primary">
                  <div class="panel-heading"><a href="{{ route('admin.plan.createesquema') }}" id="li">Esquema <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></div>
                  <div class="panel-body">
                    <table class="table">
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th><center>Opcion</th>
                        
                    </tr>
                    @foreach( $segs as $seg)   
                        <tr>
                            <td>{{ $seg->SEGS_nombre }}</td>
                            <td><span class="label label-success">{{ $seg->SEGS_fecha }}</span></td>
                             <td><center>
                             <a href="{{ route('admin.plan.editesquema', $seg->id) }}"><span class="label label-primary">Editar</span></a>
                              <a href="{{ route('admin.plan.destroyesquema', $seg->id) }}" onclick="return confirm('¿esta seguro que quiere eliminar esta tarea? \n \n Recuerde que se eliminara del plan de trabajo de  cada uno de los alumno  registrados')"><span class="label label-danger">Eliminar</span></a>  
                            </td> 
                        </tr>
                    @endforeach
                    </table>
                  </div>
                </div>
            </div>
        </div>


        </div>
</div>
@endsection