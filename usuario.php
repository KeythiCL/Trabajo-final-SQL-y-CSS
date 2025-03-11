<?php

include('conexion.php');

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$DUI = $_POST['DUI'];
$telefono = $_POST['telefono'];
$cargo = $_POST['cargo'];

$peticion = "INSERT INTO empleados (
nombre, edad, DUI, telefono, cargo)
VALUES ('$nombre', '$edad','$DUI','$telefono',
'$cargo')";

$validacion = mysqli_query($conexion,$peticion);

if($validacion)
{
    header('location:registro_completado.php');
}
else
{
    echo "Hubo un error, no se pudo registrar";
}