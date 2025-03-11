<?php

include('conexion.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$fecha = $_POST['fecha'];

$actualizacion = "UPDATE productos 
SET nombre_producto = '$nombre', 
descripcion_producto = '$descripcion',
cantidad_producto = '$cantidad',
fecha_registro = '$fecha'
WHERE idproductos = '$id'";

$validacion = mysqli_query($conexion,$actualizacion);

if($validacion)
{
    header("location:lista_productos.php");
}
else
{
    echo "Hubo un error, no se pudo actualizar los datos";
}