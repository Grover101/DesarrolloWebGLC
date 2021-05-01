<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Introducir</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <h1>Introducir</h1>
    <div class="contenido">
        <a href="./menu.html" class="volver">Volver</a>
        <form action="./introducir.php" method="POST">
            <label for="a">Introduzca el numero (a):</label>
            <input type="number" name="a" id="a" required />
            <label for="b">Introduzca el numero de (b):</label>
            <input type="number" name="b" id="b" required />
            <label for="c">Introduzca el numero de (c):</label>
            <input type="number" name="c" id="c" required />
            <button type="submit" name="enviar">Guardar datos</button>
        </form>
    </div>
    <div class="contenido">
        <?php
        if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['b'])) {
            session_start();
            $_SESSION['a'] = $_POST['a'];
            $_SESSION['b'] = $_POST['b'];
            $_SESSION['c'] = $_POST['c'];
            echo "<h2>Introducido con exito</h2>";
        }
        ?>
    </div>
</body>

</html>