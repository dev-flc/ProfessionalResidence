<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
  
  
  <link rel="icon" href="../../img/ENUF.png">
  <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}">
  
  {!!Html::style('css/index.css')!!}
</head>
<body>

<!-- inicio nav -->
<div id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#">ENUF</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a>
                </li>
                <li><a href="quienessomos"> <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Quienes Somos...?</a>
                </li>
                <li><a href="contactanos"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Contactanos</a>
            </ul>
            <ul class="nav navbar-nav navbar-right">
       <li><a href="registro"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Registrarme</a></li>
       <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Iniciar Sesion</a></li>
      </ul>
        </div>
    </div>
</div>
<br />
<br />

<!-- fin nav -->
<!-- Inicio Contenido-->


	@yield('contenido')

<!-- Fin Contenido-->

<div class="container-fluid footer">
  <footer>
  <br>
    </center> 
   <div class="row">
        <div class="col-lg-4">
        <center>
        <h3>MENÚ</h3>
        <a href="">Inicio</a><br />
        <a href="">Quienes somos..?</a><br />
        <a href="">Contactanos</a>
        </center>
        </div>
        <div class="col-lg-4">
        <center>
        <h3>CONTACTANOS</h3>
        <p>Avenida Encinos 3 <br />
        Colonia Jardines Del Sur <br />
        Ciudad Chilpancingo de los Bravo, Guerrero <br />
        C.P. 39070 
        México</p>
        <p>TELEFONOS:</p>
        <p>(747) 472-52-27</p>
        <p>CORREO:</p>
        <p>enufrr@hotmail.com</p>
        </center>
        </div>
        <div class="col-lg-4">
        <center>
        <h3>REDES SOSIALES</h3>

        <a href="https://www.facebook.com/Escuela-Normal-Urbana-Federal-Prof-Rafael-Ram%C3%ADrez-203071469773794/"> <span class="fa fa-facebook-official" aria-hidden="true"></span> Facebook</a><br />
        <a href=""><span class="fa fa-twitter-square" aria-hidden="true"></span> Twiter</a> 

        </center>
        </div>

  </div>
  <br />
  </footer>
</div>

<div class="container-fluid">
  <center><br /><p>&copy; Escuela Normal Urbana Federal Profesor Rafael Ramirez. &middot; 2016 </p>
  <!--<p class="pull-right"><a href="registrarme">Registrarme </a></p>-->
</div>
<style type="text/css">
  .modal-dialog
  {
    width: 300px;
  }
  #imagenn
  {
    width: 150px;
    height: 150px;
    border-radius: 50%;
  }
</style>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Iniciar Sesión</h4>
      </div>
      <div class="modal-body">
      <center>
      <img id="imagenn" src="/img/users.png " alt="...">
      <br>
      <br>
      </center>
        {!! Form::open(['route'=>'admin.auth.login', 'method'=>'POST']) !!}
  <div class="form-group">
  {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'ejemplo@gmail.com','required']) !!}
  </div>

  <div class="form-group">
  {!! Form::password('password',['class'=>'form-control','placeholder'=>'***','required']) !!}
  </div>
  <div class="form-group">
  
  </div>  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        {!! Form::submit('Acceder',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
</body>
<script  src="{{ asset('plugin/jquery/jquery-3.1.1.js') }}"></script>
  <script  src="{{ asset('plugin/bootstrap/js/bootstrap.min.js') }}"></script>



  
</html>