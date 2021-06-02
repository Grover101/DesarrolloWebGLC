<?php
if (isset($_GET["enviar"])) {
    session_start();
    $a = $_GET["a"];
    $b = $_GET["b"];
    $_SESSION['a'] = $a;
    $_SESSION['b'] = $b;
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