<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Porfavor debes inicar sesion");
                window.location="index.php";
            </script>
        ';
        session_destroy();
        die();
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida - Raider</title>
</head>
<body>
    <h1>Bienvenido a mi mundo </h1>
    <a href="php/cerrar_sesion.php">Cerrar Sesion</a>
</body>
</html>