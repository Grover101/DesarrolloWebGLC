<?php
include './conexion.php';
$sql = "SELECT id,carrera FROM carreras";
$query = mysqli_query($con, $sql);
while ($fila =  mysqli_fetch_object($query)) {
    $rawdata[] = $fila;
}
echo json_encode($rawdata);