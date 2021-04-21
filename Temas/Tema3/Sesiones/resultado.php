<?php
session_start();
$a = $_SESSION['a'];
$b = $_SESSION['b'];
switch ($_GET["operacion"]) {
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

?>
<meta http-equiv="refresh" content="4;URL=menu.php<?php echo "?a=$a&b=$b" ?>">