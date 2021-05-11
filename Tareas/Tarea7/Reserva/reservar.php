<?php

if (isset($_POST['reservar'])) {
    include '../conexion.php';
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $habitacion = $_POST['habitacion'];
    $fechaIngreso = $_POST['fechaIngreso'];
    $fechaSalida = $_POST['fechaSalida'];
    $correo = $_POST['correoElectronico'];
    $codigo = substr(uniqid(), 6, 5);

    $sql = "SELECT precio FROM habitacion WHERE id =$habitacion";
    $query = mysqli_query($con, $sql);
    $precio = mysqli_fetch_array($query)[0];

    $sql1 = "INSERT INTO reservas (codigoreserva,fechaingreso,fechasalida,idhabitacion,precio,nombre,apellidos,correoelectronico) VALUE ('$codigo','$fechaIngreso','$fechaSalida',$habitacion,$precio,'$nombre','$apellidos','$correo')";

    $query1 = mysqli_query($con, $sql1);
    mysqli_close($con);
}
?>
<h1>Reserva Realizada</h1>
<meta http-equiv="refresh" content="4;URL=mostrar.php">