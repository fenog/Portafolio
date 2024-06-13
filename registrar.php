<?php
require_once "conec.php";

if (isset($_POST['register'])) {
    if (
        !empty($_POST['nombre']) &&
        !empty($_POST['email']) &&
        !empty($_POST['contraseña'])
    ) {

        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $contraseña = trim($_POST['contraseña']);
        
        $sql = "INSERT INTO perfil(id_perfil, nombre, email, contraseña) VALUES (null,'$nombre','$email','$contraseña');";
        $resultado = mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("location: indexLogueadisimo.php");
    }
}
?>
