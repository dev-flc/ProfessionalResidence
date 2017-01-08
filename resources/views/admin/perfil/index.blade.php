<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>
<style type="text/css">
    body{
        background: rgb(235, 237, 239);
    }
    .perfil{
        background: rgb(255,255,255);
        height: 400px;
        border-radius: 100px 0px 100px 0px;
        -moz-border-radius: 100px 0px 100px 0px;
        -webkit-border-radius: 100px 0px 100px 0px;
        
        height: auto;

    }
    #imagenn
    {
        width: 200px;
        height: 200px;
        border-radius: 50%;
    }
    table
    {
        width: 100%;
    }
    .line
    {
    border: 1px solid;
    border-top-color: transparent;
    border-right-color: transparent;
    border-bottom-color: #1ABC9C;
    border-left-color: transparent;  
    }
    td
    {
        height: 30px;
    }
    td,.line
    {
        width: 100%;
    }
     p{
        font-size: 20px;
    }
    strong
    {
        color: #888;
        font-size: 15px;

    }
    .list-group-item,span{
        font-size: 
    }
    .alumm
    {
        background: rgb(255,255,255);
        border-radius: 10px;
    }
    .container-menu
    {
       
    }
    .btn-menu
    {
        height: 100px;
        width: 200px;
       /* border-radius: 50%;*/
        margin: 5px;
    }
    #link{
        text-decoration: none;
    }
    #tdd
    {
        width: 50%;
    }
</style>
@include('admin.templates.partes.nav')
<body>
    
    <div class="container-fluid">
        @include('flash::message')
    </div>
  <div class="container-fluid">
      <div class="row">
          <div class="col-sm-3 ">
              <div class="container-fluid perfil">
                <br>
                <center>
                    <img id="imagenn" src="/files/documentos/{{ $foto }} " alt="...">
                </center>
                @foreach ($presidente as $pre)
                <center>
                @if($type=="subdirector")
                 <h2>{{ $pre->SUB_nombre }}</h2>
                 <p>{{ $pre->SUB_apellido_p}}  {{ $pre->SUB_apellido_m}}</p>
                @else
                <h2>{{ $pre->PRE_nombre }}</h2>
                 <p>{{ $pre->PRE_apellido_p}}  {{ $pre->PRE_apellido_m}}</p>
                @endif
                </center>
                @endforeach
                @foreach ($dir as $di)
                <table class="table-table">
                    <tr>
                        <td>
                            <div class="line">
                            <p>
                                <strong>Calle:</strong> {{ $di->DIR_calle }}
                            </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="line">
                            <p>
                                <strong>Numero:</strong> {{ $di->DIR_numero }}
                            </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="line">
                            <p>
                                <strong>Estado:</strong> {{ $di->DIR_estado }}
                            </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="line">
                            <p>
                                <strong>Ciudad:</strong> {{ $di->DIR_ciudad }}
                            </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="line">
                            <p>
                                <strong>Colonia:</strong> {{ $di->DIR_colonia }}
                            </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="line">
                            <p>
                                <strong>Cp:</strong> {{ $di->DIR_cp }}
                            </p>
                            </div>
                        </td>
                    </tr>
                </table>
                <br>
                <center>
                <a id="li" href="{{ route('admin.perfil.edit', $idfull) }}">
                <span class="label label-success">
                    Editar<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </span>
                </a>
                </center>
                @endforeach
                <br><br><br>
              </div>
          </div>
        <div class="col-sm-9 alumm">
            <div class="container-fluid container-menu">
            <center>
            <a id="link" href="{{ route('admin.alumnos.index') }}">
                <button class="btn btn-primary btn-menu">
                    <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    Alumnos</p>
                    <p><span class="badge">{{ $al }}</span></p>
                </button>
            </a>


           

             <a id="link" href="{{ route('admin.escuelas.index') }}">
                <button class="btn btn-warning btn-menu">
                    <p><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    Escuelas</p>
                    <p><span class="badge">{{ $as }}</span></p>
                </button>
            </a>

            <a id="link" href="{{ route('admin.asesores.index') }}">
                <button class="btn btn-danger btn-menu">
                    <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    Aasesores</p>
                    <p><span class="badge">{{ $as }}</span></p>
                </button>
            </a>

             <a id="link" href="{{ route('admin.esquema.index') }}">
                <button class="btn btn-success btn-menu">
                    <p><span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                    Esqeumas</p>
                    <p><span class="badge">{{ $se }}</span></p>
                </button>
            </a>
            @if($type=="subdirector")
            <a id="link" href="{{ route('admin.presidente.index') }}">
                <button class="btn btn-info btn-menu">
                    <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    Presidente</p>
                    <p><span class="badge">{{ 1 }}</span></p>
                </button>
            </a>
            @endif
            <a id="link" href="{{ route('admin.secretario.index') }}">
                <button class="btn btn-defaul btn-menu">
                    <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    Secretario</p>
                    <p><span class="badge">{{ 1 }}</span></p>
                </button>
            </a>
            
              <a id="link" href="{{ route('admin.asesores.index') }}">
                <button class="btn btn-info btn-menu">
                    <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    Asignar asesor</p>
                    <p><span class="badge">{{ $al }}</span></p>
                </button>
            </a>

            <a id="link" href="{{ route('admin.plan.index') }}">
                <button class="btn btn-primary btn-menu">
                    <p><span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                    Plan de trabajo</p>
                </button>
            </a>

            </center>
            </div>
       
        </div>
      
        <div class="col-sm-9 ">
        <br>
            <div class="container-fluid alumm">
                <div class="row">
                    <div class="col-sm-6"><br>
                       <center><h3>Seguimientos del esquema</h3></center>
                        <table class="table">
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha de entrega</th>
                            </tr>
                            @foreach ($seguimiento as $segui)
                            <tr>
                                <td  id="tdd">{{ $segui->SEGS_nombre }}</td>
                                <td id="tdd" ><span class="label label-success">{{ $segui->SEGS_fecha }}</span></td>
                            </tr>

                            @endforeach
                        </table>
                    </div>
                    <div class="col-sm-6">
                    <br>
                        <center><h3>Documentos del anteproyecto</h3></center>
                        <table class="table">
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha de entrega</th>
                            </tr>
                            @foreach ($documento as $docs)
                            <tr>
                                <td  id="tdd">{{ $docs->DOCS_nombre }}</td>
                                <td id="tdd" ><span class="label label-success">{{ $docs->DOCS_fecha }}</span></td>
                            </tr>

                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
       
      </div>


  </div>
    


    <script  src="{{ asset('plugin/jquery/jquery-3.1.1.js') }}"></script>
    <script  src="{{ asset('plugin/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
