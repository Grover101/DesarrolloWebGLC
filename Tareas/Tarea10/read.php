<?php
include './conexion.php';
$sql = "SELECT productos.id,fotografia ,producto,categoria,descripcion,marca,precio FROM productos 
LEFT JOIN categorias ON productos.idcategoria=categorias.id
LEFT JOIN marcas ON productos.idmarca=marcas.id ";
$query = mysqli_query($con, $sql);
?>
<table border="1">
    <tr>
        <th>Producto</th>
        <th>Categoria</th>
        <th>Descripcion</th>
        <th>Marca</th>
        <th>Precio</th>
    </tr>
    <?php while ($fila = mysqli_fetch_array($query)) {
    ?>
    <tr>
        <td><?php echo $fila['producto'] ?></td>
        <td><?php echo $fila['categoria'] ?></td>
        <td><?php echo $fila['descripcion'] ?></td>
        <td><?php echo $fila['marca'] ?></td>
        <td><?php echo $fila['precio'] ?> </td>
    </tr>
    <?php
    }
    ?>

</table>
<?php
mysqli_close($con);
?>