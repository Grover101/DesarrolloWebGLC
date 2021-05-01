<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Mostrar</h1>
    <div class="contenido">
        <a href="./menu.html" class="volver">Volver</a>
        <table>
            <?php
            session_start();
            if (isset($_SESSION['a']) && isset($_SESSION['b']) && isset($_SESSION['b'])) {
                $a = $_SESSION['a'];
                $b = $_SESSION['b'];
                $c = $_SESSION['c'];

                if ($a <= $b && $a <= $c)
                    $min = $a;
                elseif ($b <= $a && $b <= $c)
                    $min = $b;
                elseif ($c <= $a && $c <= $b)
                    $min = $c;
            ?>
            <tr>
                <th class="orange">Valor de A</th>
                <th class="orange">Valor de B</th>
                <th class="orange">Valor de C</th>
            </tr>
            <tr>
                <td><?php echo $a ?></td>
                <td><?php echo $b ?></td>
                <td><?php echo $c ?></td>
            </tr>
            <tr>
                <th class="orange" colspan="2">Multiplicacion</th>
                <td><?php echo $a * $b * $c ?></td>
            </tr>
            <tr>
                <th class="orange" colspan="2">Menor</th>
                <td><?php echo $min ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>