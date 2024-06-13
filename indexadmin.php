<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Metadatos -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/logo-sinfondo.png">
    <!-- Titulo -->
    <title>Tu Buffet 32</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>

<header>
    
    
    <!-- Navbar -->
    <div class="menu-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a href="index.php">
                    <img src="images/logo-sinfondo.png" alt="Logo" width="70" height="70">
                    <a class="navbar-brand" href="index.php">TuBuffet32</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#promos-container">Promos</a></li>
                                    <li><a class="dropdown-item" href="#minutas-container">Minutas</a></li>
                                    <li><a class="dropdown-item" href="#bebidas-container">Bebidas</a></li>
                                    <li><a class="dropdown-item" href="#snacks-container">Snacks</a></li>
                                    <li><a class="dropdown-item" href="#postres-container">Postres</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="images/usuario.png" alt="Perfil" width="30" height="30"></a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="pages/perfil/index.html">Cuenta</a></li>
                                    <li><a class="dropdown-item" href="#">Configuracion</a></li>
                                    <li><a class="dropdown-item" href="index.php">Cerrar sesion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
        </nav>
    </div>

    <!-- Promoción -->
    <div class="header-content container">
        <div class="header-txt">
            <h1>Tu Buffet 32</h1>
            <p>
                bienvenido a la cuenta de administracion
            </p>
        </div>
    </header>
    <!-- Menú -->
    <main class="product-menu">

        <div class="container">

            <div class="product">
                <h2 class="title">Menú</h2>
                <img class="hoja" src="images/hoja.png" alt="Hoja">
            </div>

            <div class="menu-nav">
                <div id="pro1" class="tab active" data-categoria="Todos">Todos</div>
                <div id="pro2" class="tab" data-categoria="Promos">Promos</div>
                <div id="pro3" class="tab" data-categoria="Minutas">Minutas</div>
                <div id="pro4" class="tab" data-categoria="Bebidas">Bebidas</div>
                <div id="pro5" class="tab" data-categoria="Snacks">Snacks</div>
                <div id="pro6" class="tab" data-categoria="Postres">Postres</div>
            </div>

			<!-- Productos -->
			<div class="container md-5">
				<div class="row" style="justify-content: space-between ">

					<div id="promos-container" class="pro1 tab-content">
						<div class="box-container-1">
							<div class="row row-cols-1 row-cols-md-4 g-0">
                            <div class="card m-4" style="width=30 height=30">
									<form id="formulario" name="formulario" method="post" action="addproducto.php">
										<div class="card-body">
											<button class="btn btn-primary" type="submit">
												<img src="images/agregar.png" class="card-img-top" alt="images/agregar.jpeg"></button>
										</div>
									</form>
								</div>


                                                        <?php         
                                                              require 'database/database.php';
                                                                $sql = "SELECT p.id_produc, p.nombreP, p.PrecioP, p.cantidad, p.categoria, p.descripcion, i.ruta AS imagen FROM producto AS p LEFT JOIN imagenes AS i ON p.imagen_id = i.id;";
                                                            $servidor = 'localhost';
                                                            $usuario = 'root';
                                                            $contraseña = '';
                                                            $base_de_datos = 'tuBuffet32';
                                                            $conex = mysqli_connect($servidor, $usuario,$contraseña, $base_de_datos);
                                                            $resultado = $conex->query($sql);
                                                            if ($resultado->num_rows > 0) {
                                                                
                                                                while ($fila = $resultado->fetch_assoc()) {
                                                                    $idProducto = $fila["id_produc"];
                                                                    $nombreProducto = $fila["nombreP"];
                                                                    $precioProducto = $fila["PrecioP"];
                                                                    $cantidadProducto = $fila["cantidad"];
                                                                    $categoriaProducto = $fila["categoria"];
                                                                    $descripcionProducto = $fila["descripcion"];
                                                                    $imagenProducto = $fila["imagen"];
                                                                   
                                                                    echo '<div class="col-md-3">'; 
                                                                    echo '<div class="card m-4" style="width: 100%;max-width: 270px;>';
                                                                    echo '<form id="formulario" name="formulario" method="post" action="cart.php">';
                                                                    echo '<input name="precio" type="hidden" id="precio" value="' . $precioProducto . '" />';
                                                                    echo '<input name="titulo" type="hidden" id="titulo" value="' . $nombreProducto . '" />';
                                                                    echo '<input name="descripcion" type="hidden" id="descripcion" value="' . $nombreProducto . '" />';
                                                                    echo '<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />';
                                                                    echo '<img src="' . $imagenProducto . '" class="card-img-top" alt="' . $nombreProducto . '">';
                                                                    echo '<div class="card-body">';
                                                                    echo '<h3 class="card-title">' . $nombreProducto . '</h3>';
                                                                    echo '<p class="card-text">Precio $' . $precioProducto . '</p>';
                                                                    echo '<p class="card-text">Descripcion: ' . $descripcionProducto . '</p>';
                                                                    echo '<p class="card-text">cantidad: ' . $cantidadProducto . '</p>';
                                                                    echo '</div>';
                                                                    echo '</form>';
                                                                    echo '</div>';
                                                                    echo '</div>';
                                                                    
                                                                }
                                                                echo '</div>';
                                                            } else {
                                                                echo 'No se encontraron productos.';
                                                            }
                                                        ?>
							</div>
						</div>


					</div>

					<div id="minutas-container" class="pro2 tab-content">
						<div class="box-container-2">
							<div class="row row-cols-1 row-cols-md-4 g-0">

                            <?php         
                                                              require 'database/database.php';
                                                                $sql = "SELECT p.id_produc, p.nombreP, p.PrecioP, p.cantidad, p.categoria, p.descripcion, i.ruta AS imagen FROM producto AS p LEFT JOIN imagenes AS i ON p.imagen_id = i.id where p.categoria='promo';";
                                                            $servidor = 'localhost';
                                                            $usuario = 'root';
                                                            $contraseña = '';
                                                            $base_de_datos = 'tuBuffet32';
                                                            $conex = mysqli_connect($servidor, $usuario,$contraseña, $base_de_datos);
                                                            $resultado = $conex->query($sql);
                                                            if ($resultado->num_rows > 0) {
                                                                
                                                                while ($fila = $resultado->fetch_assoc()) {
                                                                    $idProducto = $fila["id_produc"];
                                                                    $nombreProducto = $fila["nombreP"];
                                                                    $precioProducto = $fila["PrecioP"];
                                                                    $cantidadProducto = $fila["cantidad"];
                                                                    $categoriaProducto = $fila["categoria"];
                                                                    $descripcionProducto = $fila["descripcion"];
                                                                    $imagenProducto = $fila["imagen"];
                                                                   
                                                                    echo '<div class="col-md-3">'; 
                                                                    echo '<div class="card m-4" style="width: 100%;max-width: 270px;>';
                                                                    echo '<form id="formulario" name="formulario" method="post" action="cart.php">';
                                                                    echo '<input name="precio" type="hidden" id="precio" value="' . $precioProducto . '" />';
                                                                    echo '<input name="titulo" type="hidden" id="titulo" value="' . $nombreProducto . '" />';
                                                                    echo '<input name="descripcion" type="hidden" id="descripcion" value="' . $nombreProducto . '" />';
                                                                    echo '<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />';
                                                                    echo '<img src="' . $imagenProducto . '" class="card-img-top" alt="' . $nombreProducto . '">';
                                                                    echo '<div class="card-body">';
                                                                    echo '<h3 class="card-title">' . $nombreProducto . '</h3>';
                                                                    echo '<p class="card-text">Precio $' . $precioProducto . '</p>';
                                                                    echo '<p class="card-text">Descripcion: ' . $descripcionProducto . '</p>';
                                                                    echo '<p class="card-text">cantidad: ' . $cantidadProducto . '</p>';
                                                                    echo '</div>';
                                                                    echo '</form>';
                                                                    echo '</div>';
                                                                    echo '</div>';
                                                                    
                                                                }
                                                                echo '</div>';
                                                            } else {
                                                                echo 'No se encontraron productos.';
                                                            }
                                                        ?>
							</div>
						</div>
						
					</div>

					<div id="bebidas-container" class="pro3 tab-content">
						<div class="box-container-3">
							<div class="row row-cols-1 row-cols-md-4 g-0">

                            <?php         
                                                              require 'database/database.php';
                                                                $sql = "SELECT p.id_produc, p.nombreP, p.PrecioP, p.cantidad, p.categoria, p.descripcion, i.ruta AS imagen FROM producto AS p LEFT JOIN imagenes AS i ON p.imagen_id = i.id where p.categoria='minuta';";
                                                            $servidor = 'localhost';
                                                            $usuario = 'root';
                                                            $contraseña = '';
                                                            $base_de_datos = 'tuBuffet32';
                                                            $conex = mysqli_connect($servidor, $usuario,$contraseña, $base_de_datos);
                                                            $resultado = $conex->query($sql);
                                                            if ($resultado->num_rows > 0) {
                                                                
                                                                while ($fila = $resultado->fetch_assoc()) {
                                                                    $idProducto = $fila["id_produc"];
                                                                    $nombreProducto = $fila["nombreP"];
                                                                    $precioProducto = $fila["PrecioP"];
                                                                    $cantidadProducto = $fila["cantidad"];
                                                                    $categoriaProducto = $fila["categoria"];
                                                                    $descripcionProducto = $fila["descripcion"];
                                                                    $imagenProducto = $fila["imagen"];
                                                                   
                                                                    echo '<div class="col-md-3">'; 
                                                                    echo '<div class="card m-4" style="width: 100%;max-width: 270px;>';
                                                                    echo '<form id="formulario" name="formulario" method="post" action="cart.php">';
                                                                    echo '<input name="precio" type="hidden" id="precio" value="' . $precioProducto . '" />';
                                                                    echo '<input name="titulo" type="hidden" id="titulo" value="' . $nombreProducto . '" />';
                                                                    echo '<input name="descripcion" type="hidden" id="descripcion" value="' . $nombreProducto . '" />';
                                                                    echo '<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />';
                                                                    echo '<img src="' . $imagenProducto . '" class="card-img-top" alt="' . $nombreProducto . '">';
                                                                    echo '<div class="card-body">';
                                                                    echo '<h3 class="card-title">' . $nombreProducto . '</h3>';
                                                                    echo '<p class="card-text">Precio $' . $precioProducto . '</p>';
                                                                    echo '<p class="card-text">Descripcion: ' . $descripcionProducto . '</p>';
                                                                    echo '<p class="card-text">cantidad: ' . $cantidadProducto . '</p>';
                                                                    echo '</div>';
                                                                    echo '</form>';
                                                                    echo '</div>';
                                                                    echo '</div>';
                                                                    
                                                                }
                                                                echo '</div>';
                                                            } else {
                                                                echo 'No se encontraron productos.';
                                                            }
                                                        ?>

								

							</div>
						</div>
						
					</div>

					<div id="snacks-container" class="pro4 tab-content">
						<div class="box-container-4">
							<div class="row row-cols-1 row-cols-md-4 g-0">

                                                            <?php         
                                                              require 'database/database.php';
                                                                $sql = "SELECT p.id_produc, p.nombreP, p.PrecioP, p.cantidad, p.categoria, p.descripcion, i.ruta AS imagen FROM producto AS p LEFT JOIN imagenes AS i ON p.imagen_id = i.id where p.categoria='bebidas';";
                                                            $servidor = 'localhost';
                                                            $usuario = 'root';
                                                            $contraseña = '';
                                                            $base_de_datos = 'tuBuffet32';
                                                            $conex = mysqli_connect($servidor, $usuario,$contraseña, $base_de_datos);
                                                            $resultado = $conex->query($sql);
                                                            if ($resultado->num_rows > 0) {
                                                                
                                                                while ($fila = $resultado->fetch_assoc()) {
                                                                    $idProducto = $fila["id_produc"];
                                                                    $nombreProducto = $fila["nombreP"];
                                                                    $precioProducto = $fila["PrecioP"];
                                                                    $cantidadProducto = $fila["cantidad"];
                                                                    $categoriaProducto = $fila["categoria"];
                                                                    $descripcionProducto = $fila["descripcion"];
                                                                    $imagenProducto = $fila["imagen"];
                                                                   
                                                                    echo '<div class="col-md-3">'; 
                                                                    echo '<div class="card m-4" style="width: 100%;max-width: 270px;>';
                                                                    echo '<form id="formulario" name="formulario" method="post" action="cart.php">';
                                                                    echo '<input name="precio" type="hidden" id="precio" value="' . $precioProducto . '" />';
                                                                    echo '<input name="titulo" type="hidden" id="titulo" value="' . $nombreProducto . '" />';
                                                                    echo '<input name="descripcion" type="hidden" id="descripcion" value="' . $nombreProducto . '" />';
                                                                    echo '<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />';
                                                                    echo '<img src="' . $imagenProducto . '" class="card-img-top" alt="' . $nombreProducto . '">';
                                                                    echo '<div class="card-body">';
                                                                    echo '<h3 class="card-title">' . $nombreProducto . '</h3>';
                                                                    echo '<p class="card-text">Precio $' . $precioProducto . '</p>';
                                                                    echo '<p class="card-text">Descripcion: ' . $descripcionProducto . '</p>';
                                                                    echo '<p class="card-text">cantidad: ' . $cantidadProducto . '</p>';
                                                                    echo '</div>';
                                                                    echo '</form>';
                                                                    echo '</div>';
                                                                    echo '</div>';
                                                                    
                                                                }
                                                                echo '</div>';
                                                            } else {
                                                                echo 'No se encontraron productos.';
                                                            }
                                                        ?>

								

								</div>
						</div>
						
					</div>

					<div id="postres-container" class="pro5 tab-content">
						<div class="box-container-5">
							<div class="row row-cols-1 row-cols-md-4 g-0">

                            <?php         
                                                              require 'database/database.php';
                                                                $sql = "SELECT p.id_produc, p.nombreP, p.PrecioP, p.cantidad, p.categoria, p.descripcion, i.ruta AS imagen FROM producto AS p LEFT JOIN imagenes AS i ON p.imagen_id = i.id where p.categoria='snacks';";
                                                            $servidor = 'localhost';
                                                            $usuario = 'root';
                                                            $contraseña = '';
                                                            $base_de_datos = 'tuBuffet32';
                                                            $conex = mysqli_connect($servidor, $usuario,$contraseña, $base_de_datos);
                                                            $resultado = $conex->query($sql);
                                                            if ($resultado->num_rows > 0) {
                                                                
                                                                while ($fila = $resultado->fetch_assoc()) {
                                                                    $idProducto = $fila["id_produc"];
                                                                    $nombreProducto = $fila["nombreP"];
                                                                    $precioProducto = $fila["PrecioP"];
                                                                    $cantidadProducto = $fila["cantidad"];
                                                                    $categoriaProducto = $fila["categoria"];
                                                                    $descripcionProducto = $fila["descripcion"];
                                                                    $imagenProducto = $fila["imagen"];
                                                                   
                                                                    echo '<div class="col-md-3">'; 
                                                                    echo '<div class="card m-4" style="width: 100%;max-width: 270px;>';
                                                                    echo '<form id="formulario" name="formulario" method="post" action="cart.php">';
                                                                    echo '<input name="precio" type="hidden" id="precio" value="' . $precioProducto . '" />';
                                                                    echo '<input name="titulo" type="hidden" id="titulo" value="' . $nombreProducto . '" />';
                                                                    echo '<input name="descripcion" type="hidden" id="descripcion" value="' . $nombreProducto . '" />';
                                                                    echo '<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />';
                                                                    echo '<img src="' . $imagenProducto . '" class="card-img-top" alt="' . $nombreProducto . '">';
                                                                    echo '<div class="card-body">';
                                                                    echo '<h3 class="card-title">' . $nombreProducto . '</h3>';
                                                                    echo '<p class="card-text">Precio $' . $precioProducto . '</p>';
                                                                    echo '<p class="card-text">Descripcion: ' . $descripcionProducto . '</p>';
                                                                    echo '<p class="card-text">cantidad: ' . $cantidadProducto . '</p>';
                                                                    echo '</div>';
                                                                    echo '</form>';
                                                                    echo '</div>';
                                                                    echo '</div>';
                                                                    
                                                                }
                                                                echo '</div>';
                                                            } else {
                                                                echo 'No se encontraron productos.';
                                                            }
                                                        ?>

							</div>
						</div>
						
					</div>

                    <div id="postres-container" class="pro6 tab-content">
						<div class="box-container-5">
							<div class="row row-cols-1 row-cols-md-4 g-0">

                            <?php         
                                                              require 'database/database.php';
                                                                $sql = "SELECT p.id_produc, p.nombreP, p.PrecioP, p.cantidad, p.categoria, p.descripcion, i.ruta AS imagen FROM producto AS p LEFT JOIN imagenes AS i ON p.imagen_id = i.id where p.categoria='postre';";
                                                            $servidor = 'localhost';
                                                            $usuario = 'root';
                                                            $contraseña = '';
                                                            $base_de_datos = 'tuBuffet32';
                                                            $conex = mysqli_connect($servidor, $usuario,$contraseña, $base_de_datos);
                                                            $resultado = $conex->query($sql);
                                                            if ($resultado->num_rows > 0) {
                                                                
                                                                while ($fila = $resultado->fetch_assoc()) {
                                                                    $idProducto = $fila["id_produc"];
                                                                    $nombreProducto = $fila["nombreP"];
                                                                    $precioProducto = $fila["PrecioP"];
                                                                    $cantidadProducto = $fila["cantidad"];
                                                                    $categoriaProducto = $fila["categoria"];
                                                                    $descripcionProducto = $fila["descripcion"];
                                                                    $imagenProducto = $fila["imagen"];
                                                                   
                                                                    echo '<div class="col-md-3">'; 
                                                                    echo '<div class="card m-4" style="width: 100%;max-width: 270px;>';
                                                                    echo '<form id="formulario" name="formulario" method="post" action="cart.php">';
                                                                    echo '<input name="precio" type="hidden" id="precio" value="' . $precioProducto . '" />';
                                                                    echo '<input name="titulo" type="hidden" id="titulo" value="' . $nombreProducto . '" />';
                                                                    echo '<input name="descripcion" type="hidden" id="descripcion" value="' . $nombreProducto . '" />';
                                                                    echo '<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />';
                                                                    echo '<img src="' . $imagenProducto . '" class="card-img-top" alt="' . $nombreProducto . '">';
                                                                    echo '<div class="card-body">';
                                                                    echo '<h3 class="card-title">' . $nombreProducto . '</h3>';
                                                                    echo '<p class="card-text">Precio $' . $precioProducto . '</p>';
                                                                    echo '<p class="card-text">Descripcion: ' . $descripcionProducto . '</p>';
                                                                    echo '<p class="card-text">cantidad: ' . $cantidadProducto . '</p>';
                                                                    echo '</div>';
                                                                    echo '</form>';
                                                                    echo '</div>';
                                                                    echo '</div>';
                                                                    
                                                                }
                                                                echo '</div>';
                                                            } else {
                                                                echo 'No se encontraron productos.';
                                                            }
                                                        ?>

							</div>
						</div>
						<div class="load-more" id="load-more-1">Cargar Mas</div>
					</div>



				</div>
			</div>                                                                 
            </div>
        </div>
    </main>

    <!-- Información -->
    <section class="info">

        <div class="info-content container">
            <div class="info-txt">
                <p>Información</p>
                <h2>Desarrolladores</h2>

                <div class="info-sec">
                    <div class="info-1">
                        <img src="images/usuario.png" alt="usuario AF">
                        <div class="info-2">
                            <h3>Axel Joel Fenoglio</h3>
                            <p>
                                frontend y backend
                            </p>
                        </div>
                    </div>
                    <div class="info-1">
                        <img src="images/usuario.png" alt="usuario LR">
                        <div class="info-2">
                            <h3>Lucas Javier Rojas Liambo</h3>
                            <p>
                                frontend y backend
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="info-img">
                <img src="images/info.png" alt="">
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Compañia</h4>
                    <ul>
                        <li><a href="pages/faqs/compañia.html">Nosotros</a></li>
                        <li><a href="pages/faqs/compañia.html">Nuestros Serviciós</a></li>
                        <li><a href="pages/faqs/compañia.html">Póliticas De Privacidad</a></li>
                        <li><a href="pages/faqs/compañia.html">Afiliate</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Ayuda</h4>
                    <ul>
                        <li><a href="pages/faqs/ayuda.html">Preguntas</a></li>
                        <li><a href="pages/faqs/ayuda.html">Compras</a></li>
                        <li><a href="pages/faqs/ayuda.html">Estado de la Orden</a></li>
                        <li><a href="pages/faqs/ayuda.html">Pago</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Productos</h4>
                    <ul>
                        <li><a href="pages/faqs/productos.html">Minutas</a></li>
                        <li><a href="pages/faqs/productos.html">Bebidas</a></li>
                        <li><a href="pages/faqs/productos.html">Snacks</a></li>
                        <li><a href="pages/faqs/productos.html">Postres</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Redes Sociales</h4>
                    <div class="social-links">
                        <a href="https://es-la.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://github.com/javierliambo/Rojas-Fenoglio-Desarrollo-Sistema.git"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="./java_script/script.js"></script>
    <!-- JavaScript Promos -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- JavaScript Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>


