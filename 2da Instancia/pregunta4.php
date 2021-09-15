<?php
if (isset($_POST['editar'])) {
    include './conexion.php';
    for ($i = 0; $i < $_POST['tamanio']; $i++) {
        $titulo = "titulo$i";
        $autor = "autor$i";
        $editorial = "editorial$i";
        $id = "id$i";
        $anio = "anio$i";
        $sql1 = "UPDATE libro SET titulo='$_POST[$titulo]', autor='$_POST[$autor]', ideditorial='$_POST[$editorial]', anio='$_POST[$anio]' WHERE id=$_POST[$id]";
        $query = mysqli_query($con, $sql1);
    }
    mysqli_close($con);
    echo "<h2 class='notificacion'>Edicion Completada</h2>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Editar Libros</h1>
    <div class="contenido">
        <form class="form" action="./pregunta4.php" method="POST">
            <table>
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Año</th>
                </tr>
                <?php
                include './conexion.php';
                $sql = "SELECT * FROM libro";
                $query = mysqli_query($con, $sql);
                $i = 0;
                while ($fila = mysqli_fetch_array($query)) {
                ?>
                <tr class="<?php echo $i % 2 == 0 ? "colorPar" : "colorImpar" ?>">
                    <td>
                        <input type="text" name="titulo<?php echo $i ?>" id="" value="<?php echo $fila['titulo'] ?>"
                            required>
                    </td>
                    <td>
                        <input type="text" name="autor<?php echo $i ?>" id="" value="<?php echo $fila['autor'] ?>"
                            required>
                    </td>
                    <td>

                        <select name="editorial<?php echo $i ?>" id="">
                            <?php
                                $sql2 = "SELECT * FROM editorial";
                                $editorial = mysqli_query($con, $sql2);
                                while ($edit = mysqli_fetch_array($editorial)) {
                                ?>
                            <option value="<?php echo $edit['id'] ?>"
                                <?php echo $fila['ideditorial'] == $edit['id'] ? "selected" : " " ?>>
                                <?php echo $edit['editorial'] ?></option>
                            <?php
                                }
                                ?>
                        </select>
                    </td>
                    <td>
                        <input type="text" name="anio<?php echo $i ?>" id="" value="<?php echo $fila['anio'] ?>"
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