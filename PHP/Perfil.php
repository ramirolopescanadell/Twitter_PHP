<html>
	<head>
		<title> Perfil </title>
		<link rel="shortcut icon" type=image/x-icon" href="css/imagenes/TW.jpg">
		<link rel="stylesheet" type="text/css" href="css/perfil.css">
		<link rel="stylesheet" href="css/icomoon/fonts/style.css">
		<script src="js/validarDatos.js" type="text/javascript"> </script>
	</head>
<body>
	 <?php Include("Header.php"); ?>
  <div class="caja">
	<div class="cajaImg">
      <img src= "css/imagenes/Rami.jpg">
	</div>
	<strong class="cajaStrong"> Ramiro Lopes</strong >
	<p class="cajaP"> Ramiro Lopes Canadell</p>
	<nav class="cajaNav">
		<a href="Seguidos.php"> <span class="icon-users"> </span> Seguidos </a>
		<a href="EditarPerfil.php"> <span class="icon-cog"> </span> Editar perfil </a>
	</nav>
  </div>
  <div class= "muro muroUsuario">
      <strong class="muroStrong"> Mis mensajes </strong>
	
	<?php Include("nuevoMensaje.php") ?>
	  <?php session_start();
			include("ConexionTW.php");
			$link = conectar();
			$array = $_SESSION['usuario'];
			$id = $array['id'];
			$consulta = "SELECT u.nombreusuario, m.* FROM mensaje m INNER JOIN usuarios u ON (m.usuarios_id = u.id) WHERE usuarios_id= $id";
			$resultado= mysqli_query($link,$consulta);
			if(mysqli_num_rows($resultado) == 0){
				echo "El usuario no tiene mensajes";
			}
			while ($mensaje = mysqli_fetch_array($resultado)): ?>
				<div class="lineas">
				<img src="css/imagenes/Rami.jpg" class="muro_img">
				<p><a href="Perfil.php" class="muro_nombre"> <?php echo $mensaje['nombreusuario'] ?> </a></p>
				<p class="muro_fecha"> <?php echo $mensaje['fechayhora'] ?> </p>
				<p class="muro_mensaje"> <?php echo $mensaje['texto']?> </p>
				<?php if(!empty ($mensaje['imagen_contenido'])): ?>
				<div class="muroImagenSubida">
					<img src="MostrarImagen.php?id=<?php echo $mensaje['id']?>">
				</div>
				<?php endif ?>
				<div class="me_gusta">
					<a href="#" class="icono_mg"> <span class="icon-thumbs-up"> </span> </a> |
					<strong class="cant_mg"> <?php $consulta= "SELECT COUNT(mensaje_id) as cantidad FROM me_gusta WHERE mensaje_id = $mensaje[id]";
					$megustas = mysqli_query($link,$consulta);
					$cantidad = mysqli_fetch_array($megustas);	
					echo $cantidad['cantidad'];	?></strong> <span class="icon-heart"> </span>
				</div>
				<a href="#" class="boton_decoracion"> <span class="icon-trash"> </span>Eliminar mensaje </a>
				</div>
			<?php endwhile ?>
  </div>
  <?php Include("Footer.php") ?> 
</body>
</html>