<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: JavierGV.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>
<body>
    <main>
        <!--Caja que gusradara todas las demas cajas, es la caja base mas externa-->
        <div class="contenedor__todo">
            <!--Caja donde descansaran las cajas visuales-->
            <div class="caja__trasera"> 
                <!--Caja donde se inicia sesion-->
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes cuenta?</h3>
                    <p>Inicia Sesión</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>

                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes cuenta?</h3>
                    <p>Registrate para iniciar sesion</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>


            <!--Formulario donde se logean y registran -->
            <div class="contenedor__login-register">
                <!--Formulario donde se ingresan datos para iniciar sesion-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo electrónico" name="correo"> 
                    <input type="password" placeholder="Contraseña" name ="contrasena"> 
                    <button type="submit">Entrar</button>
                </form>
                <!--Formulario donde se ingresan datos para registrarse por primera vez-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrate</h2>
                    <input type="text" placeholder="Nombre completo" name ="nombre_completo">
                    <input type="text" placeholder="Correo electronico" name="correo">
                    <input type="text" placeholder="Usuario" name ="usuario">
                    <input type="password" placeholder="Contraseña" name ="contrasena">
                    <button>Registrarse</button>
                </fomr>
            </div>         
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>