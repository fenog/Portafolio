DROP DATABASE IF EXISTS pp;
CREATE DATABASE pp;
USE pp;

CREATE TABLE perfil (
  id_perfil INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  email VARCHAR(100),
  contraseña VARCHAR(100)
);
