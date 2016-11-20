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
    <img id="imgprofile" src="http://www.coolmyself.com/wp-content/themes/coolmyself/images/user-photo.png" alt="...">
    <div class="caption">
        <center>
        <h3>{!! $alum->ALU_nombre !!}</h3>
        <p>{!! $alum->ALU_apellido_p !!} {!! $alum->ALU_apellido_m !!}</p>
        <p>
            <a id="perfilink" href="#">
                <span id="spanperfil" class="label label-default">Default</span>
            </a>
            <a id="perfilink" href="#">
                <span class="label label-default">Default</span>
            </a>
            <a id="perfilink" href="#">
                <span class="label label-default">Default</span>
            </a>
        </p>
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
</style>

  <div class="row">
    <div class="col-sm-3">
        <div class="panel panel-default">
        <div class="panel-heading">Menu</div>
            <div class="panel-body">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <span class="glyphicon glyphicon-folder-close">
                            </span>Diario</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body panell">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://www.jquery2dotnet.com">Diario</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-flash text-success"></span><a href="http://www.jquery2dotnet.com">Vitacora</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-info"></span><a href="http://www.jquery2dotnet.com">Nueva nota</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-comment text-success"></span><a href="http://www.jquery2dotnet.com">Commentarios</a>
                                        <span class="badge">42</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="container-fluid " id="containercolor"> 
        <div class="col-sm-12">
            <br />
            <label>Anteproyecto</label>
            <p>nombre anteproyecto</p>
            <label class="subtema">Descripcion</label>
            <p>soy la descripcion</p>
            <hr />
            <div class="list-group">
                @foreach($documentos as $doc) 

                <div href="#" class="list-group-item colordiario">
                    <h4 class="list-group-item-heading">{!! $doc->DOC_nombre !!}</h4>
                    <p class="list-group-item-text">{!! $doc->DOC_descripcion !!}</p>
                    <p class="descargarr">
                    <a  href="{{$doc->DOC_nombre}}">descargar |</a>
                    <a  href="{{$doc->DOC_nombre}}">Ver</a>
                    </p>
                </div>
                @endforeach
            </div>
            <hr>

        </div>

        <div class="col-sm-12">
        <br>
            <label>Esquema</label>
            <p>{!! $alum->ESQ_nombre !!}</p>
            <label class="subtema">Descripcion</label>
            <p>{!! $alum->ESQ_descripcion !!} </p>       
            <hr />
            <div class="list-group">
                @foreach($seguimientos as $seg)
                <a href="{{$seg->id}}" class="list-group-item colordiario">
                    <h4 class="list-group-item-heading">{!! $seg->SEG_nombre !!}</h4>
                    <p class="list-group-item-text">{!! $seg->SEG_descripcion !!}</p>
                </a>
                @endforeach
            </div>
        </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">Diario</div>
            <div class="panel-body">
                <div class="list-group">
                @foreach($diario as $dia)
                    <a href="#" class="list-group-item colordiario">
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
@endsection