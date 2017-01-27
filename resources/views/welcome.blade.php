@extends('layouts.welcome')
@section('title','Inicio')
@section('contenido')
<style type="text/css">
  #but{
      background: rgb(52, 152, 219);
  }
</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li id="but" data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li id="but" data-target="#myCarousel" data-slide-to="1"></li>
        <li id="but" data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="../../img/slyder/slider7.jpg" alt="...">
         
        </div>         
        <div class="item">
          <img src="../../img/slyder/slider1.jpg" alt="...">
        
        </div>
        <div class="item">
          <img src="../../img/slyder/slider3.jpg" alt="...">
         
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
       box-shadow:0px 0px 21px 0px rgba(255,255,255, 1);
     }
     .mv{
        background: rgb(244, 246, 246);
        box-shadow: 0px 5px 5px  #BDC3C7;
        font-size: 30px;
        color: rgb(144, 148, 151);
     }

     .ase{
        position: relative;
        background: rgb(40, 116, 166);
        box-shadow: 0px 5px 5px  rgb(242, 243, 244);
        font-size: 30px;
        width: 300px;
        height: 50px;
        top: 25px;
       
      
     }
   </style>
    <div class="col-sm-6 ">
        <center><div class="mv"><p>Misión</p></div></center>
        <p id="mm" >Formar profesores de calidad, para contribuir al mejoramiento de la práctica docente, competencias y desarrollo de las habilidades intelectuales básicas, que permitan responder a las características, intereses y necesidades de los educandos, ampliando los conocimientos y la tecnología, para actuar con iniciativa, eficacia e innovación en las diversas situaciones del entorno social.</p>
    </div>
        <div class="col-sm-6">
        <center><div class="mv"><p>Visión</p></div> </center>
        <p  id="mm">Formar una comunidad estudiantil en continuo crecimiento de libertad responsable y capacidades cognitivas, que permitan el desarrollo de sus potencialidades, valores, habilidades, aptitudes y cualidades físicas, para acceder al nivel profesional y a su entorno social.</p>
        </div>
      
   </div>
  <center>
   <div class="ase"><h1>Asesores</h1><br></div>

   </center>

   </div>

      <div class="container asesores">
       

          <br>
          <br>
          <br>
          <style type="text/css">
            .asesor{
              background: rgb(93, 173, 226);
              box-shadow: -5px 4px 2px rgb(133, 193, 233);
              margin: 5px;
              color: rgb(242, 243, 244);
              transition: .7s;
            }
            .asesor:hover{
              border-radius: 20px;
              background: rgb(255,255,255);
              box-shadow: -5px 4px 2px rgb(93, 173, 226);
              color: rgb(93, 173, 226);
            }
          </style>

      <!-- Three columns of text below the carousel --> 
      <div class="row">
      @foreach ($asesor as $ase)
       @if($ase->ASE_nombre=="pendiente")

          @else
        <div class="col-lg-2 asesor" >
          <center><br>
          <img  class="img-circle " id="imgperfil" src="/files/documentos/{{ $ase->foto }} " alt="Generic placeholder image" width="140" height="140">
          <h2>{{ $ase->ASE_nombre }}</h2>
          <h4>{{ $ase->ASE_apellido_p }} {{ $ase->ASE_apellido_m }}</h4>
          </center>
        </div><!-- /.col-lg-3 -->
        @endif
        @endforeach
        
        
      </div><!-- /.row -->
<br />
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
            <!--
            <table>
              <tr>
                <td>
                <button type="button" class="btn btn-tamano btn-primary img-asesor">
                  <span class="fa fa-graduation-cap" aria-hidden="true">
                  Egresados
                  <span class="badge">3042</span></span>  
                </button>
                </td>
                 <td>
                <button type="button" class="btn btn-tamano btn-success img-asesor">
                  <span class="fa fa-book" aria-hidden="true">
                  Esquemas
                  <span class="badge">402</span></span>  
                </button>
                </td>
                 <td>
                <button type="button" class="btn btn-tamano btn-danger img-asesor">
                  <span class="glyphicon glyphicon-align-left" aria-hidden="true">
                  Escuelas
                  <span class="badge">42</span></span>  
                </button>
                </td>
                 <td>
                <button type="button" class="btn btn-tamano btn-info img-asesor">
                  <span class="glyphicon glyphicon-align-left" aria-hidden="true">
                  Asesores
                  <span class="badge">42</span></span>  
                </button>
                </td>
              </tr>
            </table>-->
            </center> 
            </div>
          </div>
      </div>
<br>
<div class="container marketing">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Generacion. <span class="text-muted">2001.</span></h2>
          <p class="lead">LA generacion 2001, fue reconocida y destaco ante todo como una generacion
          responsable, comprometidad y sagaz en el anvito educativo y laboral durante su instancia 
          en la institucion.</p>
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
          <p class="lead">A lo largo de su historia, la Escuela Normal Urbana Federal que ha contibuido de manera importante en el avance de la formacion de profesores de calidad asi como tambien capacitados en tecnologia educativa.</p>
        </div>
      </div>
<hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-6">
          <h2 class="featurette-heading">Generación <span class="text-muted">2015.</span></h2>
          <p class="lead">Por las sus aulas han pasado personajes importantes cuyo aporte y dedicacion profesional han resultado de mucha importancia para la institucion.</p>
        </div>
        <div class="col-md-6">
          <img class="featurette-image img-responsive center-block" src="../../img/estudiantes4.jpg">
        </div> 
      </div>
    </div><!-- /.container -->
    <br />


@endsection