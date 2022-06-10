<?php
include_once "cabecera.php";
$mysqli = include_once "conexion.php";
$id = $_GET["id"];
$query = $mysqli->prepare("SELECT id, nombre, apellido, correo, usuario, contrasena FROM usuarios WHERE id = ?");
$query->bind_param("i", $id);
$query->execute();
$resultado = $query->get_result();
?>
<head>
    <link href="assets/Recursos/estiloLeer.css" rel="stylesheet" type="text/css">  
</head>
<body>
    <header>
        <nav class="navbar" style="background-color: #6f42c1">
            <div class="container-fluid">
                <span class="navbar-text " >
                    <h2 class="text-white" >INFORMACION DE USUARIOS</h2>
                </span>
            </div>
        </nav>
    </header>

    <div class="justify-contet-center">
        <div class="container-md"><br><br>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
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
                            <td class="aline-center">
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <div class="form-group">
                <a class="btn btn-md btn-outline-secondary" href="listar.php" style="background-color:blue;color: white;border:white;display:block;margin-left:500px;margin-right:500px;">Volver</a>
            </div>
        </div>
    </div>
    <footer>
        <p>Organizacion y Administracion de Centros de Computo</p>
        <p>Proyecto Final - FES Aragon - UNAM</p>
        <p>Grupo: 2809</p>
    </footer>
</body>
<?php?>