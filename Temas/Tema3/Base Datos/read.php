<?php
include './conexion.php';

$sql = "SELECT id, producto, descripcion, precio FROM productos";

$query = mysqli_query($con, $sql);
?>

<table border="1">
    <tr>
        <th>id</th>
        <th>Producto</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th colspan="2">Operaciones</th>
    </tr>
    <?php
    while ($fila = mysqli_fetch_array($query)) {
    ?>
    <tr>
        <td><?php echo $fila['id'] ?></td>
        <td><?php echo $fila['producto'] ?></td>
        <td><?php echo $fila['descripcion'] ?></td>
        <td><?php echo $fila['precio'] ?></td>
        <td><a href="./formEdit.php?id=<?php echo $fila['id'] ?>">Editar</a></td>
        <td><a href="./delete.php?id=<?php echo $fila['id'] ?>">Eliminar</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<a href="./formulario.html">Crear Producto</a>
<?php
mysqli_close($con);