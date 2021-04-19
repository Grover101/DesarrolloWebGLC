<meta http-equiv="refresh" content="4;URL=menu.php">

<?php
if (isset($_COOKIE['a']) && isset($_COOKIE['a'])) {
    $a = $_COOKIE['a'];
    $b = $_COOKIE['b'];

    $operacion = $_GET["operacion"];
    switch ($operacion) {
        case 'suma':
            echo "La suma es:", $a + $b;
            break;
        case 'resta':
            echo "La resta es:", $a - $b;
            break;
        case 'multiplicacion':
            echo "La multiplicacion es:", $a * $b;
            break;
        case 'division':
            echo "La division es:", $a / $b;
            break;
    }
}