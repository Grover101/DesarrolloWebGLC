<?php
$con = new mysqli('localhost', 'root', '', 'bd_libreria');
if ($con->connect_error)
    die('conexion fallada' . $con->connect_error);