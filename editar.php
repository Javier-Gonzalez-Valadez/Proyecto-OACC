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
<div class="row">
    <div>
        <h1>Actualizar Usuario</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $usuarios["id"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $usuarios["nombre"] ?>" placeholder="Nombre" type="text" name="nombre" id="nombre" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input value="<?php echo $usuarios["apellido"] ?>" placeholder="Apellido"  type="text" name="apellido" id="apellido" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo</label>
                <input value="<?php echo $usuarios["correo"] ?>" placeholder="Correo"  type="text" name="correo" id="correo" required>
            </div>

            <div class="form-group">
                <label for="usuario">Nombre de usuario</label>
                <input value="<?php echo $usuarios["usuario"] ?>" placeholder="Nombre de usuario"  type="text" name="usuario" id="usuario" required>
            </div>

            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input value="<?php echo $usuarios["contrasena"] ?>" placeholder="Contraseña"  type="text" name="contrasena" id="contrasena" required>
            </div>

            <div class="form-group">
                <button>Guardar</button>
                <a href="listar.php">Volver</a>
            </div>
        </form>
    </div>
</div>
<?php include_once "piePagina.php"; ?>