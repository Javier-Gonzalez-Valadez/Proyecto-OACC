<?php
include_once "cabecera.php";
$mysqli = include_once "conexion.php";
$id = $_GET["id"];
$query = $mysqli->prepare("SELECT id, nombre, apellido, correo, usuario, contrasena FROM usuarios WHERE id = ?");
$query->bind_param("i", $id);
$query->execute();
$resultado = $query->get_result();
?>

<div>
    <div>
        <h1>Informacion sobre usuario</h1>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Nombre de usuario</th>
                    <th>Contraseña</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($resultado as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario["id"] ?></td>
                        <td><?php echo $usuario["nombre"] ?></td>
                        <td><?php echo $usuario["apellido"] ?></td>
                        <td><?php echo $usuario["correo"] ?></td>
                        <td><?php echo $usuario["usuario"] ?></td>
                        <td><?php echo $usuario["contrasena"] ?></td>
                        <td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="form-group">
            <a href="listar.php">Volver</a>
        </div>
    </div>
</div>
<?php include_once "piePagina.php" ?>