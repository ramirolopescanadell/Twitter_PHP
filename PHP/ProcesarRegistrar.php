<?php
//validar los datos como en javaScript
	session_start();
	include("ConexionTW.php");
	$link = conectar();
	
	function validarNombreUsuario(){
		$nombreUsuario = $_POST['nombre_usuario'];
		$_SESSION['nombreUsuario'] = $_POST['nombre_usuario'];
		if((ctype_alnum($nombreUsuario)) && (strlen($nombreUsuario)> 6)){
			return true;
		}
		$_SESSION['errorNombreUsuario'] = "El nombre de usuario debe ser alfanumerico y de 6 caracteres";
		header("Location: registrarse.php");
		exit;
	}
	function validarContrasenia(){
		$contrasenia = $_POST['contrasenia'];
		$expr= "/((?=.*\d)||(?=.*[\u0021-\u002b\u003c-\u0040]))(?=.*[A-Z])(?=.*[a-z])\S{6,}$/";
		if(!empty($contrasenia)){
			 return (preg_match($expr, $contrasenia));
		}
		return false;
	}
	function validarSegundaContrasenia(){
		$contrasenia = $_POST['contrasenia'];
		$contrasenia2 = $_POST['contrasenia2'];
		if(!empty($contrasenia2)){
			 return ($contrasenia == $contrasenia2);
		}
		return false;
	}
	function validarFoto(){
	$foto=$_POST['foto'];
		if(!empty ($foto)){
			return true;
		}
		return false;
	}
	function validarNombre(){
		$nombre=$_POST['nombre'];
		$_SESSION['nombre'] = $_POST['nombre'];
		$numeros="/^(?=(?:.*\d){1})/g";
		if(!empty($nombre)){
			return(preg_match($numeros,$nombre));
		}
		return false;
	}
	function validarApellido(){
		$apellido=$_POST['apellido'];
		$numeros="/^(?=(?:.*\d){1})/g";
		if(!empty($apellido)){
			return(preg_match($numeros,$apellido));
		}
		return false;
	}
	function validarDatos(){
		
		if(!validarFoto()){
			$_SESSION['errorFoto'] ="se debe seleccionar una imagen ";
			header("Location: registrarse.php");
			return false;
		}
		if(!validarNombre()){
			$_SESSION['errorNombre'] ="el nombre no puede tener numeros ";
			header("Location: registrarse.php");
			return false;
		}
			if(!validarApellido()){
			$_SESSION['errorApellido'] ="el apellido no puede tener numeros ";
			header("Location: registrarse.php");
			return false;
		}
		if(!validarContrasenia()){
			$_SESSION['errorContrasenia'] ="la contrasenia no respeta formato";
			header("Location: registrarse.php");
			return false;
		}
		if(!validarSegundaContrasenia()){
			$_SESSION['errorContrasenia'] ="la contrasenia no respeta formato";
			header("Location: registrarse.php");
			return false;
		}
		if(!validarSegundaContrasenia()){
			$_SESSION['errorContrasenia2'] ="las contrasenias no coinciden";
			header("Location: registrarse.php");
			exit;
			return false;
		}
	}
	if(validarNombreUsuario()){
		$consulta = "SELECT nombreusuario FROM usuarios WHERE nombreusuario= '$_POST[nombre_usuario]'"; 
		$resultado = mysqli_query($link, $consulta); //envia una consulta 
		if(mysqli_num_rows($resultado) ==1){
			$_SESSION['errorNombreUsuario'] ="el nombre de usuario ingresado ya existe";
			header("Location: registrarse.php");
			exit;
		}else if(validarDatos()){
			$contrasenia = $_POST['constrasenia'];
			$hash = password_hash($contrasenia, PASSWORD_BCRYPT);
			$foto = explode(".", $_POST['foto']);
			$consulta = "INSERT INTO usuarios (apellido, nombre,email ,nombreusuario ,contrasenia, foto_contenido, foto_tipo) VALUE('$_POST[apellido]','$_POST[nombre]','$_POST[email]','$_POST[nombre_usuario]','$hash', '$_POST[foto]' , '$foto[1]')";
			if(mysqli_query($link,$consulta)){
				$_SESSION["exito"] = "Se a registrado con éxito! Inicie sesion con el nombre de usuario ". $_POST['nombre_usuario'];	
				header("Location: InicioSesion.php");
				exit;
			}
		}
	}
?>