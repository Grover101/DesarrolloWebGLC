<?php
//  establecer en el index no en este archivo
if (!isset($_COOKIE['php'])) {
    setcookie("php", 0, time() + 3600);
    setcookie("asp", 0, time() + 3600);
    setcookie("jsp", 0, time() + 3600);
    setcookie("otros", 0, time() + 3600);
}


if (isset($_POST['opcion'])) {
    setcookie($_POST['opcion'], $_COOKIE[$_POST['opcion']] + 1, time() + 3600);
    echo 'Se Envio';
}