<?php 	
	session_start();
	include("ConexionTW.php");
	$link = conectar();
	$consulta = "SELECT id ,nombreusuario, nombre, apellido FROM usuarios WHERE nombreusuario = '$_POST[usuario]'  and contrasenia='$_POST[contrasenia]'  "; 
	$resultado = mysqli_query($link, $consulta); 
	if(mysqli_num_rows($resultado)==1){
		$_SESSION['usuario'] = mysqli_fetch_array ($resultado); 
		header("Location: Index.php");
		exit;
	}else{
		$_SESSION['error'] ="El nombre de usuario y contrasenia son incorrectos";
		header("Location: InicioSesion.php");
		exit;
	}
?>