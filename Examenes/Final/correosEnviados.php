<?php
session_start();
if (!isset($_SESSION['email']))
    echo '<div class="alert alert-danger" role="alert">No Inicio Seccion </div>';
else {

    include './conexion.php';

    $sql = "SELECT id, destino, asunto, mensaje, fecha  FROM salidas";
    $query = mysqli_query($con, $sql);
    $i = 1;
?>
<table>
    <tr>
        <th>Nro</th>
        <th>Destino</th>
        <th>Asunto</th>
        <th>Mensaje</th>
        <th>Fecha</th>
    </tr>
    <?php while ($fila = mysqli_fetch_array($query)) { ?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $fila['destino'] ?></td>
        <td><?php echo $fila['asunto'] ?></td>
        <td><?php echo $fila['mensaje'] ?></td>
        <td><?php echo $fila['fecha'] ?> </td>
    </tr>
    <?php } ?>
</table>
<?php
    mysqli_close($con);
}
?>