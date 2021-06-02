<?php
$con = new mysqli('localhost', 'root', '', 'db_tienda');
if ($con->connect_error)
    die('conexion fallada' . $con->connect_error);