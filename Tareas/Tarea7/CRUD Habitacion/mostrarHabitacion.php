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
    <h1>CRUD Habitaciones</h1>
    <div class="contenido">
        <a href="../index.html" class="volver">Volver</a>
        <table>
            <tr>
                <th>Nro</th>
                <th>Tipo de Habitacion</th>
                <th>Baño</th>
                <th>Espacio</th>
                <th>Precio</th>
                <th colspan="2">Opciones</th>
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
                <td><a href="./formEditar.php?id=<?php echo $fila['id'] ?>">Editar</a></td>
                <td><a href="./eliminarHabitacion.php?id=<?php echo $fila['id'] ?>">Eliminar</a></td>
            </tr>
            <?php
            }
            mysqli_close($con)
            ?>
        </table>
        <br>
        <a href="./formCrearHabitacion.php" class="registro">Registar Habitacion</a>
    </div>
</body>

</html>