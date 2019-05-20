<?php session_start(); ?>
<html>
<head>
  <title> The Wall </title>
  <link rel="shortcut icon" type=image/x-icon" href="css/imagenes/tw.jpg">
  <link rel="stylesheet" type="text/css" href="css/estilos1.css">
  <script src="js/validarDatos.js" type="text/javascript"> </script>
</head>
<body>
  <div class="titulo">
  <h1> Welcome to The Wall </h1>
  </div>
  <div class="caja">
  <form action="ProcesarRegistrar.php" onsubmit="return valida()" method="post">
    <fieldset>
	 <strong> Registrarse </strong>
	 <div class="foto"> 
	 <img src= "css/imagenes/icono.png" >
	 </br>
	 <input type="file" name="foto" id="foto" >
	 <div id="error_foto"> 
	 <?php if(isset($_SESSION['errorFoto'])){
		 echo $_SESSION['errorFoto'];
		 unset($_SESSION['errorFoto']);
		} ?></div>
	 </div>
	 <div class="separacion">
	 <br>
	 <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo (isset($_SESSION['nombre']))?  $_SESSION['nombre']:''?>">
	 <div id="error_nombre"> <?php if(isset($_SESSION['errorNombre'])){
		 echo $_SESSION['errorNombre'];
		 unset($_SESSION['errorNombre']);
		} ?> </div>
	 <input type="text" name="apellido" id="apellido" placeholder="Apellido">
	 <div id="error_apellido"> <?php if(isset($_SESSION['errorApellido'])){
		 echo $_SESSION['errorApellido'];
		 unset($_SESSION['errorApellido']);
		} ?> </div>
	 <input type="text" name="email" id="email"placeholder="Email">
     <div id="error_email">  <?php if(isset($_SESSION['errorEmail'])){
		 echo $_SESSION['errorEmail'];
		 unset($_SESSION['errorEmail']);
		} ?></div>	 
	 <input type="text" name="nombre_usuario" id="nombre_usuario" placeholder="Nombre de usuario" value="<?php echo (isset($_SESSION['nombreUsuario']))?  $_SESSION['nombreUsuario']:''?>">
	 <div id="error_nombre_usuario"> <?php if(isset($_SESSION['errorNombreUsuario'])){
		 echo $_SESSION['errorNombreUsuario'];
		 unset($_SESSION['errorNombreUsuario']);
		} ?> </div>
	 <input type="password" name="contrasenia" id="contrasenia"placeholder="Contraseña">
	 <div id="error_contrasenia"> <?php if(isset($_SESSION['errorContrasenia'])){
		 echo $_SESSION['errorContrasenia'];
		 unset($_SESSION['errorContrasenia']);
		} ?> </div>
	 <input type="password" name="contrasenia2" id="contrasenia2"placeholder="Confirmar contraseña"><br><br>
	 <div id="error_contrasenia2">  <?php if(isset($_SESSION['errorContrasenia2'])){
		 echo $_SESSION['errorContrasenia2'];
		 unset($_SESSION['errorContrasenia2']);
		} ?>
		</div>
     </div>
	 <input type="submit" value="Registrarse" class="registrarse">
	</fieldset>
	</form>
    <p class="cartel"> ¿Ya está registrado? <a href='InicioSesion.php'> Iniciar Sesion </a> </p>
    </div>
	<div class="error_registrarse">
	</div>
	<?php Include("Footer.php") ?> 
</body>
</html>