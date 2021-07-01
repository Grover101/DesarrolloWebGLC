<?php
include './conexion.php';
$id = $_POST['id'];
$nivel = $_POST['nivel'];

$sql = "UPDATE usuarios SET nivel=$nivel WHERE id=" . $id;

echo $sql;
$resultado = mysqli_query($con, $sql);
if ($resultado)
    echo "se edito con exito";
else
    echo "hubo un error";