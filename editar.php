<?php
include_once "cabecera.php";
$mysqli = include_once "conexion.php";
$id = $_GET["id"];
$query = $mysqli->prepare("SELECT id, nombre, apellido, correo, usuario, contrasena FROM usuarios WHERE id = ?");
$query->bind_param("i", $id);
$query->execute();
$resultado = $query->get_result();
# Obtenemos solo una fila, que será el usuario a editar
$usuarios = $resultado->fetch_assoc();
if (!$usuarios) {
    exit("No hay resultados para ese ID");
}

?>
<head>
    <link href="assets/Recursos/estiloEditar.css" rel="stylesheet" type="text/css"> 
    <link href="https://fonts.googleapis.com/css2?family=Kumar+One+Outline&amp;display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6aaca85f05.js" crossorigin="anonymous"></script>
</head>
<body>
    <header >
        <nav class="navbar" style="font-size:28px;">
            <div class="container-fluid">
                <span class="navbar-text">
                    <p class="text-white">ACTUALIZAR USUARIOS</p>
                </span>
            </div>
        </nav>
    </header><br><br>
    <div class="container main" style="text-align:center;">
        <div class="row texto">
            <h1>Actualize Registro</h1>
                <form class="texto"action="actualizar.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $usuarios["id"] ?>">
                    <div class="form-group">
                        <label for="nombre"><p style="display:inline-block;">Nombre</p><p class="vacio">-------------</p></label>
                        <input value="<?php echo $usuarios["nombre"] ?>" placeholder="Nombre" type="text" name="nombre" id="nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="apellido"><p style="display:inline-block;">Apellido</p><p class="vacio">-------------</p></label>
                        <input value="<?php echo $usuarios["apellido"] ?>" placeholder="Apellido"  type="text" name="apellido" id="apellido" required>
                    </div>

                    <div class="form-group">
                        <label for="correo"><p style="display:inline-block;">Correo</p><p class="vacio">---------------</p></label>
                        <input value="<?php echo $usuarios["correo"] ?>" placeholder="Correo"  type="text" name="correo" id="correo" required>
                    </div>

                    <div class="form-group">
                        <label for="usuario"><p>Nombre De Usuario</p></label>
                        <input value="<?php echo $usuarios["usuario"] ?>" placeholder="Nombre de usuario"  type="text" name="usuario" id="usuario" required>
                    </div>

                    <div class="form-group">
                        <label for="contrasena"><p style="display:inline-block;">Contraseña</p><p class="vacio">----------</p></label>
                        <input value="<?php echo $usuarios["contrasena"] ?>" placeholder="Contraseña"  type="text" name="contrasena" id="contrasena" required>
                    </div>

                    <div class="form-group">
                        <button>Guardar</button>
                        
                    </div>
                    <a href="listar.php" style="">Volver</a>
                </form>
            
        </div>
    </div>
    <footer>
        <p>Organizacion y Administracion de Centros de Computo</p>
        <p>Proyecto Final - FES Aragon - UNAM</p>
        <p>Grupo: 2809</p>
    </footer>
</body>
<?php?>