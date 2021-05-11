<?php
include '../conexion.php';

$descripcion = $_POST['descripcion'];
$nroCamas = $_POST['nroCamas'];

$sql = "INSERT INTO tipohabitacion (descripcion,nroCamas) VALUES('$descripcion',$nroCamas)";

$query = mysqli_query($con, $sql);

mysqli_close($con);
?>

<h1>Creacion Completada</h1>
<meta http-equiv="refresh" content="4;URL=mostrar.php">