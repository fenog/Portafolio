<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Metadatos -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Slider -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmt/E0iPtmFIB46ZmdtAc9eNBvH0H/zPIbW==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/logo-sinfondo.png">
	<!-- Titulo -->
	<title>Tu Buffet 32</title>
	<!-- CSS -->
	<link rel="stylesheet" href="./style/style.css">
	<link rel="stylesheet" href="./style/promos-style.css">
	<!-- Footer -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>

	<?php if (isset($_SESSION['carrito'])) {
		$carrito_mio = $_SESSION['carrito'];
		// $_SESSION['carrito']=$carrito_mio;
	}

	// contamos nuestro carrito
	if (isset($_SESSION['carrito'])) {
		for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
			if (isset($carrito_mio[$i])) {
				if ($carrito_mio[$i] != NULL) {
					if (!isset($carrito_mio['cantidad'])) {
						$carrito_mio['cantidad'] = '0';
					} else {
						$carrito_mio['cantidad'] = $carrito_mio['cantidad'];
					}
					$total_cantidad = $carrito_mio['cantidad'];
					$total_cantidad++;
					if (!isset($totalcantidad)) {
						$totalcantidad = '0';
					} else {
						$totalcantidad = $totalcantidad;
					}
					$totalcantidad += $total_cantidad;
				}
			}
		}
	}

	//declaramos variables
	if (!isset($totalcantidad)) {
		$totalcantidad = '';
	} else {
		$totalcantidad = $totalcantidad;
	}

	?>

	<header>
		
		<!-- Navbar -->
		<div class="menu-bar">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Grid 
					<div class="row">
						<div class="col">-->
							<a href="index.php">
							<img src="images/logo-sinfondo.png" alt="Logo" width="70" height="70">
							<a class="navbar-brand" href="index.php">TuBuffet32</a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
							aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: white;">
										<img src="./images/car.svg" alt="carrito" width="30" height="30"><?php echo $totalcantidad; ?></a>
									</li>
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
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" 
										aria-expanded="false"><img src="images/usuario.png" alt="Perfil" width="30" height="30"></a>
										<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
											<li><a class="dropdown-item" href="pages/perfil/index.html">Cuenta</a></li>
											<li><a class="dropdown-item" href="#">Configuracion</a></li>
											<li><a class="dropdown-item" href="index.php">Cerrar sesion</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- Fin del Grid
						</div>  
					</div>-->
				</div>
			</nav>
		</div>

		<!-- Promoción-->
		<section class="promos container">
			<h1>Promos</h1>
			<div class="swiper mySwiper">
				<div class="swiper-wrapper">

					<div class="swiper-slide">
						<img src="images/promos/promo0.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo1.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo2.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo3.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo4.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo5.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo6.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo7.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo8.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo9.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo0.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo1.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo2.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo3.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo4.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo5.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo6.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo7.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo8.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="images/promos/promo9.png" alt="">
					</div>

				</div>
			</div>
    	</section>

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

			<!-- MODAL CARRITO -->
			<div class="modal fade" id="modal_cart" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Mi carrito</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="modal-body">
								<div>
									<div class="p-2">
										<ul class="list-group mb-3">
											<?php
											if (isset($_SESSION['carrito'])) {
												$total = 0;
												for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
													if (isset($carrito_mio[$i])) {
														if ($carrito_mio[$i] != NULL) {
											?>
															<li class="list-group-item d-flex justify-content-between lh-condensed">
																<div class="row col-12">
																	<div class="col-6 p-0" style="text-align: left; color: #000000;">
																		<h6 class="my-0">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; ?></h6>
																	</div>
																	<div class="col-6 p-0" style="text-align: right; color: #000000;">
																		<span class="text-muted" style="text-align: right; color: #000000;"><?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];    ?> $</span>
																	</div>
																</div>
															</li>
											<?php
															$total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
														}
													}
												}
											}
											?>
											<li class="list-group-item d-flex justify-content-between">
												<span style="text-align: left; color: #000000;">Total (ARG)</span>
												<strong style="text-align: left; color: #000000;"><?php
													if (isset($_SESSION['carrito'])) {
														$total = 0;
														for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
															if (isset($carrito_mio[$i])) {
																if ($carrito_mio[$i] != NULL) {
																	$total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
																}
															}
														}
													}
													if (!isset($total)) {
														$total = '0';
													} else {
														$total = $total;
													}
													echo $total; ?> $
												</strong>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a type="button" class="btn btn-primary" href="borrarcarro.php">Vaciar carrito</a>
							<a type="button" class="btn btn-success" href="#">Continuar pedido</a>
						</div>
					</div>
				</div>
			</div>
			<!-- END MODAL CARRITO -->
			<div class="card m-4" style="width: 100%;max-width: 270px; color:#000000;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="450.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 1" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/hambuerger.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Burger Premium</h3>
											<p class="card-text">Precio $450.00</p>
											<button class="btn btn-primary" type="submit">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>
			<!-- Productos -->
			<div class="container md-5">
				<div class="row" style="justify-content: space-between ">

					<div id="promos-container" class="pro1 tab-content">
						<div class="box-container-1">
							<div class="row row-cols-1 row-cols-md-4 g-0">
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
                                                                    echo '<p class="card-text">' . $descripcionProducto . '</p>';
                                                                    echo '<p class="card-text">quedan ' . $cantidadProducto . ' disponibles</p>';
																	echo '<button class="btn btn-primary" type="submit"><img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>';
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
                                                                    echo '<p class="card-text">' . $descripcionProducto . '</p>';
                                                                    echo '<p class="card-text">quedan ' . $cantidadProducto . ' disponibles</p>';
																	echo '<button class="btn btn-primary" type="submit"><img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>';
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
                                                                    echo '<p class="card-text">' . $descripcionProducto . '</p>';
                                                                    echo '<p class="card-text">quedan ' . $cantidadProducto . ' disponibles</p>';
																	echo '<button class="btn btn-primary" type="submit"><img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>';
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
                                                                    echo '<p class="card-text">' . $descripcionProducto . '</p>';
                                                                    echo '<p class="card-text">quedan ' . $cantidadProducto . ' disponibles</p>';
																	echo '<button class="btn btn-primary" type="submit"><img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>';
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
                                                                    echo '<p class="card-text">' . $descripcionProducto . '</p>';
                                                                    echo '<p class="card-text">quedan ' . $cantidadProducto . ' disponibles</p>';
																	echo '<button class="btn btn-primary" type="submit"><img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>';
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
                                                                    echo '<p class="card-text">' . $descripcionProducto . '</p>';
                                                                    echo '<p class="card-text">quedan ' . $cantidadProducto . ' disponibles</p>';
																	echo '<button class="btn btn-primary" type="submit"><img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>';
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

	<!-- App -->
	<section class="app">
		<div class="header-content container">
			<div class="header-txt">
				<h1>Descargá la APP y disfuta mucho más</h1>
				<p>La aplicación todavía se encuentra en desarrollo. En cuanto haya novedades, les estaremos comunicando.</p>
				<div class="col-md-6 col">
					<div class="botones">
						<a href="https://play.google.com/store/games?hl=es_419&gl=US" class="btn-1">
							<img class="icono" src="images/google play.png" alt="Goggle Play" width="35" height="35"></a>
						<a href="https://www.apple.com/store" class="btn-1">
							<img class="icono" src="images/apple store.png" alt="Apple Store" width="35" height="35"></a>
					</div>
				</div>
			</div>
			<div class="video-container">
				<video id="video-preview" src="video/video.mp4" alt="Video" width="810" controls autoplay></video>
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
    <script src="./java_script/promos-script.js"></script>
	<!-- JavaScript Bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>