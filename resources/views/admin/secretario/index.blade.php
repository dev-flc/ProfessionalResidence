@extends('admin.templates.main')

@section('title', 'Datos de secretario(a)')
@section('titulo', 'Datos de secretario(a)')
@section('buttonlink')

<a href="{{ route('admin.secretario.create') }}" class="btn btn-default nuevoalumno">
    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nuevo secretario
</a>
@endsection
@section('content')
<style type="text/css">
    #imgperfil
    {
        width: 100%;
    }
    #li
    {
        width: 100%;
    }
    td
    {
        width: 50%;
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
                <div class="col-sm-3">
                    <img id="imgperfil" src="/files/documentos/{{ $foto }} " alt="...">
                </div>
                <div class="col-sm-9">
               <center> <label>Datos personales</label></center><br>
                
                @foreach($presidente as $pre)
                <table class="table table-hover">
                    
                    <tr>
                        <td><label>Nombre:</label></td>
                        <td><center>{{ $pre->SEC_nombre }}</center></td>
                    </tr>
                    <tr>
                        <td><label>Apellidos:</label></td>
                        <td><center>{{ $pre->SEC_apellido_p }}  {{ $pre->SEC_apellido_m }}</center></td>
                    <tr>
                    </tr>
                        <td><label>Telefono:</label></td>
                        <td><center>{{ $pre->SEC_tel }}</center></td>
                    <tr>
                    </tr>
                        <td><label>Celular:</label></td>
                        <td><center>{{ $pre->SEC_cel }}</center></td>               
                    </tr>  
                    <tr>
                        <td>
                           <a id="li" href="{{ route('admin.secretario.destroy', $pre->id) }}" onclick="return confirm('¿esta seguro que quiere eliminar este usuario..?')" class="btn btn-danger">Elimina</a>   
                        </td>
                        <td>
                             <a id="li" href="{{ route('admin.secretario.edit', $pre->id) }}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                </table>
                 @endforeach
                </div>


            </div>
 
           
                        

                       
                    	
    
</div>
</div>
@endsection