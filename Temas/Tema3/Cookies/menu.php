<?php
if (isset($_GET["enviar"])) {
    $a = $_GET["a"];
    $b = $_GET["b"];
    setcookie('a', $a, time() + 3600);
    setcookie('b', $b, time() + 3600);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>

<body>
    <ul>
        <li><a href="./resultado.php?operacion=suma">Suma</a></li>
        <li><a href="./resultado.php?operacion=resta">Resta</a></li>
        <li><a href="./resultado.php?operacion=multiplicacion">Multiplicion</a></li>
        <li><a href="./resultado.php?operacion=division">Division</a></li>
    </ul>
</body>

</html>