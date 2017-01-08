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
                  <div class="panel-heading">Nuevo Registro</div>
                  <div class="panel-body">
                    {{Form::open(['route'=>['admin.plan.update',$doc->id],'method'=>'PUT'])}}

                    <div class="form-group">
                        {!! Form::label('nombre','Nombre') !!}<strong> *</strong>
                        {!! Form::text('nombre',$doc->DOCS_nombre,['class'=>'form-control','required'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('apellidop','Fecha de entrega') !!}<strong> *</strong>
                        {!! Form::date('fecha',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="panel-footer">
                        <div class="form-group">
                    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Guardar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
                                        {!! Form::close() !!}

                    </div>
                    </div>
                    </div>
                  </div>
                </div>
            </div>
            
        </div>


        </div>
@endsection