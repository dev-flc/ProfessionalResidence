@extends('asesor.templates.main')

@section('title', 'Alumnos')

@section('submenu')
<style type="text/css">
    #imgprofile{
        width: 150px;
        height: 150px;
        border-radius: 50%;
        -webkit-box-shadow: 0px 0px 0px 5px rgb(229, 231, 233);
        -moz-box-shadow: 0px 0px 0px 5px rgb(229, 231, 233);
        box-shadow: 0px 0px 0px 5px rgb(229, 231, 233);
    }
    .caption{
        background: rgb(242, 243, 244);
        border-radius: 5px;
        margin: 6px;
    }
    #perfilink{
        text-decoration: none;
    }
    #spanperfil:hover{
        background: red;
    }
</style>
<div class="thumbnail">
    <img id="imgprofile" src="/files/documentos/{{ $alum->foto }} " alt="...">
    <div class="caption">
        <center>
        <h3>{!! $alum->ALU_nombre !!}</h3>
        <p>{!! $alum->ALU_apellido_p !!} {!! $alum->ALU_apellido_m !!}</p>
        <table class="table table-hover">
        <tr>
            <td><strong>Matricula:</strong></td>
            <td>{!! $alum->ALU_matricula !!}</td>
        </tr>
        <tr>
            <td><strong>Semestre:</strong></td>
            <td>{!! $alum->ALU_semestre !!}</td>
        </tr>
        <tr>
            <td><strong>Celular:</strong></td>
            <td>{!! $alum->ALU_cel !!}</td>
        </tr>
        <tr>
            <td><strong>Telefono:</strong></td>
            <td>{!! $alum->ALU_tel !!}</td>
        </tr>
        <tr>
            <td><strong>Correo:</strong></td>
            <td>{!! $alum->email !!}</td>
        </tr>
            
        </table>
        </center>
    </div>
</div>
 
            

@endsection

@section('content')
<style type="text/css">
    .glyphicon { margin-right:10px; }
    .panell { padding:0px; }
    .panell table tr td { padding-left: 15px }
    .panell .table {margin-bottom: 0px; }
    .descargarr{
        text-decoration: none;
        text-align: right;
        margin: 0px;
    }
    .colordiario:hover{
        background: rgb(244, 246, 246);
    }
    #containercolor{
        background: rgb(255,255,255);
    }
    .subtema{
        color: #666;
    }
    p{
        text-align: justify;
    }
    .fondo{
        background: rgb(234, 237, 237);
        border-radius: 10px;
    }
    #link{
        text-decoration: none;
    }
</style>

  <div class="row">
    <div class="col-sm-8">
        <div class="container-fluid " id="containercolor"> 
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                <br>
                    <div class="container-fluid fondo">
                    @foreach($anteproyecto as $ante)
                    <table class="table table-hover">
                        <tr>
                            <td><strong>Anteproyecto:</strong></td>
                            <td><p>{{ $ante->ANT_nombre }}</p></td>
                        </tr>
                        <tr>
                            <td><strong>Descripcion:</strong></td>
                            <td><p>{{ $ante->ANT_descripcion }}</p></td>
                        </tr>
                    </table>
                    @endforeach
                    </div>
                </div>
                <div class="col-sm-6">
                <br>
                    <div class="container-fluid fondo">
                    @foreach($escuela as $esc)
                    <table class="table table-hover">
                        <tr>
                            <td><strong>Nombre:</strong></td>
                            <td><p>{{ $esc->ESC_nombre }}</p></td>
                        </tr>
                        <tr>
                            <td><strong>Clave:</strong></td>
                            <td><p>{{ $esc->ESC_clave }}</p></td>
                           
                        </tr>
                        <tr>
                            <td></td>
                             <td rowspan="2"><center><a href="#" id="link"   data-toggle="modal" data-target="#myModal">| Asignar |</a></center></td>
                        </tr>
                    </table>
                    @endforeach
                    </div>
                </div>
                <div class="col-sm-12">
                    <br>
                </div>
                <div class="col-sm-12">
                    <div class="list-group">
                        @foreach($documentos as $doc) 
                        <div href="#" class="list-group-item colordiario">
                            <h4 class="list-group-item-heading">{!! $doc->DOC_nombre !!}</h4>
                            
                            <table>
                                <tr>
                                    <td><strong>Fecha: </strong></td>
                                    <td>{!! $doc->DOC_fecha !!}</td>
                                </tr>
                                <tr>
                                    <td><strong>Entregado: </strong></td>
                                    <td> {!! $doc->DOC_fecha_entrega !!} | {!! $doc->DOC_hora_entrega !!}</td>
                                </tr>
                            </table>
                            <p class="descargarr">
                            <a id="link" href="{{ route('asesor.alumno.ver', $doc->id) }}"> <span class="label label-primary"> Ver Inf..<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></span></a>
                            </p>
                        </div>
                        @endforeach
                     </div>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-sm-12">
        <br>
            @if($alum->ALU_semestre==8)
             @foreach($anteproyecto as $ante)
             <div class="container-fluid fondo">
                    <table class="table table-hover">
                        <tr>
                            <td><strong>Ensayo:</strong></td>
                            <td><p>{{ $ante->ANT_nombre }}</p></td>
                        </tr>
                        <tr>
                            <td><strong>Descripcion:</strong></td>
                            <td><p>{{ $ante->ANT_descripcion }}</p></td>
                        </tr>
                    </table>
                    </div>
                    @endforeach
                    <br>
               <div class="list-group">
                @foreach($seguimientos as $seg)
                <a href="{{$seg->id}}" class="list-group-item colordiario">
                    <h4 class="list-group-item-heading">{!! $seg->SEG_nombre !!}</h4>
                    <p class="list-group-item-text">{!! $seg->SEG_descripcion !!}</p>
                </a>
                @endforeach
            </div>
            @endif
            
        </div>
        </div>
    </div>
    <div class="col-sm-4">

        <div class="panel panel-default">
            <div class="panel-heading">Diario</div>
            <div class="panel-body">
                <div class="list-group">
                @foreach($diario as $dia)
                    <a href="{{ route('asesor.alumno.verdiairio', $dia->id) }}" class="list-group-item colordiario">
                        <h4 class="list-group-item-heading">{!! $dia->DIA_fecha !!}</h4>
                        <p class="list-group-item-text">{!! $dia->DIA_nombre !!}</p>
                    </a>
                @endforeach
                {!! $diario->render()!!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Asignar Escuela</h4>
      </div>
      <div class="modal-body">
        @foreach($alumnoo as $es)
        {{Form::open(['route'=>['asesor.alumno.escuelaa',$es->id],'method'=>'PUT'])}}
            <div class="form-group">
            {!! Form::label('escuela','Escuelas') !!}
            <select  name="escuela" class="form-control" required>
                <option value="">Seleccione una escuela</option>
                @foreach($escuelas as $escuelita)
                    <option value="{{$escuelita->id}}">{{$escuelita->ESC_nombre }}</option>
    
                @endforeach
            </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Asignar <span class="glyphicon glyphicon-ok"></span></button>
      </div>
        {!! Form::close() !!}
        @endforeach
    </div>
  </div>
</div>
@endsection