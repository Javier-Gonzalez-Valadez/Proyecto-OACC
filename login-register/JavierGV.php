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
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Javier Gonzalez Valadez</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="styleJGV.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src='main.js'></script>
</head>
<body class="cuerpo">
    <Style>
        .cuerpo{
            background-image: url('assets/recursos/BG-JGV.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: scroll;
            
        }
        .primerDiv{
            background-image: url('assets/recursos/BGCentral.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: scroll;
            border-radius: 3% ;
            width: 97%;
            height: 750px;
            margin: auto;
            margin-top: 40px;
        }
    </Style>

    <div class="primerDiv">
    <div class="central">
        
            <div class="caja1 caja">
                <h1>Javier Gonzalez Valadez</h1>
                <hr style="margin-top: -45px;">
                <p class="subtitulo">Perfil:</p>
                <p>Numero de Cuenta: 316177001</p>                
                <p class="subtitulo">Hobbies:</p>
                <ul>
                    <li>Tocar Piano</li>
                    <li>Pasear en Bicicleta</li>
                    <li>Jugar Videojuegos</li>
                </ul>
                <p class="subtitulo">Contacto:</p>
                <p>javiergonzalez01@aragon.unam.mx</p>  
            </div>


            <div class="caja2 caja">
                <p  class="subtitulo">Tecnologías:</p>
                <ul class="listaContacto">
                    <li>Java</li>
                    <li>Python</li>
                    <li>C, C++</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript (En aprendizaje)</li>
                    <li>MySQL</li>
                    <li>NodeJS</li>
                </ul>
                <img src="assets/recursos/TILogos.jpg"> 
                <img src="assets/recursos/JavaLogo.jpg" class="java">
            </div>


            <div class="caja3 caja">
                <img src="https://www.fightersgeneration.com/characters2/iori-regularwind.gif">

            </div>
        <a href="php/cerrar_sesion.php">Cerrar Sesion</a>
    </div>
    </div>
</body>
</html>