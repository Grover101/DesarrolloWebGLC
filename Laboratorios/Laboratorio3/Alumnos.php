<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Alumnos Registrados</h1>
    <div class="tablas">
        <a href="./Fintroduccion.html" class="volver">Volver</a>
        <table>
            <tr>
                <th>Nro</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>CU</th>
                <th>Sexo</th>
                <th>Carrera</th>
            </tr>
            <?php
            include './conexion.php';
            $sql = "SELECT nombres, apellidos, cu, sexo, carreras.carrera FROM alumnos LEFT JOIN carreras ON alumnos.codigocarrera=carreras.codigo ORDER BY alumnos.id";

            $query = mysqli_query($con, $sql);
            $i = 1;
            while ($fila = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $fila['nombres'] ?></td>
                <td><?php echo $fila['apellidos'] ?></td>
                <td><?php echo $fila['cu'] ?></td>
                <td><?php echo $fila['sexo'] == "M" ? "Masculino" : "Femenino" ?></td>
                <td><?php echo $fila['carrera'] ?></td>
            </tr>
            <?php
                $i++;
            } ?>
        </table>
    </div>
</body>

</html>