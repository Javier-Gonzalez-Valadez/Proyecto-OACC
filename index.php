<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="http://localhost/Proyecto-OACC/assets/bootstrap/css/bootstrap.min.css">
    <link href="assets/Recursos/estiloIndex.css" rel="stylesheet" type="text/css"> 
    <link href="https://fonts.googleapis.com/css2?family=Kumar+One+Outline&amp;display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6aaca85f05.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="cabeza">
        <h1 style="padding-top:10px;padding-left:60px;color:aqua;">CRUD - OACC</h1>
        <nav class="navbar navbar-expand-lg" style=padding-left:60px;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="formulario_registrar.php" style="color: #fff;">Registrar Nuevos Usuarios</a>
                        </li>
                        <li class="nav-item texto" style="padding-left:25px;">
                            <a class="nav-link" style="color: #fff;" href="listar.php">Editar Registros</a>
                        </li>
                        <li class="nav-item dropdown" style="padding-left:25px;">
                            <a class="nav-link dropdown-toggle"  style="color: #fff;" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Más Opciones
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="listar.php">Ver Usuarios</a>
                                    <a class="dropdown-item" href="listar.php">Modificar Usuarios</a>
                                    <a class="dropdown-item" href="listar.php">Eliminar Usuarios</a>
                            </div>
                        </li>
                    </ul>
                </div>
    </nav>
    <hr style="color:#fff;">
    </div>
    <div class="container">
    
        <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7 main" >
                <p class="texto" style="font-size: 40px;"><b>Proyecto Final - Implementacion</b></p>
                <p class="texto" style="font-size: 40px;"><b>Organizacion y Administracion de Centros de Computo</b></p>
                <div class="integrantes" style="font-size: 18px;">
                    <h4 class="format" style="padding-top:30px;">Integrantes</h4>
                    <div style="text-align:center;">
                        <ul class="format list">
                            <li >Adrian Gonzalez Corona</li>
                            <li >Javier Gonzalez Valadez</li>
                        </ul>
                    </div>
                </div>
                <div style="widt:100%">
                    <h3 class="format" style="color: gold;">CRUD</h3> 
                </div>
                <div style="widt:100%" class="format">
                    <p>Insertar</p>
                    <p>Ver</p>
                    <p>Modificar</p>
                    <p>Eliminar</p>
                </div>
                <div class="" style="width:100%;text-align:center;"><button style="padding: 10px 45px;border-radius:20%;"><a  href="listar.php" style="text-decoration:none;color:rgba(0, 17, 255, 0.982)">CRUD</a></button></div>
            </div>
        </div>
    </div>



    <script src="http://localhost/Proyecto-OACC/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>