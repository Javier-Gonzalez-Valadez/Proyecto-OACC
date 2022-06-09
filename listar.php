<?php
include_once "cabecera.php";

$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT id, nombre, apellido, correo, usuario, contrasena FROM usuarios");
$usuarios = $resultado->fetch_all(MYSQLI_ASSOC);
?>

<header>
    <nav class="navbar" style="background-color: #6f42c1">
        <div class="container-fluid">
            <span class="navbar-text " >
                 <h2 class="text-white" >LISTA DE USUARIOS</h2>
            </span>
        </div>
    </nav>
</header>

<div class="justify-contet-center">
    <div class="container-md"><br><br>
        <a  class="btn btn-md btn-success" href="formulario_registrar.php">Agregar nuevo</a>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Nombre de usuario</th>
                    <th>Contraseña</th>
                    <th>Detalles</th>
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
                        <td class="aline-center">
                            <a class="btn btn-light btn-sm btn-outline-info" href="vista_leer.php?id=<?php echo $usuarios["id"] ?>">Ver</a>
                        </td>
                        <td>
                            <a class="btn btn-light btn-sm btn-outline-warning" href="editar.php?id=<?php echo $usuarios["id"] ?>">Editar</a>
                        </td>
                        <td>
                            <a  class="btn btn-light btn-sm btn-outline-danger" href="eliminar.php?id=<?php echo $usuarios["id"] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "piePagina.php" ?>