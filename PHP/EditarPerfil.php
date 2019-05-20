<html>
	<head>
		<title> The wall </title>
		<link rel="shortcut icon" type=image/x-icon" href="css/imagenes/tw.jpg">
		<link rel="stylesheet" type="text/css" href="css/perfil.css">
		<link rel="stylesheet" type="text/css" href="css/estilos1.css">
		<link rel="stylesheet" href="css/icomoon/fonts/style.css">
		  <script src="js/validarDatos.js" type="text/javascript"> </script>
	</head>
<body>
	<?php Include("Header.php"); ?>
  <div class="caja2">
  <form class="editarPerfil" action="Perfil.php" onsubmit="return validarPerfil()" method="pos">
	<fieldset>
	<strong> Editar Perfil </strong>
	<div class="foto"> 
		<img src= "css/imagenes/Rami.jpg" >
		</br>
		<input type="file" name="foto" id="foto">
		 <div id="error_foto"> </div>
	</div>
	<label for="nombre"> Editar nombre de Usuario: </label>
	<input type="text" placeholder="Nombre de Usuario " name="nombre_usuario"id="nombre_usuario" > 
	
	<div id="error_nombre_usuario"> </div>
	<label for="email"> Editar email : </label>
	  <input type="email" placeholder="Email " id="email" >
	  <div id="error_email"> </div>	 
	  <label for="nom"> Editar nombre : </label>
	 <input type="text" placeholder="Nombre " id="nombre" >
	 <div id="error_nombre"> </div>
	  <label for="apellido"> Editar apellido : </label>
	 <input type="text" placeholder="Apellido" id="apellido" >
	 <a href="CambiarContrasenia.php" > Cambiar Contraseña </a>
	 <div id="error_apellido"> </div>
	<div class="botones">
	<input type="submit" value="Guardar cambios ">
	 <input type="submit" value="Cancelar">
	 </div>
	 </form>
	 </fieldset>
  </div>
  <?php Include("Footer.php") ?> 
</body>
</html>