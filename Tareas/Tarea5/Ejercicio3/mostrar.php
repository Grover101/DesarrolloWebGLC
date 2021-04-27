<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <h1>Mostrar</h1>
    <div class="contenido">
        <a href="./index.php" class="volver">Volver</a>
        <form action="./mostrar.php" method="GET">
            <label for="nummero">Introduzca el numero de estante a mostrar (1,2,3):</label>
            <input type="number" name="numero" id="numero">
            <button type="submit" name="mostrar">Mostrar</button>
        </form>
    </div>
    <?php
    include('./estante.php');
    session_start();
    if (isset($_SESSION['estante']) and isset($_GET['mostrar'])) {
    ?>
    <div class="contenido">
        <?php
            $_SESSION['estante']->mostrar($_GET['numero']);
            ?>
    </div>
    <?php
        echo '<meta http-equiv="refresh" content="4;URL=mostrar.php">';
    }
    ?>
</body>

</html>