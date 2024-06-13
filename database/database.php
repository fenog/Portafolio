<?php

$servidor = 'localhost';
$usuario = 'root';
$contraseña = '';
$base_de_datos = 'tuBuffet32';


$conn = mysqli_connect($servidor, $usuario,$contraseña, $base_de_datos);

if (!$conn) {
  die('Error de conexión: ' . mysqli_connect_error());
}
?>