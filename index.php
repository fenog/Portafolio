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
	<title>Con amor de Axel</title>
	<!-- CSS -->
	<link rel="stylesheet" href="./style/style.css">
	<link rel="stylesheet" href="./style/promos-style.css">
	<!-- Footer -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<!-- Alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: white;">
								<img src="./images/car.svg" alt="carrito" width="30" height="30"></a>
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
							<li class="nav-item">
								<a class="nav-link" href="pages/sign-in/indexLogueo.php">Iniciar sesión</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="pages/sign-up/indexRegistro.php">Registrarse</a>
							</li>
						</ul>
					</div>
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
				<div id="pro1" class="tab active">Promos</div>
				<div id="pro2" class="tab">Minutas</div>
				<div id="pro3" class="tab">Bebidas</div>
				<div id="pro4" class="tab">Snacks</div>
				<div id="pro5" class="tab">Postres</div>
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
											<li class="list-group-item d-flex justify-content-between">
												<span style="text-align: left; color: #000000;">Total (ARG)</span>
												<strong style="text-align: left; color: #000000;">
												</strong>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a type="button" class="btn btn-success" onclick="mialerta();">Vaciar carrito</a>
							<a type="button" class="btn btn-success" onclick="mialerta();">Continuar pedido</a>
						</div>
					</div>
				</div>
			</div>
			<!-- END MODAL CARRITO -->
			
			<!-- Alert -->
			<script>
				function mialerta() {  
					swal("Error de compra", "Para realizar una compra inicie sesión o registrese.", "error");
				} 
			</script>
			<!-- Productos -->
			<div class="container md-5">
				<div class="row" style="justify-content: space-between ">

					<div id="promos-container" class="pro1 tab-content">
						<div class="box-container-1">
							<div class="row row-cols-1 row-cols-md-4 g-0">

								<div class="card m-4" style="width: 100%;max-width: 270px; color:#000000;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="450.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 1" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/hambuerger.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Burger Premium</h3>
											<p class="card-text">Precio $450.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="450.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 2" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/hambuerger.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Burger Premium</h3>
											<p class="card-text">Precio $450.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="450.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 3" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/hambuerger.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Burger Premium</h3>
											<p class="card-text">Precio $450.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="450.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 4" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/hambuerger.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Burger Premium</h3>
											<p class="card-text">Precio $450.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="450.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 5" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/hambuerger.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Burger Premium</h3>
											<p class="card-text">Precio $450.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="450.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 6" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/hambuerger.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Burger Premium</h3>
											<p class="card-text">Precio $450.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="450.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 7" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/hambuerger.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Burger Premium</h3>
											<p class="card-text">Precio $450.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="450.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 8" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/hambuerger.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Burger Premium</h3>
											<p class="card-text">Precio $450.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="450.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 9" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/hambuerger.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Burger Premium</h3>
											<p class="card-text">Precio $450.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="450.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 10" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/hambuerger.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Burger Premium</h3>
											<p class="card-text">Precio $450.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="450.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 11" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/hambuerger.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Burger Premium</h3>
											<p class="card-text">Precio $450.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="450.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 12" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/hambuerger.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Burger Premium</h3>
											<p class="card-text">Precio $450.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

							</div>
						</div>

						<div class="load-more" id="load-more-1">Cargar Más</div>

					</div>

					<div id="minutas-container" class="pro2 tab-content">
						<div class="box-container-2">
							<div class="row row-cols-1 row-cols-md-4 g-0">

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="300.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 1" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/pebete.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Pebete Premium</h3>
											<p class="card-text">Precio $300.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="300.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 2" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/pebete.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Pebete Premium</h3>
											<p class="card-text">Precio $300.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="300.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 3" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/pebete.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Pebete Premium</h3>
											<p class="card-text">Precio $300.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="300.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 4" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/pebete.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Pebete Premium</h3>
											<p class="card-text">Precio $300.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="300.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 5" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/pebete.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Pebete Premium</h3>
											<p class="card-text">Precio $300.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="300.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 6" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/pebete.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Pebete Premium</h3>
											<p class="card-text">Precio $300.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="300.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 7" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/pebete.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Pebete Premium</h3>
											<p class="card-text">Precio $300.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="300.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 8" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/pebete.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Pebete Premium</h3>
											<p class="card-text">Precio $300.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="300.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 9" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/pebete.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Pebete Premium</h3>
											<p class="card-text">Precio $300.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="300.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 10" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/pebete.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Pebete Premium</h3>
											<p class="card-text">Precio $300.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="300.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 11" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/pebete.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Pebete Premium</h3>
											<p class="card-text">Precio $300.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="300.00" />
										<input name="titulo" type="hidden" id="titulo" value="articulo 12" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/pebete.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Pebete Premium</h3>
											<p class="card-text">Precio $300.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

							</div>
						</div>
						<div class="load-more" id="load-more-2">Cargar Más</div>
					</div>

					<div id="bebidas-container" class="pro3 tab-content">
						<div class="box-container-3">
							<div class="row row-cols-1 row-cols-md-4 g-0">

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="127.00" />
										<input name="titulo" type="hidden" id="titulo" value="Cepita M" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/bebidas/Cepita M.png" class="card-img-top" alt="CepitaM">
										<div class="card-body">
											<h3 class="card-title">Cepita M</h3>
											<p class="card-text">Precio $127.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="127.00" />
										<input name="titulo" type="hidden" id="titulo" value="Cepita N" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/bebidas/Cepita Multi.png" class="card-img-top" alt="CepitaN">
										<div class="card-body">
											<h3 class="card-title">Cepita N</h3>
											<p class="card-text">Precio $127.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="241.00" />
										<input name="titulo" type="hidden" id="titulo" value="CocaCola" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/bebidas/Coca Cola Lata.png" class="card-img-top" alt="CocaColaL">
										<div class="card-body">
											<h3 class="card-title">CocaCola</h3>
											<p class="card-text">Precio $241.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="245.00" />
										<input name="titulo" type="hidden" id="titulo" value="Fanta" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/bebidas/Fanta Lata.png" class="card-img-top" alt="FantaL">
										<div class="card-body">
											<h3 class="card-title">Fanta</h3>
											<p class="card-text">Precio $245.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="247.00" />
										<input name="titulo" type="hidden" id="titulo" value="Sprite" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/bebidas/Sprite Lata.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Sprite</h3>
											<p class="card-text">Precio $247.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="385.00" />
										<input name="titulo" type="hidden" id="titulo" value="Doble Cola" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/bebidas/Doble Cola.png" class="card-img-top" alt="DobleCola">
										<div class="card-body">
											<h3 class="card-title">Doble Cola</h3>
											<p class="card-text">Precio $385.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="369.00" />
										<input name="titulo" type="hidden" id="titulo" value="Pritty" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/bebidas/Pritty.png" class="card-img-top" alt="Pritty">
										<div class="card-body">
											<h3 class="card-title">Pritty</h3>
											<p class="card-text">Precio $369.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="497.00" />
										<input name="titulo" type="hidden" id="titulo" value="Levite M" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/bebidas/Levite M.png" class="card-img-top" alt="LeviteM">
										<div class="card-body">
											<h3 class="card-title">Levite M</h3>
											<p class="card-text">Precio $497.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="497.00" />
										<input name="titulo" type="hidden" id="titulo" value="Levite N" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/bebidas/Levite N.png" class="card-img-top" alt="LeviteN">
										<div class="card-body">
											<h3 class="card-title">Levite N</h3>
											<p class="card-text">Precio $497.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="497.00" />
										<input name="titulo" type="hidden" id="titulo" value="Levite P" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/bebidas/Levite P.png" class="card-img-top" alt="LeviteP">
										<div class="card-body">
											<h3 class="card-title">Levite P</h3>
											<p class="card-text">Precio $497.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="305.00" />
										<input name="titulo" type="hidden" id="titulo" value="Smartwater" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/bebidas/Smartwater.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Smartwater</h3>
											<p class="card-text">Precio $305.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="182.00" />
										<input name="titulo" type="hidden" id="titulo" value="Glasiar" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/bebidas/Glaciar.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Glasiar</h3>
											<p class="card-text">Precio $182.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

							</div>
						</div>
						<div class="load-more" id="load-more-1">Cargar Más</div>
					</div>

					<div id="snacks-container" class="pro4 tab-content">
						<div class="box-container-4">
							<div class="row row-cols-1 row-cols-md-4 g-0">

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="99.00" />
										<input name="titulo" type="hidden" id="titulo" value="Guaymallen B" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Snacks/guaymallen B.png" class="card-img-top" alt="guaymallenB">
										<div class="card-body">
											<h3 class="card-title">Guaymallen B</h3>
											<p class="card-text">Precio $99.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="99.00" />
										<input name="titulo" type="hidden" id="titulo" value="Guaymallen N" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Snacks/guaymallen N.png" class="card-img-top" alt="guaymallenN">
										<div class="card-body">
											<h3 class="card-title">Guaymallen N</h3>
											<p class="card-text">Precio $99.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="60.00" />
										<input name="titulo" type="hidden" id="titulo" value="Fulbito Mani" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Snacks/Fulbito Mani.png" class="card-img-top" alt="Fulbito Mani">
										<div class="card-body">
											<h3 class="card-title">Fulbito Mani</h3>
											<p class="card-text">Precio $60.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="316.00" />
										<input name="titulo" type="hidden" id="titulo" value="Jorgelin" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Snacks/Jorgelin.png" class="card-img-top" alt="Jorgelin">
										<div class="card-body">
											<h3 class="card-title">Jorgelin</h3>
											<p class="card-text">Precio $316.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="131.00" />
										<input name="titulo" type="hidden" id="titulo" value="Macucas" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Snacks/Macucas.png" class="card-img-top" alt="Macucas">
										<div class="card-body">
											<h3 class="card-title">Macucas</h3>
											<p class="card-text">Precio $131.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="378.00" />
										<input name="titulo" type="hidden" id="titulo" value="Chocolinas" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Snacks/Chocolinas.png" class="card-img-top" alt="Chocolinas">
										<div class="card-body">
											<h3 class="card-title">Chocolinas</h3>
											<p class="card-text">Precio $378.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="329.00" />
										<input name="titulo" type="hidden" id="titulo" value="Pepitos" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Snacks/Pepitos.png" class="card-img-top" alt="Pepitos">
										<div class="card-body">
											<h3 class="card-title">Pepitos</h3>
											<p class="card-text">Precio $329.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="357.00" />
										<input name="titulo" type="hidden" id="titulo" value="Oreo" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Snacks/Oreo.png" class="card-img-top" alt="Oreo">
										<div class="card-body">
											<h3 class="card-title">Oreo</h3>
											<p class="card-text">Precio $357.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="143.00" />
										<input name="titulo" type="hidden" id="titulo" value="Mini Oreo" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Snacks/Mini Oreo.png" class="card-img-top" alt="Mini Oreo">
										<div class="card-body">
											<h3 class="card-title">Mini Oreo</h3>
											<p class="card-text">Precio $143.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="809.00" />
										<input name="titulo" type="hidden" id="titulo" value="Doritos" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Snacks/Doritos.png" class="card-img-top" alt="Doritos">
										<div class="card-body">
											<h3 class="card-title">Doritos</h3>
											<p class="card-text">Precio $809.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="850.00" />
										<input name="titulo" type="hidden" id="titulo" value="Lays" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Snacks/Lays.png" class="card-img-top" alt="Lays">
										<div class="card-body">
											<h3 class="card-title">Lays</h3>
											<p class="card-text">Precio $850.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="776.00" />
										<input name="titulo" type="hidden" id="titulo" value="Cheetos" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Snacks/Cheetos.png" class="card-img-top" alt="Cheetos">
										<div class="card-body">
											<h3 class="card-title">Cheetos</h3>
											<p class="card-text">Precio $776.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

							</div>
						</div>
						<div class="load-more" id="load-more-1">Cargar Mas</div>
					</div>

					<div id="postres-container" class="pro5 tab-content">
						<div class="box-container-5">
							<div class="row row-cols-1 row-cols-md-4 g-0">

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="516.00" />
										<input name="titulo" type="hidden" id="titulo" value="Serenito VC" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Postres/Serenito VC.png" class="card-img-top" alt="Serenito VC">
										<div class="card-body">
											<h3 class="card-title">Serenito VC</h3>
											<p class="card-text">Precio $516.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="252.00" />
										<input name="titulo" type="hidden" id="titulo" value="Serenito V" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Postres/Serenito V.png" class="card-img-top" alt="Serenito V">
										<div class="card-body">
											<h3 class="card-title">Serenito V</h3>
											<p class="card-text">Precio $252.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="252.00" />
										<input name="titulo" type="hidden" id="titulo" value="Serenito C" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Postres/Serenito C.png" class="card-img-top" alt="Serenito C">
										<div class="card-body">
											<h3 class="card-title">Serenito C</h3>
											<p class="card-text">Precio $252.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="273.00" />
										<input name="titulo" type="hidden" id="titulo" value="Danette" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Postres/Danette.png" class="card-img-top" alt="hamburgesa">
										<div class="card-body">
											<h3 class="card-title">Danette</h3>
											<p class="card-text">Precio $273.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="467.00" />
										<input name="titulo" type="hidden" id="titulo" value="Yogurisimo" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Postres/Yogurisimo.png" class="card-img-top" alt="Yogurisimo">
										<div class="card-body">
											<h3 class="card-title">Yogurisimo</h3>
											<p class="card-text">Precio $467.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="105.00" />
										<input name="titulo" type="hidden" id="titulo" value="Yogur Firme" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Postres/Yogur Firme.png" class="card-img-top" alt="Yogur Firme">
										<div class="card-body">
											<h3 class="card-title">Yogur Firme</h3>
											<p class="card-text">Precio $105.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="171.00" />
										<input name="titulo" type="hidden" id="titulo" value="Danonino F" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Postres/Danonino F.png" class="card-img-top" alt="DanoninoF">
										<div class="card-body">
											<h3 class="card-title">Danonino F</h3>
											<p class="card-text">Precio $171.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="171.00" />
										<input name="titulo" type="hidden" id="titulo" value="Danonino F" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Postres/Danonino V.png" class="card-img-top" alt="DanoninoV">
										<div class="card-body">
											<h3 class="card-title">Danonino V</h3>
											<p class="card-text">Precio $171.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="144.00" />
										<input name="titulo" type="hidden" id="titulo" value="Palito Bombon" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Postres/Palito Bombon.png" class="card-img-top" alt="Palito Bombon">
										<div class="card-body">
											<h3 class="card-title">Palito Bombon</h3>
											<p class="card-text">Precio $144.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="50.00" />
										<input name="titulo" type="hidden" id="titulo" value="Naranju N" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Postres/Naranju N.png" class="card-img-top" alt="NaranjuN">
										<div class="card-body">
											<h3 class="card-title">Naranju N</h3>
											<p class="card-text">Precio $50.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="50.00" />
										<input name="titulo" type="hidden" id="titulo" value="Naranju R" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Postres/Naranju R.png" class="card-img-top" alt="NaranjuR">
										<div class="card-body">
											<h3 class="card-title">Naranju R</h3>
											<p class="card-text">Precio $50.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

								<div class="card m-4" style="width: 100%;max-width: 270px;;">
									<form id="formulario" name="formulario" method="post" action="cart.php">
										<input name="precio" type="hidden" id="precio" value="50.00" />
										<input name="titulo" type="hidden" id="titulo" value="Naranju V" />
										<input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
										<img src="images/Productos/Postres/Naranju V.png" class="card-img-top" alt="NaranjuV">
										<div class="card-body">
											<h3 class="card-title">Naranju V</h3>
											<p class="card-text">Precio $50.00</p>
											<button class="btn btn-primary" type="button" onclick="mialerta();">
												<img src="./images/car.svg" alt="carrito" width="25" height="25">Añadir al carrito</button>
										</div>
									</form>
								</div>

							</div>
						</div>
						<div class="load-more" id="load-more-1">Cargar Mas</div>
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
	<script>
		const urlParams = new URLSearchParams(window.location.search);
		const err = urlParams.get('error');
		window.onload = function() {
			if (err != null) {
				if (err == "true") {
					swal("Los datos ingresados son INCORRECTOS, por favor revise los datos o cree una nueva cuenta","error");
				}
			}
		}
	</script>
</body>

</html>