<!DOCTYPE html>
<html lang="es">

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
</head>

<body>
    <div class="form-content">
        <form method="post" action="" name="signup-form">
            <h2>Registrarse</h2>
            <div class="input-group">
                <div class="input-container">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="nombre" placeholder="Nombre" required />
                </div>
                <div class="input-container">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="apellido" placeholder="Apellido" required />
                </div>
                <div class="input-container">
                    <i class="fa-solid fa-id-card"></i>
                    <input type="number" name="DNI" placeholder="DNI" required />
                </div>
                <div class="input-container">
                    <i class="fa-solid fa-phone"></i>
                    <input type="tel" name="telefono" placeholder="Telefono" required />
                </div>
                <div class="input-container">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" placeholder="Correo" required />
                </div>
                <div class="input-container">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="contraseña" placeholder="Contraseña" required />
                </div>
                <a href="../sign-in/indexLogueo.php">¿Ya tenes una cuenta?</a>
                <button class="btn" type="submit" name="register" value="Enviar">Registrar</button>
            </div>

        </form>
        <?php
        include("registrar.php");
        ?>
        <div class="welcome">
            <h2>Bienvenido a Tu Buffet 32</h2>
            <h3>"La mejor comida, para la mejor tecnica."</h3>
            <p>
                Un bufé o bufet (del segundo lugar francia buffet) es una comida servida y
                dispuesta generalmente sobre una mesa,
                junto con su cubertería, que consiste principalmente en que los comensales
                se sirven a discreción todo tipo y variedad de alimentos.
                Se trata de un método muy general para servir a un gran número de personas,
                proporcionando al comensal elegir libremente la cantidad y el detalle de los alimentos.
            </p>
        </div>
    </div>


</body>

</html>
