<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Ejercicio 2</h1>
    <form action="./Ejercicio2.php" method="GET">
        <label for="i">Introduzca el numero i (Filas):</label>
        <br>
        <input type="number" name="i" id="i">
        <br>
        <label for="j">Introduzca el numero j (Columnas):</label>
        <br>
        <input type="number" name="j" id="j">
        <br>
        <button type="submit" name="enviar">Construir tabla</button>
    </form>
    <div>
        <table border="1">

            <?php
            if (isset($_GET['enviar'])) {
                $i = $_GET['i'];
                $j = $_GET['j'];
                for ($n = 0; $n < $i; $n++) {
                    echo "<tr>";
                    for ($m = 0; $m < $j; $m++)
                        echo "<td><pre> </pre></td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</body>

</html>