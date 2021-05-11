<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Tabla de Reservas</h1>
    <div class="contenido">
        <a href="../index.html" class="volver">Volver</a>
        <table>
            <tr>
                <th>Codigo</th>
                <th>Fecha Ingreso</th>
                <th>Fecha Salida</th>
                <th>Nro Habitacion</th>
                <th>Precio</th>
                <th>Pagada</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Correo Electronico</th>
            </tr>
            <?php
            include '../conexion.php';

            $sql = "SELECT codigoreserva, fechaingreso,fechasalida, habitacion.nro, habitacion.precio, pagada,nombre,apellidos,correoelectronico FROM reservas LEFT JOIN habitacion ON reservas.idhabitacion=habitacion.id";

            $query = mysqli_query($con, $sql);

            while ($fila = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $fila['codigoreserva'] ?></td>
                <td><?php echo $fila['fechaingreso'] ?></td>
                <td><?php echo $fila['fechasalida'] ?></td>
                <td><?php echo $fila['nro'] ?></td>
                <td><?php echo $fila['precio'] ?></td>
                <td><?php echo $fila['pagada'] ? "SI" : "NO" ?></td>
                <td><?php echo $fila['nombre'] ?></td>
                <td><?php echo $fila['apellidos'] ?></td>
                <td><?php echo $fila['correoelectronico'] ?></td>
            </tr>
            <?php
            }
            mysqli_close($con)
            ?>
        </table>
    </div>
</body>

</html>