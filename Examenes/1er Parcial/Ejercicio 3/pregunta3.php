<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Usuarios</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Lista de Usuarios</h1>
    <a href="../index.php" class="cerrar">Volver</a>
    <div class="contenido">
        <table>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo</th>
            </tr>
            <?php
            include '../conexion.php';
            $sql = "SELECT * FROM usuarios";
            $query = mysqli_query($con, $sql);
            while ($fila = mysqli_fetch_array($query)) {
            ?>
            <tr class="<?php echo $fila['estado'] != 'V' ? "rojo" : "" ?>">
                <td><?php echo $fila['nombres'] ?></td>
                <td><?php echo $fila['apellidos'] ?></td>
                <td><?php echo $fila['correo'] ?></td>
            </tr>
            <?php
            }
            mysqli_close($con);
            ?>
        </table>
    </div>
</body>

</html>