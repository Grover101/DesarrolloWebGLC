<?php

if (isset($_GET['n'])) {
    $n = $_GET['n'];
    setcookie('tam', $n, time() + 3600);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form action="./sumar.php" method="GET">
        <label for="">Vector 1: </label>
        <?php
        for ($i = 0; $i < $n; $i++)
            echo "<input type='number' name='a[$i]'>";
        ?>
        <br>
        <label for="">Vector 2: </label>
        <?php
        for ($i = 0; $i < $n; $i++)
            echo "<input type='number' name='b[$i]'>";
        ?>
        <br>
        <button type="submit">Calular la Suma</button>
    </form>
</body>

</html>