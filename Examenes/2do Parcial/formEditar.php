<?php
session_start();
if (!isset($_SESSION['correo']))
    echo '<div class="alert alert-danger" role="alert">Datos incorrector </div>';

include './conexion.php';

$id = $_GET['id'];
$libro = "SELECT id, imagen, titulo, autor, ideditorial, anio, idusuario, idcarrera  FROM libros where id=" . $id;
$query = mysqli_query($con, $libro);
$libros = mysqli_fetch_array($query);

$editorial = "SELECT id, editorial FROM editoriales";
$query2 = mysqli_query($con, $editorial);

$usuario = "SELECT id,usuario, idcarrera FROM usuarios";
$query3 = mysqli_query($con, $usuario);

$carrera = "SELECT id,carrera FROM carreras";
$query4 = mysqli_query($con, $carrera);

?>
<input type="hidden" id="id" value="<?php echo $libros['id']; ?>">
<label for="titulo">Titulo</label>
<input type="text" id="titulo" required value="<?php echo $libros['titulo'] ?>">
<br>
<input type="hidden" id="fotoNombre" value="<?php echo $libros['imagen']; ?>">
<label for="imagen">Imagen</label>
<img width="200px" src="images/<?php echo $libros['imagen'];  ?>" alt="">
<input type="file" id="imagen" required>
<br>
<label for="autor">Autor</label>
<input type="text" id="autor" required value="<?php echo $libros['autor'] ?>">
<br>
<label for="editorial">Editorial</label>
<select id="editorial">
    <?php while ($editoriales = mysqli_fetch_array($query2)) { ?>
    <option value="<?php echo $editoriales['id']; ?>"
        <?php echo $libros['ideditorial'] == $editoriales['id'] ? 'selected' : ''; ?>>
        <?php echo $editoriales['editorial']; ?>
    </option>
    <?php
    }
    ?>
</select>
<br>
<label for="anio">Año</label>
<input type="number" id="anio" required value="<?php echo $libros['anio'] ?>">
<br>
<label for="usuario">Usuario</label>
<select id="usuario">
    <?php while ($usuarios = mysqli_fetch_array($query3)) { ?>
    <option value="<?php echo $usuarios['id']; ?>"
        <?php echo $libros['idusuario'] == $usuarios['id'] ? 'selected' : ''; ?>>
        <?php echo $usuarios['usuario']; ?>
    </option>
    <?php
    }
    ?>
</select>
<br>
<label for="carrera">Carrera</label>
<select id="carrera">
    <?php while ($carreras = mysqli_fetch_array($query4)) { ?>
    <option value="<?php echo $carreras['id']; ?>"
        <?php echo $libros['idcarrera'] == $carreras['id'] ? 'selected' : ''; ?>>
        <?php echo $carreras['carrera']; ?>
    </option>
    <?php
    }
    ?>
</select>
<br>
<button type="submit" class="btn btn-primary" onclick="editarDatos()">
    Editar
</button>