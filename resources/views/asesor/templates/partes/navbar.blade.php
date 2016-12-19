<div id="navbar-menu" class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#">ENUF</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
            <!--
                <li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"> </span>  Inicio</a>
                </li>
                -->
                <li><a href="{{ route('asesor.alumnos.index') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Alumnos</a>
                </li>
               
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="{{ route('admin.auth.logout') }}"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Cerrar Sesion</a>
                    </li>
                    <!--
                    <li>
                    <a href="#"> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Perfil</a>
                    </li>-->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>