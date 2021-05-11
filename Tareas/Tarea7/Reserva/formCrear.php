<?php
include '../conexion.php';

$sql = "SELECT * FROM habitacion";

$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Reserva</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Reserva</h1>
    <div class="contenido">
        <a href="../index.html" class="volver">Volver</a>
        <form action="./reservar.php" method="POST">
            <label for="">Nro de Habitacion</label>
            <select name="habitacion" id="">
                <?php
                while ($fila = mysqli_fetch_array($query)) {
                ?>
                <option value="<?php echo $fila['id'] ?>">
                    <?php echo $fila['nro'] ?>
                </option>
                <?php
                }
                mysqli_close($con)
                ?>
            </select>
            <br>
            <label for="fechaIngreso">Fecha Ingreso</label>
            <input type="date" name="fechaIngreso" id="fechaIngreso">
            <label for="fechaSalida">Fecha Salida</label>
            <input type="date" name="fechaSalida" id="fechaSalida">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos">
            <label for="correoElectronico">Correo Electronico</label>
            <input type="email" name="correoElectronico" id="correoElectronico">
            <button type="submit" name="reservar">Reserva</button>
        </form>
    </div>
</body>

</html>