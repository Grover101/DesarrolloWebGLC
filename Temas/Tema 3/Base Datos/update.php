<?php
include './conexion.php';

$id = $_POST['id'];
$producto = $_POST['producto'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

$sql = "UPDATE productos SET producto='$producto', descripcion='$descripcion', precio=$precio WHERE id=$id";

$query = mysqli_query($con, $sql);

mysqli_close($con);

?>
Se actualizo con exito
<meta http-equiv="refresh" content="4;URL=read.php">