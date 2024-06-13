<?php
session_start();
require '../../database/database.php';
$eemail = $_POST['mailform'];
$contraseña = $_POST['passform'];
$sql = "SELECT * FROM perfil WHERE email = \"$eemail\";";
$admin = "SELECT permisos FROM perfil WHERE email = \"$eemail\";";

$resultado = mysqli_query($conn, $sql);
$resultado2 = mysqli_query($conn, $admin);
if ($resultado->num_rows > 0) {

    $rowadmin = mysqli_fetch_assoc($resultado2);
    $row = mysqli_fetch_assoc($resultado);
    $passBase = $row['contraseña'];
    $adminis = $rowadmin['permisos'];
    if ($contraseña == $passBase) {
        if ($adminis == 1) {
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = true;
            $_SESSION['nombre'] = true;
            header("location: ../../indexadmin.php");
        } else {
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = true;
            $_SESSION['nombre'] = true;
            header("location: ../../indexLogueadisimo.php");
        }
    } else {
        $_SESSION['loggedin'] = false;
        header("location: indexLogueo.php?error=true");
    }
} else {
    $_SESSION['loggedin'] = false;
    header("location: indexLogueo.php?error=true");
}
mysqli_close($conn);
