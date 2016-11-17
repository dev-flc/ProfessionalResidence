<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	{!!Html::style('css/app.css')!!}
  {!!Html::style('css/navbar.css')!!}
  {!!Html::style('css/font-awesome.min.css')!!}
  {!!Html::script('js/jquery-1.12.3.min.js')!!}
  {!!Html::script('js/bootstrap.min.js')!!}
   <link rel="icon" href="../../img/ENUF.png">
  
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
       <li><a href="#"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Registrarme</a></li>
       <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Iniciar Sesion</a></li>
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

<!-- Fin Contenido-->


</body>

</html>