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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="4;URL=Alumnos.php">
    <title>Insertado</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Registrados con exito</h1>
</body>

</html>