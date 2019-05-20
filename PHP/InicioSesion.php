<?php session_start(); ?>
<html>
<head>
  <title> The Wall </title>
  <link rel="shortcut icon" type="image/x-icon" href="css/imagenes/tw.jpg">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <script src="js/validarDatos.js" type="text/javascript"> </script>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
</head>
<body>
  <div class="titulo">
  <h1> Welcome to The Wall </h1>
  </div>
  <?php if(isset($_SESSION['exito'])){
	  echo $_SESSION['exito'];
	  unset($_SESSION['exito']);
  }?>
  <div class="formulario">
  <h2> Iniciar sesion</h2>
  <form name="login" action="ProcesarLogIn.php" onsubmit="return validarInicioDeSesion()" method="post">
    <fieldset>
	 <input type="text" name="usuario" id= "nombreDeUsuario"placeholder="Nombre de usuario">
	 <div id="error_nombre"> </div>
	 <input type="password" id="contrasenia" name="contrasenia" placeholder="Contrase&#241a">
	 <div id="error_contrasenia"> </div>
	 <input type="submit" value="Iniciar sesion">
	</fieldset>
  </form>
  <p> &#191 No tiene cuenta? <a href='registrarse.php'> Registrarse </a> </p>
  <div class="datosInvalidos">
	<?php if(isset($_SESSION['error'])){
			echo $_SESSION['error'];
			unset($_SESSION['error']);
		}
	?>  
  </div>
    </div>
	<?php Include("Footer.php") ?> 
</body>
</html>