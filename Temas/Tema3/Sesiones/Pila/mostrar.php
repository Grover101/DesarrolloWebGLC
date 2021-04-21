<?php
include('./pila.php');
session_start();
if (isset($_SESSION['p']))
    echo $_SESSION['p']->mostrar();
?>

<meta http-equiv="refresh" content="4;URL=menupila.php">