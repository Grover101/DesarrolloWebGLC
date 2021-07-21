<?php
include './conexion.php';
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$sql = "INSERT INTO `salidas`( `destino`, `asunto`, `mensaje`,`fecha`) VALUES ('$correo', '$asunto', '$mensaje',NOW())";

$query = mysqli_query($con, $sql);

mysqli_close($con);

echo '<div class="alert alert-success" role="alert">Se Envio Correctamente</div>';