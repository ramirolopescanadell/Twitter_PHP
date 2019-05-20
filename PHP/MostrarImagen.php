<?php 
	// se recibe el valor que identifica la imagen en la tabla
	$id = $_GET['id']; 
	$link = mysqli_connect('localhost', 'root', '','thewall');

	// se recupera la información de la imagen
	$consulta = "SELECT imagen_contenido, imagen_tipo 
		FROM mensaje
		WHERE id=$id"; 

	$result = mysqli_query($link, $consulta); 
	$row = mysqli_fetch_array($result); 
	mysqli_close($link); 

	// se imprime la imagen y se le avisa al navegador que lo que se está 
	// enviando no es texto, sino que es una imagen de un tipo en particular
	header("Content-type: " . $row['imagen_tipo']); 
	echo $row['imagen_contenido']; 
?>