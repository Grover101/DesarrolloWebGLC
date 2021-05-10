<?php
include './conexion.php';
$n = $_POST['n'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Resgistrar Alumnos</h1>
    <a href="./Fintroduccion.html" class="volver">Volver</a>
    <form action="./insertar.php" method="POST" class="form">
        <div class="content titulos">
            <label for="">Nombres</label>
            <label for="">Apellidos</label>
            <label for="">CU</label>
            <label for="">Sexo</label>
            <label for="">Carrera</label>
        </div>
        <?php
        for ($i = 0; $i < $n; $i++) {
        ?>
        <div class="content">
            <label class="numero"><?php echo $i + 1 ?></label>
            <input type="text" name="<?php echo "nombre[$i]" ?>" id="" class="entradas">
            <input type="text" name="<?php echo "apellido[$i]" ?>" id="" class="entradas">
            <input type="text" name="<?php echo "cu[$i]" ?>" id="" class="entradas" maxlength="14">
            <label for="">
                <input type="radio" name="<?php echo "sexo[$i]" ?>" id="" value="1" class="radio" checked>
                <span>Masculino</span>
            </label>
            <label for="">
                <input type="radio" name="<?php echo "sexo[$i]" ?>" id="" value="0" class="radio">
                <span>Femenino</span>
            </label>

            <select name="<?php echo "carrera[$i]" ?>" id="">
                <?php
                    $sql = "SELECT * FROM carreras";
                    $query = mysqli_query($con, $sql);
                    while ($fila = mysqli_fetch_array($query)) {
                    ?>
                <option value="<?php echo $fila['codigo'] ?>"><?php echo $fila['carrera'] ?></option>
                <?php
                    }
                    ?>
            </select>
        </div>
        <?php
        }
        mysqli_close($con);
        ?>
        <div class="content">
            <div class="cajabotones">
                <button type="submit">Insertar</button>
                <button type="reset">Borrar</button>
            </div>
        </div>
    </form>
</body>

</html>