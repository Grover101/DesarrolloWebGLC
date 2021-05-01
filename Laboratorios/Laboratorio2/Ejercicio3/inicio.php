<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericio 3</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Ejercicio 3</h1>
    <div class="contenido">
        <a href="../index.html" class="volver">Volver</a>
        <div class="mensaje">
            <?php
            if (isset($_COOKIE['contador'])) {
                $valor = $_COOKIE['contador'] + 1;
                echo "<h2>Gracias por ser un visitante frecuente usted visito este sitio $valor de veces</h2>";
                setcookie("contador", $valor, time() + 3600);
            } else {
                echo "<h2>Bienvenido</h2>";
                setcookie("contador", 1, time() + 3600);
            }
            ?>
        </div>
    </div>
</body>

</html>