<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../images/logo-sinfondo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style-sign.css" />
    <title>Tu Buffet 32</title>
</head>

<body>
    <?php
        if (isset($_GET['mensaje'])) {
        echo'<div class="mensaje">'. urldecode($_GET['mensaje']).'</div>';
    }
    ?>
    <div class="form-content">
        <form method="post" action="cargarDatos.php" name="signup-form" enctype="multipart/form-data">
            <h2>Agregar Productos</h2>
            <div class="input-group">
                <div class="input-container">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="nombre" placeholder="Nombre" required />
                </div>

                <div class="input-container">
                    <i class="fa-solid fa-user"></i>
                    <input type="number" name="precio" placeholder="precio" required />
                </div>

                <div class="input-container">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="descripcion" placeholder="descripcion" required />
                </div>

                <div class="input-container">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="cantidad" placeholder="cantidad" required />
                </div>

                <div class="input-container">
                    <i class="fa-solid fa-user"></i>
                    <select class="custom-select" name="categoria">
                        <option value="promo">Promo</option>
                        <option value="minuta">Minuta</option>
                        <option value="bebidas">Bebidas</option>
                        <option value="snacks">Snacks</option>
                        <option value="postre">Postre</option>
                    </select>
                </div>
                <br><br>

                <div class="input-container">
                    <input type="file" name="imagen" placeholder="imagen" id="imagen" accept="image/*" required />
                </div>
                    
                <button class="btn" type="submit" name="register" value="Enviar">Registrar</button>
            </div>
        </form>
    </div>
</body>

</html>