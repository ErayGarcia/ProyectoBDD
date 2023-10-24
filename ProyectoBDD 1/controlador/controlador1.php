<?php
if (!empty($_POST["btningresar"])) {
    if (empty($_POST["nombreUsuario"]) || empty($_POST["contraseña"])) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTÁN VACÍOS</div>';
    } else {
        $usuario = $_POST["nombreUsuario"];
        $clave = $_POST["contraseña"];
        $sql = $conexion->query("SELECT * FROM usuario WHERE nombreUsuario = '$usuario' AND contraseña = '$clave' ");
        if ($datos = $sql->fetch_object()) {
            // Iniciar una sesión y guardar los datos del usuario
            session_start();
            $_SESSION["id"] = $datos ->id;
            $_SESSION["nombre"]= $datos -> nombreUsuario;
            header("location: ./vistas/inicio.php");
        } else {
            echo '<div class="alert alert-danger">Acceso denegado</div>';
        }
    }
}
?>