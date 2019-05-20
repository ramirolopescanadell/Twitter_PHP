<html>
	<head>
		<title> Perfil </title>
		<link rel="shortcut icon" type=image/x-icon" href="css/imagenes/TW.jpg">
		<link rel="stylesheet" href="css/icomoon/fonts/style.css">
		<link rel="stylesheet" type="text/css" href="css/perfil.css">
		<script src="js/validarDatos.js" type="text/javascript"> </script>
	</head>
<body>
	  <?php Include("Header.php"); ?>
  </br>
  <div class="caja">
      <div class="cajaImg">
		<img src= "css/imagenes/jimena.jpg">
	  </div>
	  <div class="otroUsuarioNombre">
	    <strong class="cajaStrong"> JimeVillanueva	 </strong >
		<p class="cajaP"> Jimena Villanueva </p>
		<a href="#" class="boton_seguir seguidosA"> <span class="icon-remove-user"> Dejar de seguir </span> </a>
	  </div>
  </div>
  <div class="muro muroUsuario">
  <strong class="muroStrong"> Mensajes de Jimena </strong>
  <div class="lineas">
		<img src="css/imagenes/jimena.jpg" class="muro_img">
		<p><a href="PerfilDeOtroUsuario.php" class="muro_nombre"> Jimena </a></p>
	<p class="muro_fecha"> domingo 5 de mayo, 17:15 </p>
		<p class="muro_mensaje"> quiero decirle a los muchaches que están leyendo este mensaje que lo estoy improvisando y es para ver cuanto ocupa un mensaje de 144 cdd </p>
		<div class="me_gusta">
			<a href="#" class="icono_mg"> <span class="icon-thumbs-up"> </span> </a> |
			<strong class="cant_mg"> 10 </strong> <span class="icon-heart"> </span>
		</div>
	 </div>
	 <div class="lineas">
		<img src="css/imagenes/jimena.jpg" class="muro_img">
		<p><a href="PerfilDeOtroUsuario.php" class="muro_nombre"> Jimena </a></p>
	<p class="muro_fecha">  domingo 5 de mayo, 17:15 </p>
		<p class="muro_mensaje"> hola buen dia grupo </p>
		<div class="me_gusta">
			<a href="#" class="icono_mg"> <span class="icon-thumbs-up"> </span> </a> |
			<strong class="cant_mg"> 10 </strong> <span class="icon-heart"> </span>
		</div>
	 </div>
  </div>
  <?php Include("Footer.php") ?> 
</body>
</html>