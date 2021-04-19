<?php

if (isset($_COOKIE['contador'])) {
    $valor = $_COOKIE['contador'] + 1;
    echo "es la vista $valor";
    setcookie("contador", $valor, time() + 3600); /* expira en 1 hoara */
} else {
    echo "es la vista 1";
    setcookie("contador", 1, time() + 3600); /* expira en 1 hoara */
}