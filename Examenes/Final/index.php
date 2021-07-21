<?php

// session_start();
if (!isset($_COOKIE['ingreso'])) {
    echo 'hoasdf';
    setcookie("ingreso", 1, time() + 3600);
}
// if (isset($_SESSION['email']))
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <a href="#" onclick="logout()" class="cerrar">Cerrar Sesion</a>
    <div class="contenido">
        <header id="cabeza" class="cabecera">
            <img src="./img/logo" alt="" class="logo" />
            <div class="datos">
                Carreras: Ing de Sistemas. Ing. en Ciencias de la Computacion
            </div>
        </header>
        <div class="wrap">
            <div id="menu" class="menu">
                <ul class="menuvertical">
                    <li><a href="#" onclick="cargarContenido('./pregunta1.php')">Pregunta 1</a></li>
                    <li><a href="#" onclick="cargarContenido('./pregunta2.html')">Pregunta 2</a></li>
                    <li><a href="#" onclick="cargarContenido('./pregunta3.html')">Pregunta 3</a></li>
                    <li><a href="#" onclick="cargarContenidoFetch('./login.html')">Pregunta 4</a></li>
                    <li><a href="#" onclick="cargarContenido('./pregunta5.php')">Pregunta 5</a></li>
                </ul>
            </div>
            <div id="cuerpo" class="cuerpo">

            </div>
        </div>
        <div id="pie" class="footer">
            <div class="datos">
                Semestre 1-2021 <br />
                Alumno: Grover Limachi Carrillo CU: 111-295

            </div>
        </div>
    </div>
    <script src="./main.js"></script>
</body>

</html>