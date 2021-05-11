<?php
include '../conexion.php';
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$sql = "DELETE FROM fotoshabitacion WHERE id=$id";
$query = mysqli_query($con, $sql);
mysqli_close($con);
$ruta = "./img/" . $nombre;
array_map('unlink', glob($ruta));
?>
<h1>Imagen Eliminda</h1>
<meta http-equiv="refresh" content="3;URL=ver.php?id=<?php echo $_GET['habi'] ?>">