<?php
include './conexion.php';
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cu = $_POST['cu'];
$sexo = $_POST['sexo'];
$carrera = $_POST['carrera'];
$n = sizeof($nombre);

$sql = "INSERT INTO alumnos (nombres,apellidos,cu,sexo,codigocarrera) VALUES";

for ($i = 0; $i < $n; $i++) {
    $genero = $sexo[$i] == 1 ? "M" : "F";
    $sql .= "('$nombre[$i]','$apellido[$i]','$cu[$i]','$genero',$carrera[$i])";
    if ($i < $n - 1)
        $sql .= ",";
}
$query = mysqli_query($con, $sql);
mysqli_close($con);
?>
Registrados con exito
<meta http-equiv="refresh" content="4;URL=Alumnos.php">