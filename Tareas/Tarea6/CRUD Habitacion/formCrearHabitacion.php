<?php
include '../conexion.php';

$sql = "SELECT * FROM tipohabitacion";

$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Crear</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="contenido">
        <form action="./crearHabitacion.php" method="POST">
            <label for="nro">Nro</label>
            <input type="number" name="nro" id="nro">
            <label for="">Tipo de Habitacion</label>
            <select name="tipohabitacion" id="">
                <?php
                while ($fila = mysqli_fetch_array($query)) {
                ?>
                <option value="<?php echo $fila['id'] ?>">
                    <?php echo $fila['descripcion'] ?>
                </option>
                <?php
                }
                ?>
            </select>
            <br>
            <label for="banio">Baño Privado</label>
            <br>
            <input type="radio" name="banio" id="" value="1" checked>Tiene
            <input type="radio" name="banio" id="" value="0">No tiene<br>
            <label for="espacio">Espacio</label>
            <input type="number" name="espacio" id="espacio">
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio">
            <button type="submit" value="crear">Crear</button>
        </form>
    </div>
</body>

</html>