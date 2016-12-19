@extends('layouts.welcome')
@section('title','Inicio')
@section('contenido')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="../../img/slyder/slider7.jpg" alt="...">
          <div class="container">
            
          </div>
        </div>
        <div class="item">
          <img src="../../img/slyder/slider1.jpg" alt="...">
          <div class="container">
            
          </div>
        </div>
        <div class="item">
          <img src="../../img/slyder/slider3.jpg" alt="...">
          <div class="container">
            
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
 <div class="container-fluid mision">
   <div class="row">
   <br>
   <style type="text/css">
     #mm
     {
      font-size: 25px;
      text-align: justify;
      color: rgb(144, 148, 151);
     }
     .asesores
     {
      background: rgb(52, 152, 219);
      margin: 0px;
      width: 100%;
     }
     h1{
      color: #FFF;
     }
     .img-asesor
     {
      -webkit-box-shadow: 0px 0px 21px 0px rgba(255,255,255, 1);
-moz-box-shadow:    0px 0px 21px 0px rgba(255,255,255, 1);
box-shadow:         0px 0px 21px 0px rgba(255,255,255, 1;
     }
   </style>


        <div class="col-sm-6">
        <center><h2>Misión</h2></center>
        <p id="mm" >La Escuela Normal Urbana Federal "Prof. Rafael Ramirez" es reconocida por la alta aceptación de sus egresados en instituciones de nivel superior y en el entorno social, derivada de la constante actualización del programa educativo, de profesores certificados en su disciplina y en docencia y de la evaluación permanente a los mismos, avalados por procesos de certificación.</p>
        </div>
        <div class="col-sm-6">
        <center><h2>Visión</h2></center>
        <p  id="mm">Formar una comunidad estudiantil en continuo crecimiento de libertad responsable y capacidades cognitivas, que permitan el desarrollo de sus potencialidades, valores, habilidades, aptitudes y cualidades físicas, para acceder al nivel profesional y a su entorno social.</p>
        </div>
   </div>
   <br />
   </div>

   <div class="container asesores">
    <center><h1>Asesores</h1></center><br>

      <!-- Three columns of text below the carousel -->
      <div class="row">
      @foreach ($asesor as $ase)
       @if($ase->ASE_nombre=="pendiente")

          @else
        <div class="col-lg-3">
         
          <center>
          <img  class="img-circle img-asesor"id="imgperfil" src="/files/documentos/{{ $ase->foto }} " alt="Generic placeholder image" width="140" height="140">
          <h2>{{ $ase->ASE_nombre }}</h2>
          <h4>{{ $ase->ASE_apellido_p }} {{ $ase->ASE_apellido_m }}</h4>
          </center>
        </div><!-- /.col-lg-3 -->
        @endif
        @endforeach
        
        
      </div><!-- /.row -->
<br />

    
</div>
      <div class="container-fluid div">
          <div class="row">
            <div class="col-ms-5">
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
 
            <center>
            <style type="text/css">
              .btn-tamano{
                height: 160px;
                width: 160px;
                margin: 5px;
                border-radius: 50%;
              }
            </style>
            <table>
              <tr>
                <td>
                <button type="button" class="btn btn-tamano btn-primary">
                  <span class="fa fa-graduation-cap" aria-hidden="true">
                  Egresados
                  <span class="badge">3042</span></span>  
                </button>
                </td>
                 <td>
                <button type="button" class="btn btn-tamano btn-success">
                  <span class="fa fa-book" aria-hidden="true">
                  Esquemas
                  <span class="badge">402</span></span>  
                </button>
                </td>
                 <td>
                <button type="button" class="btn btn-tamano btn-danger">
                  <span class="glyphicon glyphicon-align-left" aria-hidden="true">
                  Escuelas
                  <span class="badge">42</span></span>  
                </button>
                </td>
                 <td>
                <button type="button" class="btn btn-tamano btn-info">
                  <span class="glyphicon glyphicon-align-left" aria-hidden="true">
                  Asesores
                  <span class="badge">42</span></span>  
                </button>
                </td>
              </tr>
            </table>
            </center> 
            </div>
          </div>
      </div>
<br>
<div class="container marketing">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Generacion. <span class="text-muted">2001.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="../../img/estudiantes7.jpg" alt="Generic placeholder image">
        </div>
      </div>
<hr class="featurette-divider">
      <div class="row featurette">
        
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="../../img/estudiantes2.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Generación <span class="text-muted">2005.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>
<hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-6">
          <h2 class="featurette-heading">Generación <span class="text-muted">2015.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-6">
          <img class="featurette-image img-responsive center-block" src="../../img/estudiantes4.jpg">
        </div>
      </div>
    </div><!-- /.container -->
    <br />

@endsection