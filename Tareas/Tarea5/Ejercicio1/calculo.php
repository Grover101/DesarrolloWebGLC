<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <meta http-equiv="refresh" content="4;URL=./formulario.html">
    <title>Calculo</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="contenido">
        <?php
        if (isset($_POST['n']) || isset($_POST['m'])) {
            $n = $_POST['n'];
            $m = $_POST['m'];
            if ($n % $m == 0) {
        ?>
        <img src="./img/esmultiplo.jpg" alt="">
        <?php
            } else {
            ?>
        <img src="./img/noesmultiplo.jpg" alt="">
        <?php
            }
        } else
            echo '<h1>Introzca lo los datos</h1>';
        ?>
    </div>
</body>

</html>