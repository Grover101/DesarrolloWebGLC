<?php
include './conexion.php';
$id = $_GET['id'];
$sql = "DELETE FROM productos WHERE id=" . $id;

$query = mysqli_query($con, $sql);
?>
Se Elimino el producto con exito
<meta http-equiv="refresh" content="4;URL=read.php">