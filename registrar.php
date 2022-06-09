<?php
$mysqli = include_once "conexion.php";
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$contrasena= $_POST["contrasena"];

$query = $mysqli->prepare ("INSERT INTO `usuarios` (`nombre`, `apellido`, `correo`, `usuario`, `contrasena`)
VALUES ('$nombre', '$apellido', '$correo', '$usuario', '$contrasena')");

$query->execute();
header("Location: listar.php");

?>