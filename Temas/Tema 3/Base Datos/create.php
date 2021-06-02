<?php
include './conexion.php';

$producto = $_POST['producto'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

$sql = "INSERT INTO productos(producto, descripcion, precio) value ('$producto','$descripcion',$precio)";

$query = mysqli_query($con, $sql);

mysqli_close($con);

?>
<meta http-equiv="refresh" content="4;URL=read.php">