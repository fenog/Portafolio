<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Metadatos -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./../../images/logo-sinfondo.png">
    <!-- CSS -->
    <link rel="stylesheet" href="style-registrar.css" />
    <link rel="stylesheet" href="http://localhost/indexLogueado.php">
    
    <!-- Titulo -->
    <title>Registrarse</title>
</head>

<body>
    <div class="form-content">
        <form method="post" action="registrar.php" name="signup-form">
            <h2>Registrarse</h2>
            <div class="input-group">
                <div class="Name-correo-contraseña">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="nombre" placeholder="Nombre" required />
                </div>
                <div class="Name-correo-contraseña">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" placeholder="Correo" required />
                </div>
                <div class="Name-correo-contraseña">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="contraseña" placeholder="Contraseña" required />
                </div>
                
                <a href="indexLogueado.php">¿Ya tenes una cuenta?</a>
                <button class="btn" type="submit" name="register" value="Enviar">Registrar</button>
            </div>

        </form>
        <?php
        include("conec.php");
        ?>
    </div>


</body>

</html>
