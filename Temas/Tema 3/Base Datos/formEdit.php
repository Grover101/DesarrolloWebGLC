<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar Producto</title>
</head>

<body>
    <?php
    include './conexion.php';
    $id = $_GET['id'];
    $sql = "SELECT id, producto, descripcion, precio FROM productos WHERE id=" . $id;

    $query = mysqli_query($con, $sql);
    $fila = mysqli_fetch_array($query);

    ?>

    <form action="./update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
        <label for="producto">Producto</label><br />
        <input type="text" name="producto" id="producto" required value="<?php echo $fila['producto'] ?>" /><br />
        <label for="descripcion">Descripcion</label><br />
        <textarea name="descripcion" id="descripcion" cols="30" rows="10" required>
            <?php echo $fila['descripcion'] ?>
        </textarea><br />
        <label for="precio">Precio</label><br />
        <input type="number" step="any" name="precio" id="precio" value="<?php echo $fila['precio'] ?>" /><br />
        <input type="submit" value="Editar" />
    </form>
</body>

</html>