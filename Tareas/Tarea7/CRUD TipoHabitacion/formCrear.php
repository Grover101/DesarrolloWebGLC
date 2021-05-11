<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Crear</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h2>Crear</h2>
    <div class="contenido">
        <a href="./mostrar.php" class="volver">Volver</a>
        <form action="./crear.php" method="POST">
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion">
            <label for="nroCamas">Nro Camas</label>
            <input type="number" name="nroCamas" id="nroCamas">
            <button type="submit" value="crear">Registrar</button>
        </form>
    </div>
</body>

</html>