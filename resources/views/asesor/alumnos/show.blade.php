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
        <h2>{!! $alum->ALU_nombre !!}</h2>
        <center>
        <h4>{!! $alum->ALU_apellido_p !!} {!! $alum->ALU_apellido_m !!}</h4>
        </center>
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
        border: 1px solid rgb(26, 188, 156);
        border-radius: 10px;
    }
    .fondo2{
        border: 1px solid rgb(52, 152, 219);
        border-radius: 10px;
    }
    
    #link{
        text-decoration: none;
    }
    table{
        width: 300px;
    }
</style>

  <div class="row">
    <div class="col-sm-8">
        <div class="container-fluid " id="containercolor"> 
        <div class="col-sm-12">
            <div class="row">

            
                <!-- inicio escuela --> 
                <br>
                <style type="text/css">
                    .tabla{
                        width: 100%;
                    }
                    .glyphicon-hand-down{
                        font-size: 30px;
                        color: rgb(192, 57, 43);
                    }
                    .con{
                        border:  1px solid #DDD;
                    }
                </style>
                <div class="col-sm-12">
                <div class="container-fluid con">
                <br>
                    @if($dd==0)
                    <table class="tabla">
                        <tr>
                            <td>
                               <center>
                                   <div class="alert alert-danger alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <strong>Falta</strong>  asignar la escuela, solo preciona el boton "asignar escuea ahora".
                                    </div>
                                    <span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span>
                               </center>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2">
                            <center><a href="#" id="link" class="btn btn-primary"   data-toggle="modal" data-target="#myModal">Asignar escuela ahora</a>
                            </center>
                            </td>
                        </tr>
                    </table>
                    <br>
                    @else
                    @foreach($escuela as $esc)
                    <table class="tabla">
                        <tr>
                            <th colspan="2"><center><h3>Datos de escuela asignada</h3></center></th>
                        </tr>
                        <tr>
                            <td rowspan="3">
                                <center>
                                  <img src="/files/documentos/school.png"/>
                                </center>
                            </td>
                            <td> <p><strong>Nombre:</strong> {{ $esc->ESC_nombre }}</p></td>
                        </tr>
                        <tr>
                            
                            <td><p> <strong>Clave:</strong>{{ $esc->ESC_clave }}</p></td>
                           
                        </tr>
                        <tr>
                             <td><a href="#" id="link"   data-toggle="modal" data-target="#myModal">Cambiar escuela</a></td>
                        </tr>
                    </table>
                    <br>
                    @endforeach
                    @endif

                    </div>
                    <hr>
                </div>
                <!--Fin escuela -->
                    
                <!--Inicio Esquema -->

                <div class="col-sm-12">
                    <div class="container-fluid fondo">
                    <center><h3>Esquema</h3>
                    @foreach($anteproyecto as $ante)
                    <table class="tabla">
                        <tr>
                            <td><strong>Titulo:</strong></td>
                            <td><p>{{ $ante->ANT_nombre }}</p></td>
                        </tr>
                        <tr>
                            <td><strong>Descripcion:</strong></td>
                            <td><p>{{ $ante->ANT_descripcion }}</p></td>
                        </tr>
                    </table>
                    @endforeach
                    </center>
    <br>



 <style type="text/css">
    #imggg{
        width: 60px;
    }
    .uno{
        border: 1px solid rgb(118, 215, 196);
        background: rgb(118, 215, 196);
        height: 100px;
        transition: .7s;

    }
    .dos
    {
    border: 1px solid rgb(118, 215, 196);
    height: 100px;
    transition: .7s;
    }

    .contaesquemas:hover .uno
    {
        border: 1px solid rgb(23, 165, 137);
        background: rgb(23, 165, 137);
    }
    .contaesquemas:hover .dos
    {
        border: 1px solid rgb(23, 165, 137);
    }



    .uno1{
        border: 1px solid rgb(231, 76, 60);
        background: rgb(231, 76, 60);
       height: 100px;
       transition: .7s;

    }
    .dos1
    {
    border: 1px solid rgb(231, 76, 60);
    height: 100px;
    transition: .7s;
    }
    
    .contaesquemas:hover .uno1
    {
        border: 1px solid rgb(213, 219, 219);
        background: rgb(213, 219, 219);
    }
    .contaesquemas:hover .dos1
    {
        border: 1px solid rgb(213, 219, 219);
    }


     .uno2{
        border: 1px solid rgb(93, 173, 226);
        background: rgb(93, 173, 226);
       height: 100px;
       transition: .7s;

    }
    .dos2
    {
    border: 1px solid rgb(93, 173, 226);
    height: 100px;
    transition: .7s;
    }
    
    .contaesquemas:hover .uno2
    {
        border: 1px solid rgb(46, 134, 193);
        background: rgb(46, 134, 193);
    }
    .contaesquemas:hover .dos2
    {
        border: 1px solid rgb(46, 134, 193);
    }
    #null{
        color: rgb(231, 76, 60);
    }
  </style>

