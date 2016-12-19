
function validaLogin()
{
	var verificar = true;
	var nameExpre=/^([a-z ñáéíóú]{2,60})$/i;
	var passExpre=/(^(?=.*[a-z])(?=.*[A-Z])(?=.*\d){6,20}.+$)/;
	var emailExpre=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;	

	var nombre = document.getElementById("nombre");
	var email = document.getElementById("email");
	var pass = document.getElementById("pass");
	var passverifica = document.getElementById("passverifica");
	
	if(!nombre.value){
		//document.getElementById('divnombre').className += 'form-group has-error';
		nombre.setAttribute("style", "outline:none;border-color:red");
		
		document.getElementById('errores').innerHTML = '<strong>* Upss..!</strong> El campo usuario esta vacío';
		nombre.focus();
		verificar=false;
	} 
	else if (!nameExpre.exec(nombre.value)) {
		nombre.setAttribute("style", "outline:none;border-color:red");
		document.getElementById('errores').innerHTML = '<strong>* Upss..! El campo usuario solo acepta letras</strong>';
		nombre.focus();
		verificar=false;
	}

	else if(!email.value){
		email.setAttribute("style", "outline:none;border-color:red");
		document.getElementById('errores').innerHTML = '<strong>* Upss..!</strong> El campo email esta vacío';
		email.focus();
		verificar=false;
	} 
	else if (!emailExpre.exec(email.value)) {
		email.setAttribute("style", "outline:none;border-color:red");
		document.getElementById('errores').innerHTML = '<strong>* Upss..! El email no es valido</strong>';
		email.focus();
		verificar=false;
	}
	else if(!pass.value){
		pass.setAttribute("style", "outline:none;border-color:red"); 
		document.getElementById('errores').innerHTML = '<strong>* Upss..!</strong> El campo contraseña esta vacío';
		pass.focus();
		verificar=false;
	} 
	else if (!passExpre.exec(pass.value)) {
		pass.setAttribute("style", "outline:none;border-color:red"); 
		document.getElementById('errores').innerHTML = '<strong>* Upss..!</strong> la contrasena es debil';
		pass.focus();
		verificar=false;
	}
	else if(!passverifica.value){
		passverifica.setAttribute("style", "outline:none;border-color:red");   
		document.getElementById('errores').innerHTML = '<strong>* Upss..!</strong> El campo verificar contraseña esta vacío';
		passverifica.focus();
		verificar=false;
	} 
	else if(pass.value!=passverifica.value)
	{
		passverifica.setAttribute("style", "outline:none;border-color:red");   
		document.getElementById('errores').innerHTML = '<strong>* Upss..!</strong> las contraseñas no coincide';
		passverifica.focus();
		verificar=false;
	}

	if(verificar==true) 
	{
		document.loginform.submit();
	}
}


window.onload = function()
{
	var buttonEnviar;
	buttonEnviar= document.getElementById('enviar');
	buttonEnviar.onclick= validaLogin;
}