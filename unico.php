<?php

include('conexion.php');

$id = $_GET['id'];
$seleccion = "SELECT * FROM productos WHERE idproductos = '$id'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/unico.css">
    <title>Vista producto</title>
</head>
<body>
    <div class = "contenedor">
        <div class = "menu">
            <div class = "logo">
                <h2>Almacen</h2>
            </div>
            <ul>
                <li><a href = "index.php">Inicio</a></li>
                <li><a href = "nuevo_usuario.php">Nuevo usuario</a></li>
                <li><a href = "nuevo_producto.php">Nuevo producto</a></li>
                <li><a href = "lista_productos.php">Lista de productos</a></li>
            </ul>
        </div>
    

    <div class = "tabla">
        <form action = "actualizacion.php" method = "post">
        <table>
            <tr>
                <td>ID Productos</td>
                <td>Nombre de producto</td>
                <td>Descripcion del producto</td>
                <td>Cantidad de producto</td>
                <td>Fecha de ingreso de producto</td>
            </tr>
            <?php
                $sql = "SELECT * FROM productos";
                $validacion = mysqli_query($conexion,$seleccion);
                while($resultado = mysqli_fetch_array($validacion))
                {
            ?>
            <tr>
                <td><input type="text" name = "id" value="<?php echo $resultado['idproductos']?>"></td>
                <td><input type="text" name = "nombre" value="<?php echo $resultado['nombre_producto']?>"></td>
                <td><input type="text" name = "descripcion" value="<?php echo $resultado['descripcion_producto']?>"></td>
                <td><input type="text" name = "cantidad" value="<?php echo $resultado['cantidad_producto']?>"></td>
                <td><input type="text" name = "fecha" value="<?php echo $resultado['fecha_registro']?>"></td>
                <td><button>Guardar cambios</button></td>

                <?php
                }
                ?>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>