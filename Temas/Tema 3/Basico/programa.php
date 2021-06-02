<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if ($a >= $b && $a >= $c)
    echo "El Mayor es: " . $a;
elseif ($b >= $a && $b >= $c)
    echo "El Mayor es: " . $b;
elseif ($c >= $a && $c >= $b)
    echo "El Mayor es: " . $c;