<?php

include('conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/lista_productos.css">
    <title>Productos</title>
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
                $peticion = mysqli_query($conexion,$sql);
                while($resultado = mysqli_fetch_array($peticion))
                {
            ?>
            <tr>
                <td><?php echo $resultado['idproductos']?></td>
                <td><?php echo $resultado['nombre_producto']?></td>
                <td><?php echo $resultado['descripcion_producto']?></td>
                <td><?php echo $resultado['cantidad_producto']?></td>
                <td><?php echo $resultado['fecha_registro']?></td>
                <td><a href = "unico.php?id=<?php echo $resultado['idproductos'];?>">Editar</a></td>

                <?php
                }
                ?>
            </tr>
        </table>
    </div>
</body>
</html>

