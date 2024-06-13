<?php
require_once "../../database/database.php";

if (isset($_POST['register'])) {
    if (
        !empty($_POST['nombre']) &&
        !empty($_POST['apellido']) &&
        !empty($_POST['DNI']) &&
        !empty($_POST['email']) &&
        !empty($_POST['telefono']) &&
        !empty($_POST['contraseña'])
    ) {

        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $DNI = trim($_POST['DNI']);
        $email = trim($_POST['email']);
        $telefono = trim($_POST['telefono']);
        $contraseña = trim($_POST['contraseña']);
        $sql = "INSERT INTO perfil(nombre, apellido, DNI, email, telefono, contraseña) VALUES ('$nombre','$apellido','$DNI','$email','$telefono','$contraseña');";
        $resultado = mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("location: ../../indexLogueadisimo.php");
    }
}
