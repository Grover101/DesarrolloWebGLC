<?php
include '../conexion.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tipohabitacion WHERE id=$id";
$query = mysqli_query($con, $sql);
$tipohabitacion = mysqli_fetch_array($query);

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
        <form action="./editar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" value="<?php echo $tipohabitacion['descripcion'] ?>">
            <label for="nroCamas">Nro Camas</label>
            <input type="number" name="nroCamas" id="nroCamas" value="<?php echo $tipohabitacion['nroCamas'] ?>">
            <button type="submit" value="editar">Editar</button>
        </form>
    </div>
</body>

</html>