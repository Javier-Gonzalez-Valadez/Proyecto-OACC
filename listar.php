<?php
include_once "cabecera.php";

$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT id, nombre, apellido, correo, usuario, contrasena FROM usuarios");
$usuarios = $resultado->fetch_all(MYSQLI_ASSOC);
?>
<div>
    <div>
        <h1>Listado de usuarios</h1>
    </div>
    <div >
        <a href="formulario_registrar.php">Agregar nuevo</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Nombre de usuario</th>
                    <th>Contraseña</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($usuarios as $usuarios) { ?>
                    <tr>
                        <td><?php echo $usuarios["id"] ?></td>
                        <td><?php echo $usuarios["nombre"] ?></td>
                        <td><?php echo $usuarios["apellido"] ?></td>
                        <td><?php echo $usuarios["correo"] ?></td>
                        <td><?php echo $usuarios["usuario"] ?></td>
                        <td><?php echo $usuarios["contrasena"] ?></td>
                        <td>
                            <a href="vista_leer.php?id=<?php echo $usuarios["id"] ?>">Detalles</a>
                        </td>
                        <td>
                            <a href="editar.php?id=<?php echo $usuarios["id"] ?>">Editar</a>
                        </td>
                        <td>
                            <a href="eliminar.php?id=<?php echo $usuarios["id"] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "piePagina.php" ?>