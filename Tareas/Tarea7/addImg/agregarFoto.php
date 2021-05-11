<?php
include '../conexion.php';
$habitacion = $_POST['habitacion'];
$separar = explode(".", $_FILES['foto']['name']);
$extension = $separar[1];
$fotografia = uniqid() . "." . $extension;
$sql = "INSERT INTO fotoshabitacion(idhabitacion,fotografia) VALUES($habitacion,'$fotografia')";

$query = mysqli_query($con, $sql);
mysqli_close($con);
copy($_FILES['foto']['tmp_name'], 'img/' . $fotografia);


?>
<h1>Foto Añadida</h1>
<meta http-equiv="refresh" content="3;URL=mostrarHabitaciones.php">