@foreach($documentos as $doc) 


<!-- inicio entregados esquemas -->
 @if ($doc->DOC_fecha_entrega==null)
    <div class="container-fluid contaesquemas">
  <a  class="">
    <div class="row">
        <div class="col-sm-2 uno1">
        <br>
        <center><img  id="imggg" src="/files/documentos/clock.png " class="img-circle" ></center>
        </div>
        <div class="col-sm-10 dos1"><h4><strong>Titulo: </strong>{!! $doc->DOC_nombre !!}</h4> 
            <p>
                 <strong>Fecha: </strong> {!! $doc->DOC_fecha !!} | 
                <strong id="null">Aun no a realizado la entrega . . . !</strong>
            </p> 
        </div>
    </div>
  </a>
</div>
<br>
  @else

<div class="container-fluid contaesquemas">
  <a href="{{ route('asesor.alumno.ver', $doc->id) }}" class="">
    <div class="row">
        <div class="col-sm-2 uno">
        <br>
        <center><img  id="imggg" src="/files/documentos/like1.png " ></center>
        </div>
        <div class="col-sm-10 dos"><h4><strong>Titulo: </strong>{!! $doc->DOC_nombre !!}</h4> 
            <p>
                <strong>Fecha: </strong> {!! $doc->DOC_fecha !!} | 
                <strong>Entrega: </strong>{!! $doc->DOC_fecha_entrega !!} ( {!! $doc->DOC_hora_entrega !!} )
            </p> 
        </div>
    </div>
  </a>
</div>
<br>
<!-- Fin entregados esquemas -->
@endif

@endforeach
</div>
                </div>
                <!-- Fin esquema -->




            </div>
            <hr>
        </div>
    <!-- Fin ensayo -->

        <div class="col-sm-12">


        <br>
            @if($alum->ALU_semestre==8)
             @foreach($anteproyecto as $ante)
             <div class="container-fluid fondo2">
             <center><h3>Ensayo</h3></center>
                    <table class="table table-hover">
                        <tr>
                            <td><strong>Titulo:</strong></td>
                            <td><p>{{ $ante->ANT_nombre }}</p></td>
                        </tr>
                        <tr>
                            <td><strong>Descripcion:</strong></td>
                            <td><p>{{ $ante->ANT_descripcion }}</p></td>
                        </tr>
                    </table>
                    <br>
                        @foreach($seguimientos as $seg)
                        @if ($seg->SEG_fecha_entrega==null)
                           <div class="container-fluid contaesquemas">
                          <a>
                            <div class="row">
                                <div class="col-sm-2 uno1">
                                <br>
                                <center><img  id="imggg" src="/files/documentos/clock.png " class="img-circle" ></center>
                                </div>
                                <div class="col-sm-10 dos1"><h4><strong>Titulo: </strong>{!! $seg->SEG_nombre !!}</h4> 
                                    <p>
                                         <strong>Fecha: </strong> {!! $seg->SEG_fecha !!} |
                                         <strong id="null">Aun no a realizado la entrega . . . !</strong>
                                    </p> 
                                </div>
                            </div>
                          </a>
                        </div>
                        <br> 
                        @else
                       <div class="container-fluid contaesquemas">
                          <a  href="{{ route('asesor.alumno.verensayo',$seg->id) }}">
                            <div class="row">
                                <div class="col-sm-2 uno2">
                                <br>
                                <center><img  id="imggg" src="/files/documentos/like1.png " ></center>
                                </div>
                                <div class="col-sm-10 dos2"><h4><strong>Titulo: </strong>{!! $seg->SEG_nombre !!}</h4> 
                                    <p>
                                         <strong>Fecha: </strong> {!! $seg->SEG_fecha !!} |
                                         <strong>Entrega: </strong>{!! $seg->SEG_fecha_entrega !!} ( {!! $seg->SEG_hora_entrega !!} )
                                    </p> 
                                </div>
                            </div>
                          </a>
                        </div>
                        <br>
                        @endif
                        @endforeach
            </div>
                    @endforeach
                    <br>
             
            @endif
            
        </div>


    <!-- Fin ensayo -->


        </div>
    </div>
    <div class="col-sm-4">
