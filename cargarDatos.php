<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("database/conec.php");
    
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $cantidad = $_POST["cantidad"];
    $categoria = $_POST["categoria"];

    if (isset($_FILES["imagen"])) {
        $targetDir = "images/";  
        $targetFile = $targetDir . basename($_FILES["imagen"]["name"]);
        
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $targetFile)) {
            $sqlImagen = "INSERT INTO imagenes(nombre, ruta) VALUES ('$nombre', '$targetFile')";
            $conex->query($sqlImagen);
            $imagen_id = $conex->insert_id;
            $sqlProducto = "INSERT INTO producto(nombreP, PrecioP, cantidad, categoria, descripcion, imagen_id)VALUES('$nombre', $precio , $cantidad, '$categoria', '$descripcion',  $imagen_id);";
            if ($conex->query($sqlProducto) == TRUE) {
                header("Location: addproducto.php?mensaje=Producto+agregado+correctamente");
                exit();
            } else {
                header("Location: addproducto.php?mensaje=Error+al+agregar+el+producto:+" . $conex->error);
                exit();
            }
        } else {
            header("Location: addproducto.php?mensaje=Hubo+un+error+al+subir+la+imagen.");
            exit();
        }
    } else {
        header("Location: addproducto.php?mensaje=No+se+ha+seleccionado+ninguna+imagen.");
        exit();
    }
    
    $conex->close();
}
?>