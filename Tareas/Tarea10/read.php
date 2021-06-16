<?php
include './conexion.php';
$sql = "SELECT productos.id,fotografia ,producto,categoria,descripcion,marca,precio FROM productos 
LEFT JOIN categorias ON productos.idcategoria=categorias.id
LEFT JOIN marcas ON productos.idmarca=marcas.id ";
$query = mysqli_query($con, $sql);
?>
<table>
    <tr>
        <th>Producto</th>
        <th>Descripcion</th>
        <th>Precio</th>
    </tr>
    <?php while ($fila = mysqli_fetch_array($query)) {
    ?>
    <tr>
        <td><?php echo $fila['producto'] ?></td>
        <td><?php echo $fila['descripcion'] ?></td>
        <td><?php echo $fila['precio'] ?> </td>
    </tr>
    <?php
    }
    ?>
</table>
<?php
mysqli_close($con);
?>