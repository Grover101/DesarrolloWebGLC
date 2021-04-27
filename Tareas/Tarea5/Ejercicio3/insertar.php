<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <?php
    include('./estante.php');
    session_start();
    if (!isset($_SESSION['estante']))
        $_SESSION['estante'] = new Estante(50);

    $_SESSION['estante']->insertarLibro($_GET['nroFila'], $_GET['libro']);
    ?>
    <h1>El libro se inserto con exito</h1>
    <meta http-equiv="refresh" content="4;URL=index.php">
</body>


</html>