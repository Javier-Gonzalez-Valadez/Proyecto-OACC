<?php include_once "cabecera.php"; ?>

<header>
    <nav class="navbar" style="background-color: #6f42c1">
        <div class="container-fluid">
            <span class="navbar-text " >
                 <h2 class="text-white" >REGISTRO DE USUARIOS</h2>
            </span>
        </div>
    </nav>
</header><br><br>

<div >
    <div class="container-fluid">
        <form action="registrar.php" method="POST">
            
            <div class="mb-3">
                <label class="form-label" for="nombre">Nombre</label>
                <input placeholder="Nombre"  type="text" name="nombre" id="nombre" required>
            </div>

            <div class="mb-3">
                <label for="nombre">Apellido</label>
                <input placeholder="Primer apellido"  type="text" name="apellido" id="apellido" required>
            </div>

            <div class="mb-3">
                <label for="nombre">Correo</label>
                <input placeholder="Correo"  type="text" name="correo" id="correo" required>
            </div>

            <div class="mb-3">
                <label for="nombre">Nombre de usuario</label>
                <input placeholder="Nombre de usuario"  type="text" name="usuario" id="usuario" required>
            </div>

            <div class="mb-3">
                <label for="nombre">Contraseña</label>
                <input placeholder="Contraseña"  type="text" name="contrasena" id="contrasena" required>
            </div>
            <br>

            <div class="mb-3">
            <div class="form-group"><button>Guardar</button></div>
            </div>
        </form>
    </div>
</div>
<?php include_once "piePagina.php"; ?>