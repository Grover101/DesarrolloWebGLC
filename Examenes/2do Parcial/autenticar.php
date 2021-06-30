<?php
session_start();
include './conexion.php';
$correo = $_POST['correo'];
$password = sha1($_POST['password']);
$sql = "SELECT * FROM usuarios WHERE usuario='$correo' AND password='$password'";
$query = mysqli_query($con, $sql);
$fila = mysqli_fetch_array($query);
mysqli_close($con);
if ($fila != null) {
  $_SESSION['nivel'] = $fila['nivel'];
  $_SESSION['idcarrera'] = $fila['idcarrera'];
  $_SESSION['cu'] = $fila['cu'];
  $_SESSION['id'] = $fila['id'];
  $_SESSION['correo'] = $fila['usuario'];
  echo '<div class="alert alert-success" role="alert">Bienvenido a su Sesion</div>';
} else
  echo '<div class="alert alert-danger" role="alert">Datos incorrector</div>';