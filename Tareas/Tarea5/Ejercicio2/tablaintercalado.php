<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="4;URL=./formulario.html">
    <title>Imprimir</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="contenido">
        <table>
            <?php
            if (isset($_POST['fila']) && $_POST['columna']) {
                $fila = $_POST['fila'];
                $columna = $_POST['columna'];
                $i = 1;
                for ($n = 0; $n < $fila; $n++) {
                    echo "<tr>";
                    for ($m = 0; $m < $columna; $m++) {
                        if ($m % 2 == 0)
                            echo "<td class='bolivia$i'>&nbsp</td>";
                        else
                            echo "<td class='chuquisaca$i'>&nbsp</td>";
                    }
                    if ($i == 3) $i = 0;
                    $i++;
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</body>

</html>