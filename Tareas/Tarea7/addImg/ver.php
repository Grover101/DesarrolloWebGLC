<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotografias</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Imagenes de la Habitacion <?php echo $_GET['id'] ?></h1>
    <div class="contenido">
        <a href="./mostrarHabitaciones.php" class="volver">Volver</a>
        <table>
            <tr>
                <th>Nro</th>
                <th>Imagen</th>
                <th>Opciones</th>
            </tr>
            <?php
            include '../conexion.php';
            $id = $_GET['id'];
            $sql = "SELECT * FROM fotoshabitacion WHERE idhabitacion=$id";
            $query = mysqli_query($con, $sql);
            $i = 1;
            while ($fila = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><img width="150px" src="./img/<?php echo $fila['fotografia'] ?>" alt=""></td>
                <td><a
                        href="./eliminar.php?id=<?php echo $fila['id'] . "&nombre=" . $fila['fotografia'] . "&habi=" . $id ?>">Eliminar</a>
                </td>
            </tr>
            <?php

            }
            ?>
        </table>
        <br>
        <a href="./formRegistrar.php?habitacion=<?php echo $id ?>" class="registro">Añadir Imagen</a>
    </div>
</body>

</html>