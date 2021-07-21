<div class="container">
    Cantidad de veces que se ingreso a la pregunta 1:
    <?php
    echo $_COOKIE['ingreso'];
    $valor = $_COOKIE['ingreso'] + 1;
    setcookie("ingreso", $valor, time() + 3600);

    session_start();
    if (isset($_SESSION['email'])) {
    ?>
    <br>Estos son los datos de autenticación: <br>
    Nombre Completo: <?php echo "<span class='celeste'>" . $_SESSION['nombre'] . "</span>" ?>
    <br>
    Nivel: <?php echo $_SESSION['nivel']; ?>
    <?php echo $_SESSION['nivel'] == '1' ? "<span class='celeste'>Administrador</span>" : "<span class='celeste'>Usuario</span>" ?>
    <?php }
    ?>

</div>