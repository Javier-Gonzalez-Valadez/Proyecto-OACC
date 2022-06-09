<?php include_once "cabecera.php"; ?>
<div class="row">
    <div>
        <h1>Registro de Usuarios</h1>
        <form action="registrar.php" method="POST">
            
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input placeholder="Nombre"  type="text" name="nombre" id="nombre" required>
            </div>

            <div class="form-group">
                <label for="nombre">Apellido</label>
                <input placeholder="Primer apellido"  type="text" name="apellido" id="apellido" required>
            </div>

            <div class="form-group">
                <label for="nombre">Correo</label>
                <input placeholder="Correo"  type="text" name="correo" id="correo" required>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre de usuario</label>
                <input placeholder="Nombre de usuario"  type="text" name="usuario" id="usuario" required>
            </div>

            <div class="form-group">
                <label for="nombre">Contraseña</label>
                <input placeholder="Contraseña"  type="text" name="contrasena" id="contrasena" required>
            </div>

            <div class="form-group"><button>Guardar</button></div>
        </form>
    </div>
</div>
<?php include_once "piePagina.php"; ?>