<?php include_once "cabecera.php"; ?>
<head>
    <link href="assets/Recursos/estiloForm.css" rel="stylesheet" type="text/css"> 
    <link href="https://fonts.googleapis.com/css2?family=Kumar+One+Outline&amp;display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6aaca85f05.js" crossorigin="anonymous"></script>
</head>
<body>
    <header >
        
        <nav class="navbar" style="font-size:28px;">
            <div class="container-fluid">
                <span class="navbar-text " >
                    <p class="text-white" >REGISTRO DE USUARIOS</p>
                </span>
            </div>
        </nav>
    </header><br><br>

    <div class="first">
        <div class="container-fluid container w-100" >
            <div class="row" style="">
                <div class="col-lg-6 fondo" style="margin-left:80px;">
                    <img src="assets/Recursos/imagenes/fondo.jpg">
                </div>
                <div class="col-lg-3" style= "text-align:center;margin-left:-40px;margin-top:50px;">
                    <div class="usuarios"><h1>Ingresar Datos</h2></div>
                    <form action="registrar.php" method="POST" style="padding-top:40px;margin-top:50px;">
                        <div class="mb-3">
                            
                            <input placeholder="Nombre"  type="text" name="nombre" id="nombre" required>
                        </div>

                        <div class="mb-3">
                        
                            <input placeholder="Primer apellido"  type="text" name="apellido" id="apellido" required>
                        </div>

                        <div class="mb-3">
                            
                            <input placeholder="Correo"  type="text" name="correo" id="correo" required>
                        </div>

                        <div class="mb-3">
                            
                            <input placeholder="Nombre de usuario"  type="text" name="usuario" id="usuario" required>
                        </div>

                        <div class="mb-3">
                            
                            <input placeholder="Contraseña"  type="text" name="contrasena" id="contrasena" required>
                        </div>
                        <br>

                        <div class="mb-3">
                        <div class="form-group" style=""><button>Guardar</button></div>
                        <div class="form-group" style="padding-top:10px;"><a href="listar.php">Regresar</a></div> 
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    <footer>
        <p>Organizacion y Administracion de Centros de Computo</p>
        <p>Proyecto Final - FES Aragon - UNAM</p>
        <p>Grupo: 2809</p>
    </footer>
</body>
<?php ?>