// JavaScript Document

function validar(){
	var nombre, email, usuarioreg, passwordreg, expresion;
	nombre = document.getElementById("nombre").value;
	email = document.getElementById("email").value;
	usuarioreg = document.getElementById("usuarioreg").value;
	passwordreg = document.getElementById("passwordreg").value;
	expresion = /\w+@\w+\.[a-z]/;
	
	if (nombre==="" || email==="" || usuarioreg==="" || passwordreg==="" ){
		alert("Todos los campos son obligatorios");
		return false;
	}
	
	else if (!expresion.test(email)){
		alert("El correo no es válido");
		return false;
	}

}