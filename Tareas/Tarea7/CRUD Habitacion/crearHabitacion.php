<?php
include '../conexion.php';

$nro = $_POST['nro'];
$tipohabitacion = $_POST['tipohabitacion'];
$banio = $_POST['banio'];
$espacio = $_POST['espacio'];
$precio = $_POST['precio'];

$sql = "INSERT INTO habitacion (nro,idtipohabitacion,banoprivado,espacio,precio) VALUES($nro,$tipohabitacion,$banio,$espacio,$precio);";


$query = mysqli_query($con, $sql);

mysqli_close($con);
?>

<h1>Creacion Completada</h1>
<meta http-equiv="refresh" content="4;URL=mostrarHabitacion.php">