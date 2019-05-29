<?php


$servidor="localhost";
$usuario="root";
$pass="";
$bd="bolsatrabajo";

$conexion = new mysqli($servidor, $usuario, $pass, $bd);
	  mysqli_set_charset($conexion,"utf8");/*Permite leer los acentos correctamente desde la BD */

if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
}else{
	//echo "Conectado...";
}


?>