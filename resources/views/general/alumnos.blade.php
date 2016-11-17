@extends('layouts.master')

@section('title','Alumnos')

@section('contenido')
<style type="text/css">
.panel-menu
{
    border-color: rgb(231, 76, 60);
}
.panel-menu > .panel-heading 
{
    background: rgb(231, 76, 60);
    color: #ffffff;
    border-color: rgb(231, 76, 60);
}
.panel-lista
{
    border-color: rgb(26, 188, 156);
}
.panel-lista > .panel-heading 
{
    background: rgb(26, 188, 156);
    color: #ffffff;
    border-color: rgb(26, 188, 156);
}
th{
	text-align: center;
	color: rgb(52, 73, 94);
}
td{
	text-align: center;
	color: rgb(128, 139, 150);
}

.menulink{
	background: rgb(255,255,255);
	border-color:rgb(52, 152, 219);
	color: rgb(52, 152, 219);
	transition: .7s;
}
.menulink:hover{
	border-color:rgb(26, 188, 156);
	background: rgb(255, 255, 255);
	color: rgb(26, 188, 156);
}
.menulin{
  background: rgb(255, 255, 255);
  border-color:rgb(231, 76, 60);
  color: rgb(231, 76, 60);
  transition: .7s;
}
.menulin:hover{
  border-color:rgb(26, 188, 156);
  background: rgb(255, 255, 255);
  color: rgb(26, 188, 156);
}
.imgicon{
	width: 100px;
	height: 100px;
}
.icontex{
	color: #777777;
}
.titlealumno{
	position: relative;
	top: 10px;
}
.nuevoalumno{
	border-color:rgb(255, 255, 255);
	background: rgb(255, 255, 255);
	color: rgb(26, 188, 156);
	float: right;
	transition: .7s;
}
.nuevoalumno:hover{
	background: none;
	border-color:rgb(255, 255, 255);
	color:rgb(255, 255, 255);
}
.tt{
  margin: 2px;
}
</style>
<script type="text/javascript">
$(document).ready(function()
{
  $("#div1").click(function()
  {
    $("#element2").hide();
    $("#element3").hide();
    $("#element4").hide();
    $("#element1").show("fail");
  });
  $("#div2").click(function()
  {
    $("#element1").hide();
    $("#element3").hide();
    $("#element4").hide();
    $("#element2").show("fail"); 
  });
  $("#div3").click(function()
  {
    $("#element1").hide();
    $("#element2").hide();
    $("#element4").hide();
    $("#element3").show("fail"); 
  });

});
</script>
<br />
<h1>administrador</h1>
<div class="container-fluid">
	<div class="row">
        <div class="col-sm-3">
        	<div class="panel panel-menu">
  				<div class="panel-heading">
    				<h3 class="panel-title">Menu</h3>
  				</div>
  				<div class="panel-body">
    				<div class="list-group">
              <a href="#" id="div1" class="btn btn-default btn-lg btn-block menulink ">Alumnos</a>
              <div id="element1" class="tt" style="display: none;">
                <a href="#"   class="btn btn-default btn-lg btn-block menulin" ><span class="fa fa-user-plus" aria-hidden="true"></span> Registrar Alumno</a>
  						  <a href="#"   class="btn btn-default btn-lg btn-block menulin" ><span class="fa fa-list" aria-hidden="true">  Lista de Alumnos</a>
              </div><br>

  						<a href="#" id="div2" class="btn btn-default btn-lg btn-block menulink">Asesores</a>
              <div id="element2" class="tt" style="display: none;">
              <a href="#"   class="btn btn-default btn-lg btn-block menulin" > <span class="fa fa-user-plus" aria-hidden="true"> Registrar nuevo asesor</a>
              <a href="#"   class="btn btn-default btn-lg btn-block menulin" ><span class="fa fa-list" aria-hidden="true"> Lista de asesores</a>
              </div><br>

  						<a href="#" id="div3" class="btn btn-default btn-lg btn-block menulink">Escuelas</a>
              <div id="element3" class="tt" style="display: none;">
              <a href="#"   class="btn btn-default btn-lg btn-block menulin" >Alumnos</a>
              </div><br>

  						<a href="#"  class="btn btn-default btn-lg btn-block menulink">Banco de Proyectos</a>
					</div>
  				</div>
			</div>
        </div>
        <div class="col-sm-9">
        	<div class="row">
       			<div class="col-sm-3">
        			<center>
        			<a href="">
        				<img src="../../img/alumnos.png" alt="escuelas" class="img-responsive imgicon" alt="Responsive image">
        			</a>
        			<h4 class="icontex">Alumnos</h4>
        			</center>
        		</div>
        		<div class="col-sm-3">
        			<center>
        			<a href="">
        				<img src="../../img/escuela.png" alt="escuelas" class="img-responsive imgicon" alt="Responsive image">
        			</a>
        			<h4 class="icontex">Escuelas</h4>
        			</center>
        		</div>
        		<div class="col-sm-3">
        			<center>
        			<a href="">
        				<img src="../../img/asesores.png" alt="escuelas" class="img-responsive imgicon" alt="Responsive image">
        			</a>
        			<h4 class="icontex">Asesores</h4>
        			</center>
        		</div>
        		<div class="col-sm-3">
        			<center>
        			<a href="">
        				<img src="../../img/proyectos.png" alt="escuelas" class="img-responsive imgicon" alt="Responsive image">
        			</a>
        			<h4 class="icontex">Proyectos</h4>
        			</center>
        		</div>
        	</div>
        </div>
        <div class="col-sm-9">
        	<div class="panel panel-lista">
  				<div class="panel-heading">
					<div class="row">
       					<div class="col-sm-6 col-xs-6">
       						<h3 class="panel-title titlealumno">Alumno</h3>
       					</div>
       					<div class="col-sm-6 col-xs-6">
       						<a href="#" class="btn btn-default nuevoalumno ">
       							<span class="fa fa-user-plus" aria-hidden="true"></span> Registrar
       						</a>
       					</div>

       				</div>			
  				</div>
  				<div class="panel-body">
  				<div class="table-responsive">
            <table class="table">
              <thead>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Matricula</th>
                <th>Estatus</th>
                <th>Semestre</th>
                <th>Correo</th>
                <th>Opciones</th>
              </thead>
              <tbody>
              
              
              

             
              @foreach ($aaa as $al)
                <tr>
                    <td>{{$al->EST_estatus}}</td>
                </tr>
              @endforeach 
              
              </tbody>
            </table>
				</div>
  				</div>
			</div>


        </div>	

    </div>
</div>




@endsection