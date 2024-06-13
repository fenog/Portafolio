DROP DATABASE IF EXISTS tuBuffet32;
CREATE DATABASE tuBuffet32;
USE tuBuffet32;

CREATE TABLE perfil (
  id_perfil INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  apellido VARCHAR(100),
  DNI INT,
  email VARCHAR(100),
  telefono INT,
  permisos BOOLEAN DEFAULT FALSE,
  contraseña VARCHAR(100)
);

CREATE TABLE pedido (
  id_pedido INT AUTO_INCREMENT PRIMARY KEY,
  id_cliente INT,
  id_produc INT,
  precio INT,
  fecha DATE,
  ListaPedido VARCHAR(50)
);

CREATE TABLE imagenes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255),
  ruta VARCHAR(255)
);

CREATE TABLE producto (
  id_produc INT AUTO_INCREMENT PRIMARY KEY,
  nombreP VARCHAR(50),
  PrecioP INT,
  cantidad INT,
  categoria VARCHAR(50),
  descripcion VARCHAR(1000),
  imagen_id INT,
  FOREIGN KEY (imagen_id) REFERENCES imagenes(id)
);

INSERT INTO perfil VALUES (1, "admin", " ", 1, "admin@gmail.com", 1, 1, "admin");