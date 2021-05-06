<?php
include '../conexion.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tipohabitacion";
$sql2 = "SELECT*FROM habitacion WHERE id =$id";
$query = mysqli_query($con, $sql);
$query2 = mysqli_query($con, $sql2);
$habitacion = mysqli_fetch_array($query2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Editar</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="contenido">
        <form action="./editarHabitacion.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="nro">Nro</label>
            <input type="number" name="nro" id="nro" value="<?php echo $habitacion['nro'] ?>">
            <label for="">Tipo de Habitacion</label>
            <select name="tipohabitacion" id="">
                <?php
                while ($fila = mysqli_fetch_array($query)) {
                ?>
                <option value="<?php echo $fila['id'] ?>"
                    <?php echo $fila['id'] == $habitacion['idtipohabitacion'] ? 'selected' : ''; ?>>
                    <?php echo $fila['descripcion'] ?>
                </option>
                <?php
                }
                ?>
            </select>
            <br>
            <label for="banio">Baño Privado</label>
            <br>
            <input type="radio" name="banio" id="" value="1" 1
                <?php echo '1' == $habitacion['banoprivado'] ? 'checked' : ''; ?>>Tiene
            <input type="radio" name="banio" id="" value="0"
                <?php echo '0' == $habitacion['banoprivado'] ? 'checked' : ''; ?>>No tiene<br>
            <label for="espacio">Espacio</label>
            <input type="number" name="espacio" id="espacio" value="<?php echo $habitacion['espacio'] ?>">
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" value="<?php echo $habitacion['precio'] ?>">
            <button type="submit" value="editar">Editar</button>
        </form>
    </div>
</body>

</html>