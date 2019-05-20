<?php
//archivo para conectarse a la base de datos.
function conectar(){
	$link =  mysqli_connect('localhost', 'root','','TheWall')
	or die("Error ". mysqli_error($link));
	return $link;
}
?>