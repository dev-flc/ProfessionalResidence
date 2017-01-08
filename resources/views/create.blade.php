
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugin/dist/ui/trumbowyg.css') }}">
  <link rel="stylesheet" type="text/css"  href="{{ asset('plugin/login.css') }}" >
</head>

<body>


<br>
<br>
<br>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4">
    
  
    
    </div>





		<div class="col-sm-4">


<br>
    <br>
    @include('flash::message')

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  
    {!! Form::open(['route'=>'admin.auth.login', 'method'=>'POST','class'=>'login']) !!}
  <fieldset>
    <legend class="legend">Inisiar Sesión</legend>
    <div class="input">
      {!! Form::email('email',$useremail,['class'=>'','placeholder'=>'ejemplo@gmail.com','required']) !!}
     <!-- <input type="email" placeholder="Email" required /> -->
     <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
    </div>
    <div class="input">
  {!! Form::password('password',['class'=>'','placeholder'=>'***','required']) !!}
     <!-- <input type="password" placeholder="Password" required />-->
      <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
    </div>

     {{ Form::button('<span class="glyphicon glyphicon-ok"></span>', array('class'=>'submit', 'type'=>'submit')) }}

  </fieldset>
  <div class="feedback">
    conexion exitosa <br />
    redireccionando...
  </div>

    {!! Form::close() !!}





<!--
    
			<div class="panel panel-default">
  <div class="panel-heading">Inicio de Sesión</div>
  <div class="panel-body">
    {!! Form::open(['route'=>'admin.auth.login', 'method'=>'POST']) !!}
  <div class="form-group">
  
  {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'ejemplo@gmail.com']) !!}

  </div>

  <div class="form-group">
  {!! Form::password('password',['class'=>'form-control','placeholder'=>'***']) !!}
  </div>
  </div>
  <div class="panel-footer">
	 <style type="text/css">
    .btn-full
    {
      width: 100%;
    } 
   </style>
    {!! Form::submit('Acceder',['class'=>'btn btn-primary btn-full']) !!}
    {!! Form::close() !!}
  </div>
</div>

-->
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
<script  src="{{ asset('plugin/jquery/jquery-3.1.1.js') }}"></script>
<script  src="{{ asset('plugin/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript">
  $( ".input" ).focusin(function() {
  $( this ).find( "span" ).animate({"opacity":"0"}, 200);
});

$( ".input" ).focusout(function() {
  $( this ).find( "span" ).animate({"opacity":"1"}, 300);
});

$(".login").submit(function(){
  $(this).find(".submit").removeAttr('class').addClass("fa fa-check").css({"color":"#fff"});
  $(".submit").css({"background":"#2ecc71", "border-color":"#2ecc71"});
  $(".feedback").show().animate({"opacity":"1", "bottom":"-80px"}, 400);
  $("input").css({"border-color":"#2ecc71"});
  return true;
});
</script>
</body>
</html>