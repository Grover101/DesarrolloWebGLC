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
    <h1>CRUD Tipo Habitacion</h1>
    <div class="contenido">
        <a href="../index.html" class="volver">Volver</a>
        <table>
            <tr>
                <th>Descripcion</th>
                <th>Nro Camas</th>
                <th colspan="2">Opciones</th>
            </tr>
            <?php
            include '../conexion.php';

            $sql = "SELECT * FROM tipohabitacion";

            $query = mysqli_query($con, $sql);

            while ($fila = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $fila['descripcion'] ?></td>
                <td><?php echo $fila['nroCamas'] ?></td>
                <td><a href="./formEditar.php?id=<?php echo $fila['id'] ?>">Editar</a></td>
                <td><a href="./eliminar.php?id=<?php echo $fila['id'] ?>">Eliminar</a></td>
            </tr>
            <?php
            }
            mysqli_close($con)
            ?>
        </table>
        <br>
        <a href="./formCrear.php" class="registro">Registar Tipo de Habitacion</a>
    </div>
</body>

</html>