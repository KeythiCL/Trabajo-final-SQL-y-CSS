<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/nuevo_usuario.css">
    <title>Registro</title>
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
        <form action = "usuario.php" method = "post">
            <hd class = "logotipo">Ingresa los datos de un empleado</h2>
            <label for = "">Nombre</label>
            <br>
            <input type = "text" name = "nombre">
            <br>
            <label for = "">Edad</label>
            <br>
            <input type="text" name = "edad" >
            <br>
            <label for="">DUI</label>
            <br>
            <input type = "text" name="DUI">
            <label for="">Telefono</label>
            <br>
            <input type = "text" name="telefono">
            <label for="">Cargo</label>
            <br>
            <input type = "text" name="cargo">
            <br><br>
            <button>Registrar empleado</button>
        </form>
    </div>
</body>
</html>