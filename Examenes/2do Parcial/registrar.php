<?php
include './conexion.php';
$libro = $_POST['libro'];
$prestamo = $_POST['prestamo'];
$sql = "INSERT INTO `prestamos`( `idlibro`, `nombreprestamo`) VALUES ($libro,'$prestamo')";

$query = mysqli_query($con, $sql);

mysqli_close($con);

echo '<div class="alert alert-success" role="alert">Se Inserto Correctamente</div>';