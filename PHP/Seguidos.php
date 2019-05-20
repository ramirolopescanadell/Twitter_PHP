<html>
	<head>
		<title> Seguidos </title>
		<link rel="shortcut icon" type=image/x-icon" href="css/imagenes/TW.jpg">
		<link rel="stylesheet" type="text/css" href="css/perfil.css">
		<link rel="stylesheet" href="css/icomoon/fonts/style.css">
		<script src="js/validarDatos.js" type="text/javascript"> </script>
	</head>
<body>
	 <?php Include("Header.php"); ?>
  <div class="muro muro_usuarios">
	<h1 class="h1_seguidos"> Seguidos </h1>
	  <div class="usuarios">
	    <div class="imagen2">
	   <img src="css/imagenes/jimena.jpg" >
	   </div>
	   
	   <a href="PerfilDeOtroUsuario.php"  class="usuario_strong"> Jimena Villanueva</a>
       <a href="#" class="usuario_seguir seguidosA"><span class="icon-remove-user"> Dejar de seguir </span> </a>
	   </div>
	   <div class="usuarios">
	   <div class="imagen2">
			<img src="css/imagenes/Brad.jpg" >
	   </div>
	   <a href="PerfilDeOtroUsuario.php"class="usuario_strong"> Nahuel Panigo </a>
       <a href="#" class="usuario_seguir seguidosA"> <span class="icon-remove-user"> Dejar de seguir </span> </a>
	   </div>
  </div>
  <?php Include("Footer.php") ?> 
</body>
</html>