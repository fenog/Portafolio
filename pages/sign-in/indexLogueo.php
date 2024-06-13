<!DOCTYPE html>
<hmtl lang="es">

<head>
  <!-- Metadatos -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="./../../images/logo-sinfondo.png">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
  integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS -->
  <link rel="stylesheet" href="../../style/style-sign.css" />
  <!-- Titulo -->
  <title>Tu Buffet 32</title>
  <!-- Alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<!-- Alert -->
<script>
  const urlParams = new URLSearchParams(window.location.search);

  const err = urlParams.get('error');
  window.onload = function() {
    if (err != null) {
      if (err == "true") {
        swal("Error", "Los datos ingresados son INCORRECTOS, por favor revise los datos o cree una nueva cuenta", "error");
      }
    }
  }
</script>

<body>

  <div class="form-content">

    <?php if (!empty($message)) : ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <form method="POST" action="loguear.php">
      <h2>Iniciar sesión</h2><br>
      <div class="input-group">
        <div class="input-container">
          <i class="fa-solid fa-envelope"></i>
          <input type="email" name="mailform" placeholder="Correo" required />
        </div>
        <div class="input-container">
          <i class="fa-solid fa-lock"></i>
          <input type="password" name="passform" placeholder="Contraseña" required />
        </div>
        <a href="../sign-up/indexRegistro.php">¿No tenes cuenta?</a>
        <input class="btn" type="submit" name="login" value="Enviar" />
      </div>
    </form>

    <div class="welcome">
      <h2>Bienvenido a Tu Buffet 32</h2>
      <h3>"La mejor comida, para la mejor tecnica."</h3>
      <p>
        Un bufé o bufet (del segundo lugar francia buffet) es una comida servida y
        dispuesta generalmente sobre una mesa,
        junto con su cubertería, que consiste principalmente en que los comensales
        se sirven a discreción todo tipo y variedad de alimentos.
        Se trata de un método muy general para servir a un gran número de personas,
        proporcionando al comensal elegir libremente la cantidad y el detalle de los alimentos
      </p>
    </div>
  </div>


</body>

</html>
