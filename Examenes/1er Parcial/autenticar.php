<?php
session_start();
$correo = $_POST['correo'];
$password = sha1($_POST['password']);
include("conexion.php");
$sql = "SELECT * FROM usuarios 
WHERE correo='$correo' AND password='$password'";
// echo $sql;
$query = mysqli_query($con, $sql);
$fila = mysqli_fetch_array($query);
setcookie("correo", 'a', time() + 3600);
if (!isset($_COOKIE['logueados']) && !isset($_COOKIE['intentos']) && $_COOKIE['correo'] != $_SESSION['correo']) {

    setcookie("logueados", 1, time() + 3600);
    setcookie("intentos", 1, time() + 3600);
}

if ($fila != null) {
    $valor = $_COOKIE['logueados'] + 1;
    setcookie("nombre", $fila['correo'], time() + 3600);
    setcookie("logueados", $valor, time() + 3600);
    $_SESSION['nivel'] = $fila['nivel'];
    $_SESSION['estado'] = $fila['estado'];
    $_SESSION['nombres'] = $fila['nombres'];
    $_SESSION['apellidos'] = $fila['apellidos'];
    $_SESSION['correo'] = $fila['correo'];
    header('Location: index.php');
} else {
    $valor = $_COOKIE['intentos'] + 1;
    setcookie("intentos", $valor, time() + 3600);
?>
<h1 class="rojo">Datos de
    Autenticación Equivocados</h1>
<p>Numero de intentos al iniciar session <?php echo $_COOKIE['intentos'] ?></p>
<meta http-equiv="refresh" content="3;URL=index.php">
<?php
}

?>