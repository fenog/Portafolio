<?php

$servidor = 'localhost';
$usuario = 'root';
$contraseña = '';
$base_de_datos = 'tuBuffet32';


$conex = mysqli_connect($servidor, $usuario,$contraseña, $base_de_datos);

if (!$conex) {
  die('Error de conexión: ' . mysqli_connect_error());
}
?>