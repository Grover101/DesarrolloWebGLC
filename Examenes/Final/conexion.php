<?php
$con = new mysqli('localhost', 'root', '', 'bd_correos');
if ($con->connect_error)
    die('conexion fallada' . $con->connect_error);