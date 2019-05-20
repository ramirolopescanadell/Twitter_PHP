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
	<form class="editarPerfil" action="Perfil.php" onsubmit="return validarContrasenas()" method="pos">
		<fieldset>
			<strong> Cambiar Contraseña </strong>
			<label for="contrasena"> Contraseña anterior: </label>
			<input type="password" placeholder="Contraseña anterior"  id="contraseniaAnt">
			<div id="error_contraseniaAnt"> </div>
			<label for="contraseña"> Nueva contraseña : </label>
			<input type="password" placeholder="Nueva Contraseña"  id="contrasenia" >
			<div id="error_contrasenia"> </div>
			<label for="contra"> Repetir contraseña : </label>
			<input type="password" placeholder="Confirmar contraseña" id="contrasenia2" >
			<div id="error_contrasenia2"> </div>
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