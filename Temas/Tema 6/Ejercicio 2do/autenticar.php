<?php
session_start();
include './conexion.php';
$correo = $_POST['correo'];
$password = sha1($_POST['password']);
$sql = "SELECT * FROM usuarios WHERE correo='$correo' AND password='$password'";
$query = mysqli_query($con, $sql);
$fila = mysqli_fetch_array($query);
mysqli_close($con);
if ($fila != null) {
  $_SESSION['nivel'] = $fila['nivel'];
  $_SESSION['id'] = $fila['id'];
  $_SESSION['nombres'] = $fila['nombres'];
  $_SESSION['apellidos'] = $fila['apellidos'];
  $_SESSION['correo'] = $fila['correo'];
  echo '<div class="alert alert-success" role="alert"><input type="hidden" id="logueado" value="si"/>Bienvenido a su Sesion</div>';
} else
  echo '<div class="alert alert-danger" role="alert"><input type="hidden" id="logueado" value="no"/>Datos incorrector</div>';