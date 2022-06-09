<?php
$mysqli = include_once "conexion.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

$query = $mysqli->prepare ("UPDATE `usuarios` SET 
`nombre` = '$nombre', 
`apellido` = '$apellido', 
`correo` = '$correo', 
`usuario` = '$usuario', 
`contrasena` = '$contrasena' 
WHERE id = ?");

$query->bind_param("i", $id);
$query->execute();
header("Location: listar.php");

?>
