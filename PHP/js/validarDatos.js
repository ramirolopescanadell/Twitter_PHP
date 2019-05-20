function tieneNumeros(texto){
	var numeros="0123456789";
	for (i=0; i< texto.length; i++){
		 if (numeros.indexOf(texto.charAt(i),0)!=-1){
           return true;
	     }
	}
	return false;
}
function validarNombre(){
	var aux = document.getElementById("nombre").value;
    if(aux == ""){
		document.getElementById("error_nombre").innerHTML = "El nombre no puede ser vacío";
		return false;
	 }else if ( tieneNumeros(aux)) {
		document.getElementById("error_nombre").innerHTML = "El nombre contiene numeros";
		return false;
	} 
	document.getElementById("error_nombre").innerHTML ="";
	return true;
}
function validarApellido(){
	var aux = document.getElementById("apellido").value;
    if(aux == ""){
		document.getElementById("error_apellido").innerHTML = "El apellido no puede ser vacío";
		return false;
	 }else if ( tieneNumeros(aux)) {
		document.getElementById("error_apellido").innerHTML = "El apellido contiene numeros";
		return false;
	} 
	document.getElementById("error_apellido").innerHTML ="";
	return true;
}
function esMail(aux){
	var expr = /\w+@\w+\.+[a-z]/;
	if (expr.test(aux)){
		return true;
	}
	return false;
}
function validarEmail(){
	var aux = document.getElementById("email").value;
    if(aux == ""){
		document.getElementById("error_email").innerHTML = "El email no puede ser vacío";
		return false;
	}
	if(!esMail(aux)){
		document.getElementById("error_email").innerHTML = "El mail es incorrecto";
		return false;
	}
	document.getElementById("error_email").innerHTML ="";
	return true;
}
function tiene6Caracteres(texto){
	if (texto.length < 6){
		return false;
	}
	return true;
}	
function validarNombre_usuario(){
	var aux = document.getElementById("nombre_usuario").value;
    if(aux == ""){
		document.getElementById("error_nombre_usuario").innerHTML = "El nombre de usuario no puede ser vacío";
		return false;
	 }
	 else if (!tiene6Caracteres(aux)) {
		document.getElementById("error_nombre_usuario").innerHTML = "El nombre de usuario debe contener al menos 6 caracteres";
	   return false;
	 }
	document.getElementById("error_nombre_usuario").innerHTML ="";
	return true;
}
function contraseniasIguales(aux){
	var contrasenia1 = document.getElementById("contrasenia").value;
	if( aux == contrasenia1 ){
		return true;
	}
	return false;
}
function validarContra(){
	var aux = document.getElementById("contrasenia2").value;
    if(aux == ""){
		document.getElementById("error_contrasenia2").innerHTML = "ingrese segunda contrasenia";
		return false;
	 }else if ( !contraseniasIguales(aux)) {
		document.getElementById("error_contrasenia2").innerHTML = "Las contrasenias no coinciden";
		return false;
	} 
	document.getElementById("error_contrasenia2").innerHTML ="";
	return true;
}
function validarContrasenia(){
	var contrasenia = document.getElementById("contrasenia").value;
			if(contrasenia.length >= 6){		
				var mayuscula = false;
				var minuscula = false;
				var numeroOSimbolo = false;
				for(var i = 0;i<contrasenia.length;i++){
					if(contrasenia.charCodeAt(i) >= 65 && contrasenia.charCodeAt(i) <= 90){
						mayuscula = true;
					}
					else if(contrasenia.charCodeAt(i) >= 97 && contrasenia.charCodeAt(i) <= 122){
						minuscula = true;
					}
				    else if(contrasenia.charCodeAt(i) >= 48 && contrasenia.charCodeAt(i) <= 57){
						numeroOSimbolo = true;
					}
					else{
						numeroOSimbolo = true;
					}
				}
				if(mayuscula == true && minuscula == true && numeroOSimbolo == true ){
					document.getElementById("error_contrasenia").innerHTML = "";
					return true;
				}else if (!mayuscula){
					document.getElementById("error_contrasenia").innerHTML = "La contrasenia debe contener al menos una mayuscula";
		            return false;
				}else if(!minuscula){
					document.getElementById("error_contrasenia").innerHTML = "La contrasenia debe contener al menos una minuscula";
		            return false;
				}else {
					document.getElementById("error_contrasenia").innerHTML = "La contrasenia debe contener al menos un simbolo o un numero";
		            return false;
				}	
			}else {
			  document.getElementById("error_contrasenia").innerHTML = "La contrasenia debe tener 6 caracteres minimo";
		      return false;
			}
	return false;
}
function validarFoto(){
	var foto= document.getElementById("foto").value;
	if (foto == ""){
		document.getElementById("error_foto").innerHTML="Ingrese foto";
		return false;
	}
	document.getElementById("error_foto").innerHTML="";
	return true;
}	
function validar(){
	if(!validarFoto()){
	  return false;
	}
	if(!validarNombre()){
	  return false;
	}
		if(!validarApellido()){
	  return false;
	}
		if(!validarEmail()){
	  return false;
	}
		if(!validarNombre_usuario()){
	  return false;
	}
	if(!validarContrasenia()){
	  return false;
	}
	if(!validarContra()){
	  return false;
	}
	return true;
}
/* ESCRIBIR MENSAJE NUEVO*/
function validarMensaje(){
	var aux = document.getElementById("mensajeNuevo").value;
	var foto = document.getElementById("fotoNueva").value;
	if (aux.length == 0 && foto==""){
		document.getElementById("error_mensaje").innerHTML = "No se puede mandar un mensaje vacío";
		return false;
	}
	else if (aux.length > 140) {
		document.getElementById("error_mensaje").innerHTML = "No se puede escribir un mensaje de mas de 140 caracteres";
		return false;
    }
	return true;
}
/* INICIAR SESION */
function validarInicioDeSesion(){
	var nombre = document.getElementById("nombreDeUsuario").value;
	var contrasenia = document.getElementById("contrasenia").value;
	document.getElementById("error_nombre").innerHTML = "";
	document.getElementById("error_contrasenia").innerHTML = "";
	if(nombre == ""){
		document.getElementById("error_nombre").innerHTML = "Ingrese nombre de usuario";
		return false;
	}
	if(contrasenia==""){
		document.getElementById("error_contrasenia").innerHTML = "Ingrese contrasenia";
		return false;
	}
	return true;
}
/* Editar perfil*/
function validarPerfil(){
	if(!validarFoto()){
	   return false;
	}
	if(!validarNombre_usuario()){
	  return false;
	}
	if(!validarEmail()){
	  return false;
	}
	if(!validarNombre()){
	  return false;
	}
		if(!validarApellido()){
	  return false;
	}
	return true;
}
/* Cambiar contraseña*/
function validarContraseniaAnt(){
	var aux = document.getElementById("contraseniaAnt").value;
    if(aux == ""){
		document.getElementById("error_contraseniaAnt").innerHTML = "La contraseña no puede ser vacía";
		return false;
	}
	document.getElementById("error_contraseniaAnt").innerHTML ="";
	return true;
}
function validarContrasenas(){
	if(!validarContraseniaAnt()){
	  return false;
	}
	if(!validarContrasenia()){
	  return false;
	}
	if(!validarContra()){
	  return false;
	}
}