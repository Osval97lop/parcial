
<?php
$usuario = "root";
$contraseña = "";
$servidor = "localhost:3309";
$basededatos = "control_asistencia";

$conexion = mysqli_connect( $servidor, $usuario, "") or die ("Nose se puede conectar al servidor");
$db = mysqli_select_db($conexion,$basededatos) or die ("No se puede conectar la base de datos");