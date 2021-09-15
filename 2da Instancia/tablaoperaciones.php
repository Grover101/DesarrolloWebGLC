<?php
$tabla =  $_GET['tabla'];
$number = $_GET['num'];

switch ($tabla) {
    case 'multiplicacion':
        for ($i = 1; $i <= 10; $i++) {
            echo "<p>$number X $i = ";
            echo $number * $i;
            echo "</p>";
        }
        break;
    case 'division':
        for ($i = $number; $i <= 10 * $number; $i += $number) {
            echo "<p>$i / $number = ";
            echo $i / $number;
            echo "</p>";
        }
        break;
    case 'suma':
        for ($i = 1; $i <= 10; $i++) {
            echo "<p>$number + $i = ";
            echo $i + $number;
            echo "</p>";
        }
        break;
    case 'resta':
        for ($i = $number; $i <= $number + 10; $i++) {
            echo "<p>$i - $number = ";
            echo $i - $number;
            echo "</p>";
        }
        break;
}