<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Ejercicio 1</h1>
    <div class="contenido">
        <a href="./index.html" class="volver">Volver</a>
        <form action="./Ejercicio1.php" method="GET">
            <label for="entrada">Introduzca el numero a generar la serie fibonacci:</label>
            <input type="number" name="n" id="entrada" required>
            <button type="submit" name="enviar">Generar la serie</button>
        </form>
        <div class="contenido">
            <ol>
                <?php
                if (isset($_GET['enviar'])) {
                    $n = $_GET['n'];
                    $a = 0;
                    $b = 1;
                    for ($i = 0; $i < $n; $i++) {
                        $a += $b;
                        $b = $a - $b;
                        echo '<li>' . $a . '</li>';
                    }
                }
                ?>
            </ol>
        </div>
    </div>
</body>

</html>