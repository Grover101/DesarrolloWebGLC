<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="contenido">
        <table>
            <?php
            if (isset($_POST['fila']) && $_POST['columna']) {
                $fila = $_POST['fila'];
                $columna = $_POST['columna'];
                for ($n = 0; $n < $fila + 1; $n++) {
                    echo "<tr>";
                    for ($m = 0; $m < $columna + 1; $m++) {
                        $a = $m + $n;
                        if ($n == 0 && $m == 0)
                            echo "<th class='blue'>&nbsp</th>";
                        elseif ($n == 0)
                            echo "<th class='blue'>$m</th>";
                        elseif ($m == 0)
                            echo "<th class='blue'>$n</th>";
                        else
                            echo "<td>$a</td>";
                    }
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</body>

</html>