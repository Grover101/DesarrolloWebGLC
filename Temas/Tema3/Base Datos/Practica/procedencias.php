<?php
include '../conexion.php';
$sql = "select * from procedencias";

if (isset($_GET['orden'])) {
    $orden = $_GET['orden'];
    $tipo = $_GET['tipo'];
    if ($tipo == 'ASC')
        $nuevotipo = 'DESC';
    else
        $nuevotipo = 'ASC';
    $sql = $sql . ' ORDER BY ' . $orden . ' ' . $tipo;
} else
    $orden = "";

$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedencias</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <table border="1">
        <tr>
            <th>
                <a
                    href="procedencias.php?orden=procedencia&tipo=<?php echo $orden == 'procedencia' ? $nuevotipo : 'ASC'; ?> ">
                    Procedencia
                </a>
            </th>
            <th>
                <a
                    href="procedencias.php?orden=codigopais&tipo=<?php echo $orden == 'codigopais' ? $nuevotipo : 'ASC'; ?> ">
                    Codigo Pais
                </a>
            </th>
        </tr>
        <?php while ($fila = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $fila['procedencia'] ?></td>
            <td><?php echo $fila['codigopais'] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>