<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Habitaciones</h1>
    <div class="contenido">
        <a href="../index.html" class="volver">Volver</a>
        <table>
            <tr>
                <th>Nro</th>
                <th>Tipo de Habitacion</th>
                <th>Baño</th>
                <th>Espacio</th>
                <th>Precio</th>
                <th colspan="2">Nro de Imagenes</th>
            </tr>
            <?php
            include '../conexion.php';

            $sql = "SELECT habitacion.id, nro, descripcion, banoprivado, espacio, precio FROM habitacion LEFT JOIN tipohabitacion on habitacion.idtipohabitacion=tipohabitacion.id";

            $query = mysqli_query($con, $sql);

            while ($fila = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $fila['nro'] ?></td>
                <td><?php echo $fila['descripcion'] ?></td>
                <td><?php echo $fila['banoprivado'] ? 'Tiene Baño' : 'No tiene Baño' ?></td>
                <td><?php echo $fila['espacio'] ?></td>
                <td><?php echo $fila['precio'] ?></td>
                <?php
                    $sql1 = "SELECT count(idhabitacion) FROM fotoshabitacion WHERE fotoshabitacion.idhabitacion=" . $fila['id'];
                    $query1 = mysqli_query($con, $sql1);
                    echo "<td>" . mysqli_fetch_array($query1)[0] . " </td>";
                    ?>
                <td><a href="./ver.php?id=<?php echo $fila['id'] ?>">Ver</a></td>
            </tr>
            <?php
            }
            mysqli_close($con)
            ?>
        </table>
    </div>
</body>

</html>