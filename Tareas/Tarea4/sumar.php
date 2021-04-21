<?php

if (isset($_COOKIE['tam'])) {
    $n = $_COOKIE['tam'];
    $vector1 = $_GET['a'];
    $vector2 = $_GET['b'];

    for ($i = 0; $i < $n; $i++)
        $vector1[$i] += $vector2[$i];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <table border="1">
        <tr>
            <?php
            for ($i = 0; $i < $n; $i++)
                echo "<td>" . $vector1[$i] . "</td>";
            ?>
        </tr>
    </table>
</body>

</html>