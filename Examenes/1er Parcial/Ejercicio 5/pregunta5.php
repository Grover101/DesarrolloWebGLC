<?php
if (isset($_POST['editar'])) {
    include '../conexion.php';
    // echo "hola <br>";
    for ($i = 0; $i < $_POST['tamanio']; $i++) {
        $nombre = "nombre$i";
        $apellido = "apellido$i";
        $correo = "correo$i";
        $id = "id$i";
        $sql1 = "UPDATE usuarios SET nombres='$_POST[$nombre]', apellidos='$_POST[$apellido]', correo='$_POST[$correo]' WHERE id=$_POST[$id]";
        // echo $sql1 . "<br>";
        $query = mysqli_query($con, $sql1);
    }
    mysqli_close($con);
    echo "<h2 class='notificacion'>Edicion Completada</h2><meta http-equiv='refresh' content='3;URL=pregunta5.php'>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuarios</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Editar Usuarios</h1>
    <a href="../index.php" class="cerrar">Volver</a>
    <div class="contenido">
        <form class="form" action="./pregunta5.php" method="POST">
            <table>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                </tr>
                <?php
                include '../conexion.php';
                $sql = "SELECT * FROM usuarios";
                $query = mysqli_query($con, $sql);
                $i = 0;
                while ($fila = mysqli_fetch_array($query)) {
                ?>
                <tr class="<?php echo $i % 2 == 0 ? "colorPar" : "colorImpar" ?>">
                    <td>
                        <input type="text" name="nombre<?php echo $i ?>" id="" value="<?php echo $fila['nombres'] ?>"
                            required>
                    </td>
                    <td>
                        <input type="text" name="apellido<?php echo $i ?>" id=""
                            value="<?php echo $fila['apellidos'] ?>" required>
                    </td>
                    <td>
                        <input type="text" name="correo<?php echo $i ?>" id="" value="<?php echo $fila['correo'] ?>"
                            required>
                        <input type="hidden" name="id<?php echo $i ?>" value="<?php echo $fila['id'] ?>">
                    </td>
                </tr>
                <?php
                    $i++;
                }
                mysqli_close($con)
                ?>
            </table>
            <input type="hidden" name="tamanio" value="<?php echo $i ?>">
            <button type="submit" name="editar">Editar</button>
        </form>
    </div>
</body>

</html>