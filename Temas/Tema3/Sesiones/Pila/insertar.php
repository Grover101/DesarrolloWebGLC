<?php
include('./pila.php');
session_start();
if (!isset($_SESSION['p']))
    $_SESSION['p'] = new Pila(50);

$_SESSION['p']->insertar($_GET['elemento']);

?>

Se inserto con exito
<meta http-equiv="refresh" content="4;URL=menupila.php">