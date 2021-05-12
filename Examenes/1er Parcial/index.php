<?php

session_start();
if (!isset($_SESSION['nombres'])) {
    header("Location: login.html");
} else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <a href="./cerrarSesion.php" class="cerrar">Cerrar Sesion</a>
    <div class="contenido">
        <header class="cabecera">
            <img src="./img/logo" alt="" class="logo" />
            <img class="tecnologia" src="./img/tecnologia.png" alt="">

            <div class="datos">
                Carreras: Ing de Sistemas. Ing. en Ciencias de la Computacion
                <br />
                Semestre 1-2021 <br />
                Alumno: Grover Limachi Carrillo CU: 111-295
            </div>
        </header>
        <div class="wrap">
            <div class="informacion">
                Estos son los datos de autenticación: <br>
                Nombre: <?php echo "<span class='celeste'>" . $_SESSION['nombres'] . "</span>" ?> <br>
                Apellidos: <?php echo "<span class='celeste'>" . $_SESSION['apellidos'] . "</span class='celeste'>" ?>
                <br>
                Nivel:
                <?php echo $_SESSION['nivel'] == '1' ? "<span class='celeste'>Administrador</span>" : "<span class='celeste'>Usuario</span>" ?>
            </div>
            <div class="menu">
                <ul class="menuvertical">
                    <li class="rojo"><a href="./index.php">Inicio</a></li>
                    <li class="amarillo"><a href="./Ejercicio 3/pregunta3.php">Pregunta 3</a></li>
                    <li class="verde"><a href="./Ejercicio 4/formcalendario.html">Pregunta 4</a></li>
                    <li><a href="./Ejercicio 5/pregunta5.php">Pregunta 5</a></li>
                </ul>
            </div>
        </div>
        <div class="footer">
            <span>
                Todos los Derechos Reservados <br>
                Nro intentos: <?php echo $_COOKIE['intentos'] + $_COOKIE['logueados'] ?> nro erroneos:
                <?php echo $_COOKIE['intentos'] ?> nro ingresos: <?php echo $_COOKIE['logueados'] ?>
            </span>
        </div>
    </div>
</body>

</html>
<?php
}