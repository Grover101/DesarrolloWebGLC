<?php
include '../conexion.php';

$id = $_POST['id'];
$nro = $_POST['nro'];
$tipohabitacion = $_POST['tipohabitacion'];
$banio = $_POST['banio'];
$espacio = $_POST['espacio'];
$precio = $_POST['precio'];
$sqlUpdate = "UPDATE habitacion SET nro=$nro, idtipohabitacion=$tipohabitacion ,banoprivado=$banio,espacio=$espacio, precio=$precio WHERE id=$id";

echo $sqlUpdate;

$query = mysqli_query($con, $sqlUpdate);

mysqli_close($con);
?>

<h1>Actulizacion Completada</h1>
<meta http-equiv="refresh" content="4;URL=mostrarHabitacion.php">