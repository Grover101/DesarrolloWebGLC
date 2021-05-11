<?php
include '../conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM tipohabitacion WHERE id=$id";

$query = mysqli_query($con, $sql);
mysqli_close($con);
?>
<h1>Eliminacion Completada</h1>
<meta http-equiv="refresh" content="4;URL=mostrar.php">