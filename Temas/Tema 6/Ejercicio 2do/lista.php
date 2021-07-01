<?php
session_start();
if (!isset($_SESSION['correo']))
    echo '<div class="alert alert-danger" role="alert">No Inicio Seccion </div>';
else {
    include './conexion.php';
    $sql = "SELECT id,correo,nombres, apellidos, nivel FROM usuarios";
    $query = mysqli_query($con, $sql);
    // echo $_SESSION['nivel'];
?>
<table class="table table-bordered">
    <tr>
        <th>Correo</th>
        <th>Nombre Completo</th>
        <th>Nivel</th>
        <th>Operacion</th>
    </tr>
    <?php
        while ($fila = mysqli_fetch_array($query)) {
        ?>
    <tr>
        <td><?php echo $fila['correo']; ?> </td>
        <td><?php echo $fila['nombres'] . ' ' . $fila['apellidos']; ?></td>
        <td><?php echo $fila['nivel'] == 1 ? "Administrador" : "Usuario"; ?></td>
        <td>
            <?php
                    if ($_SESSION['nivel'] == 1) {
                        switch ($fila['nivel']) {
                            case 1:
                                echo '<input type="button" onclick="cambiarnivel(' . $fila['id'] . ',0)" value="Cambiar a Usuario">';
                                break;
                            case 0:
                                echo '<input type="button" onclick="cambiarnivel(' . $fila['id'] . ',1)" value="Cambiar a Administrador">';
                                break;
                        }
                    } ?>

        </td>
    </tr>
    <?php } ?>
</table>
<?php
}