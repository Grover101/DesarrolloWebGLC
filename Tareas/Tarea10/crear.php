<?php
include './conexion.php';

$producto = $_POST['producto'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

$sql = "INSERT INTO productos(producto, descripcion, precio) value ('$producto','$descripcion',$precio)";

$query = mysqli_query($con, $sql);

if ($query)
    echo "<h1>Prducto Creado</h1>";
else
    echo "<h1>Error al Crear</h1>";



mysqli_close($con);