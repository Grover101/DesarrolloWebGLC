<?php session_start();
session_destroy();
// setcookie("logueados", 1, time() + 3600);
// setcookie("intentos", 1, time() + 3600);
header('Location: index.php');