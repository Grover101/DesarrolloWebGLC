<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Registrar Imagen</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Añadir Imagen para Habitacion</h1>
    <div class="contenido">
        <a href="./mostrarHabitaciones.php" class="volver">Volver</a>
        <form action="./agregarFoto.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="habitacion" value="<?php echo $_GET['habitacion'] ?>">
            <br>
            <label for="foto">Fotografia para la Habitacion</label>
            <input type="file" name="foto" required> <br>
            <button type="submit" name="anadir">Añadir</button>
        </form>
        <br>
        <a href="./mostrarHabitaciones.php" class="registro">Motrar Fotos de Habitacion</a>
    </div>
</body>

</html>