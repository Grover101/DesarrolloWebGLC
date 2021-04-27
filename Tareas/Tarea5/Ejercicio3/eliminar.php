<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <h1>Eliminar</h1>
    <div class="contenido">
        <a href="./index.php" class="volver">Volver</a>
        <form action="./eliminar.php" method="GET">
            <label for="num">Introduzca el numero de estante a eliminar (1,2,3):</label>
            <input type="number" name="num" id="num">
            <button type="submit" name="eliminar">Eliminar</button>
        </form>
    </div>
    <?php
    include('./estante.php');
    session_start();
    if (isset($_SESSION['estante']) and isset($_GET['eliminar'])) {
    ?>
    <div class="contenido">
        <?php
            if ($_SESSION['estante']->eliminarLibro($_GET['num']) == null)
                echo "<h2>El estante esta vacia</h2>";
            else {
                echo $_SESSION['estante']->eliminarLibro($_GET['num']);
                echo "<h2>Se Elimino correctamente</h2>";
            }
            ?>
    </div>
    <?php
        echo '<meta http-equiv="refresh" content="4;URL=eliminar.php">';
    }
    ?>
</body>

</html>