<style type="text/css">
    .panel-col{
        border-radius: 20px;
    }
    .panel-col h3{
        color: #666;
    }
</style>
        <div class="panel panel-default panel-col">
            <center><h3>Diario</h3></center>
            <div class="panel-body">

            <!-- Diario inicio-->
            <style>
 

.la {
    text-decoration: none;
}


.comment {
    
  
   # border-bottom: 1px solid #ddd;
   
    *zoom: 1;
    width: 100%;
}

.comment-img {
    float: left;
    margin-right: 33px;
    border-radius: 50%;
    overflow: hidden;
}

.comment-img img { display: block }

.comment-body { overflow: hidden }

.comment .text {
    padding: 10px;
    border: 1px solid rgb(245, 183, 177); /* color  marco comentario*/
    border-radius: 5px;
    background: #fff;
}

.comment .text p:last-child { margin: 0 }

.comment .attribution {
    margin: 0.5em 0 0;
    font-size: 12px;
    color: #666;
}

/* Decoration */

.comments, .comment { position: relative }

.comments:before, .comment:before, .comment .text:before {
    content: "";
    position: absolute;
    top: 0;
    left: 65px;
}
/*
.comments:before {
    width: 1px;
    left: 24%;
    bottom: 0px;
    background: red;
}
*/

.comment:before {
    width: 15px;
    height: 15px;
    border: 3px solid #fff;
    border-radius: 100px;
    margin: 16px 0 0 -6px;
    box-shadow: 0 1px 1px rgba(0,0,0,0.2), inset 0 1px 1px rgba(0,0,0,0.1);
    background: #ccc;
}


.comment:hover:before { background: rgb(231, 76, 60); }

.comment .text:before {
    top: 18px;
    left: 78px;
    width: 9px;
    height: 9px;
    border-width: 0 0 1px 1px;
    border-style: solid;
    border-color: rgb(245, 183, 177); /*colo pikito */
    background: #fff;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
}
.divbor{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    color: #777;
    text-align: center;
    border: 1px solid rgb(245, 183, 177);;
    font-size: 20px;
}
.divbor img{
    width: 30px;
    height: 30px;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}
.btn-circle.btn-xl {
  width: 70px;
  height: 70px;
  padding: 10px 16px;
  font-size: 24px;
  line-height: 1.33;
  border-radius: 35px;
}

</style>

<section class="comments">
    @foreach($diario as $dia)
  
    <article class="comment">
        <a class="comment-img" href="{{ route('asesor.alumno.verdiairio', $dia->id) }}">
            <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="glyphicon glyphicon-ok"></i></button>
            
        </a> 
        <a href="{{ route('asesor.alumno.verdiairio', $dia->id) }}" id="link"> 
        <div class="comment-body">
            <div class="text">
              <p><strong>Titulo:</strong> {!! $dia->DIA_nombre !!}</p>
               <p class="attribution"><strong>Fecha y Hora: </strong>{!! $dia->DIA_fecha !!}</p>
            </div>
        </div>
        </a>
    </article>
    <br>

    @endforeach
    <center>
    {!! $diario->render()!!}
    </center>
    
</section>​
            <!-- Diario Fin-->


            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Lista de escuela</h4>
      </div>
      <div class="modal-body">

        @foreach($alumnoo as $es)
        {{Form::open(['route'=>['asesor.alumno.escuelaa',$es->id],'method'=>'PUT'])}}
            <div class="form-group">
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