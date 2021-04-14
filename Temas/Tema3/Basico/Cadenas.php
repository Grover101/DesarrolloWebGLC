<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas</title>
</head>

<body>
    <form action="./Cadenas.php" method="GET">
        <label for="cadena">Introduzca una cadena</label>
        <br>
        <input type="text" name="cadena" id="cadena">
        <br>
        <button type="submit" name="comprobar">Comprobar</button>
    </form>
    <br>
    <?php
    if (isset($_GET['comprobar'])) {
        $cadena = $_GET['cadena'];
        $aux = "";
        $tam = strlen($cadena);
        echo "<p>Ejercicio 1:</p>";
        for ($i = $tam - 1; $i >= 0; $i--) {
            $aux .= $cadena[$i];
        }
        echo "<p>" . $aux . "</p>";
        echo "<br><p>Ejercicio 2:</p>";


        echo $cadena . "<br>";
        for ($i = 1; $i < $tam; $i++) {
            echo $cadena[$i];
            for ($j = 0; $j < $tam - 2; $j++)
                echo "&nbsp&nbsp";
            echo $cadena[$tam - $i];
            if ($i < $tam - 1)
                echo "<br>";
        }
        echo "<br>" . $aux;
    }
    ?>
</body>

</html>