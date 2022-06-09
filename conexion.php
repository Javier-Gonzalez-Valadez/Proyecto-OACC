<?php
$host = "localhost";
$usuario = "root";
$contrasenia = "";
$base_de_datos = "registro_usuarios";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_error) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_error . ") " . $mysqli->connect_error;
}
return $mysqli;

?>