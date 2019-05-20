<!DOCTYPE>
<html>
<head>
  <title> Inicio</title>
  <link rel="shortcut icon" type=image/x-icon" href="css/imagenes/TW.jpg">
  <link rel="stylesheet" type="text/css" href="css/perfil.css">
  <link rel="stylesheet" href="css/icomoon/fonts/style.css">
  <script src="js/validarDatos.js" type="text/javascript"> </script>
</head>
<body>
  <?php Include("Header.php"); ?>
  <div class="muro">
     <strong class="muroStrong"> Mensajes inicio </strong>
		<?php Include("nuevoMensaje.php") ?>
	<div class="lineas">
		<img src="css/imagenes/Rami.jpg" class="muro_img">
		<p><a href="PerfilDeOtroUsuario.php" class="muro_nombre"> Ramiro Lopes </a></p>
	<p class="muro_fecha"> domingo 5 de mayo, 15:17 </p>
		<p class="muro_mensaje"> quiero decirle a los muchaches que están leyendo este mensaje que lo estoy improvisando y es para ver cuanto ocupa un mensaje de 144 cdd </p>
		<div class="me_gusta">
			<a href="#" class="icono_mg"> <span class="icon-thumbs-up"> </span> </a> |
			<strong class="cant_mg"> 10 </strong> <span class="icon-heart"> </span>
		</div>
	 </div>
	 <div class="lineas"> 
		<img src="css/imagenes/jimena.jpg" class="muro_img">
		<p><a href="PerfilDeOtroUsuario.php" class="muro_nombre"> Jimena Villanueva </a></p>
		<p class="muro_fecha"> domingo 5 de mayo, 15:17 </p>
		<p class="muro_mensaje"> aqui les dejo una foto del futuro de Ramiro </p>
		<div class="muroImagenSubida">
			<img src="css/imagenes/pelado.jpg">
		</div>
		<div class="me_gusta">
			<a href="#" class="icono_mg"> <span class="icon-thumbs-up"> </span> </a> |
			<strong class="cant_mg"> 10 </strong> <span class="icon-heart"> </span>
		</div>
	 </div>
	 <div class="lineas"> 
		<img src="css/imagenes/Brad.jpg" class="muro_img">
		<p><a href="PerfilDeOtroUsuario.php" class="muro_nombre"> Nahuel Panigo </a></p>
		<p class="muro_fecha"> domingo 5 de mayo, 15:17</p>
		<p class="muro_mensaje"> Preguntar porque se me mueven los mensajes para arriba </p>
		<div class="me_gusta">
			<a href="#" class="icono_mg"> <span class="icon-thumbs-up"> </span> </a> |
			<strong class="cant_mg"> 10 </strong> <span class="icon-heart"> </span>
		</div>
	</div>
   </div>
  <?php Include("Footer.php") ?> 
</body>
</html>