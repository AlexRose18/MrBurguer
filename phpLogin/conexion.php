<?php
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "mrburguer";
$tbl_name = "clientes";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
// Seleccion de la base de datos
mysqli_select_db($conexion, $db_name) or die('Cannot select database');
?>
