<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Resultado de la suma de dos vetores</h1>
    <table>
        <tr>
            <?php
            if (isset($_COOKIE['tam']) && isset($_GET['calcular'])) {
                $n = $_COOKIE['tam'];
                $vector1 = $_GET['a'];
                $vector2 = $_GET['b'];

                for ($i = 0; $i < $n; $i++)
                    $vector1[$i] += $vector2[$i];

                for ($i = 0; $i < $n; $i++)
                    echo "<td>" . $vector1[$i] . "</td>";
            }
            ?>
        </tr>
    </table>
</body>

</html>