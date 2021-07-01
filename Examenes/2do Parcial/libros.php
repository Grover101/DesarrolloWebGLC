<?php
include './conexion.php';
$id = $_GET['id'];
$sql = "SELECT id,titulo FROM libros WHERE idcarrera=$id";
$query = mysqli_query($con, $sql);
while ($fila =  mysqli_fetch_object($query)) {
    $rawdata[] = $fila;
}
echo json_encode($rawdata);