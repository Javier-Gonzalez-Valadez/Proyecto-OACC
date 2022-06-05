<?php 
    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo_electronico = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    //Aqui se ecnripta la contraseña , para que no siga apareciendo como texto
    $contrasena = hash('sha512', $contrasena);
    
    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)  
              VALUES('$nombre_completo', '$correo_electronico', '$usuario', '$contrasena')";
    //Hacer verificaciones para que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo_electronico'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado a un usuario, intente agregando otro");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }
    //Hacer que el nombre de usuario no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este usuario ya esta registrado a un usuario, intente agregando otro");
                window.location = "../index.php"; 
            </script>
        ';
        exit();
    }

    
    $ejecutar = mysqli_query($conexion, $query);          
    
    if( $ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php"; 
            </script>
        '; 

    }else{
        echo '
            alert("Intentelo de nuevo, no se pudo registrar el nuevo usuario");
            window.location ="../index.php";
        ';

    }

    mysqli_close($conexion);

    
?>