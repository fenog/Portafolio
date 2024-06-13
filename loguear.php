<?php
session_start();
require 'conec.php';
$eemail = $_POST['mailform'];
$contraseña = $_POST['passform'];
$sql = "SELECT * FROM perfil WHERE email = \"$eemail\";";
$resultado = mysqli_query($conn, $sql);
if ($resultado->num_rows > 0) {

    $row = mysqli_fetch_assoc($resultado);
    $passBase = $row['contraseña'];
    if ($contraseña == $passBase) {
        header("location: indexLogueadisimo.html");
    } else {
        $_SESSION['loggedin'] = false;
    }
} else {
    $_SESSION['loggedin'] = false;
    header("location: FormularioRegistro.php");
}
mysqli_close($conn);
?>