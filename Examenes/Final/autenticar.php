<?php
session_start();
include './conexion.php';
$correo = $_POST['correo'];
$password = sha1($_POST['password']);
$sql = "SELECT * FROM usuarios WHERE email='$correo' AND password='$password'";
$query = mysqli_query($con, $sql);
$fila = mysqli_fetch_array($query);
mysqli_close($con);
if ($fila != null) {
  $_SESSION['nivel'] = $fila['nivel'];
  $_SESSION['nombre'] = $fila['nombrecompleto'];
  $_SESSION['cu'] = $fila['cu'];
  $_SESSION['id'] = $fila['id'];
  $_SESSION['email'] = $fila['email'];
  echo '<div class="alert alert-success" role="Alert">Autenticado correctamente</div>';
} else
  echo '<div class="alert alert-danger" role="alert">No autenticado</div>';