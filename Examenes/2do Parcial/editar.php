<?php
session_start();
include './conexion.php';
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$anio = $_POST['anio'];
$usuario = $_POST['usuario'];
$carrera = $_POST['carrera'];

// echo explode(".", $_FILES['imagen']['name']);
if (isset($_FILES['imagen'])) {
    $separado = explode(".", $_FILES['imagen']['name']);
    $extension = $separado[1];
    $fotografia = uniqid() . "." . $extension;
    copy($_FILES['imagen']['tmp_name'], 'images/' . $fotografia);
} else
    $fotografia = $_POST['foto'];



$sql = "UPDATE libros SET titulo='$titulo', imagen='$fotografia',autor='$autor',anio=$anio,ideditorial=$editorial,idusuario=$usuario,idcarrera=$carrera WHERE id=$id";

$query = mysqli_query($con, $sql);

mysqli_close($con);

echo '<div class="alert alert-success" role="alert">Se actualizo Correctamente</div>';