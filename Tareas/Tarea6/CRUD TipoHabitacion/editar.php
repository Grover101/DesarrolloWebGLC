<?php
include '../conexion.php';

$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$nroCamas = $_POST['nroCamas'];
$sqlUpdate = "UPDATE tipohabitacion SET descripcion='$descripcion', nroCamas=$nroCamas WHERE id=$id";

$query = mysqli_query($con, $sqlUpdate);

mysqli_close($con);
?>

<h1>Actulizacion Completada</h1>
<meta http-equiv="refresh" content="4;URL=mostrar.php">