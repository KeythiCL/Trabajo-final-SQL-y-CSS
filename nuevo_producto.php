<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/nuevo_producto.css">
    <title>Nuevo</title>
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
    <div class = "formulario">
        <form action = "guardado_productos.php" method = "post">
            <hd class = "subtitulo">Ingresa un nuevo producto</h2>
            <label for = "">Ingrese nombre del producto</label>
            <br>
            <input type = "text" placeholder = "Ej: Martillo" name = "nombre">
            <br><br> 
            <label for = "">Ingresa una descripcion del producto</label>
            <br>
            <textarea name = "descripcion" id = "" cols="30" rows="10" placeholder="Ej: Martillo de madera de 20 cm etc" ></textarea>
            <br><br>
            <label for="">Cantidad a ingresar</label>
            <br>
            <input type = "text" placeholder="Ej: 12" name="cantidad">
            <br><br>
            <button>Ingresar Producto</button>
        </form>
    </div>
</body>
</html>