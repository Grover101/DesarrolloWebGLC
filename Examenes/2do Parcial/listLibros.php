<?php
session_start();
if (!isset($_SESSION['correo']))
    echo '<div class="alert alert-danger" role="alert">No Inicio Seccion </div>';
else {

    include './conexion.php';

    $sql = "SELECT libros.id, imagen, titulo, autor, editoriales.editorial, anio, usuarios.usuario, carreras.carrera  FROM libros LEFT JOIN editoriales ON libros.ideditorial = editoriales.id LEFT JOIN usuarios ON libros.idusuario = usuarios.id LEFT JOIN carreras ON libros.idcarrera = carreras.id";

    $query = mysqli_query($con, $sql);
    $fila = mysqli_fetch_array($query);

    if (isset($_GET['orden'])) {
        $orden = trim($_GET['orden']);
        $tipo = trim($_GET['tipo']);
        if ($tipo == 'ASC') {
            $nuevotipo = 'DESC';
        } else
            $nuevotipo = 'ASC';
        $sql = $sql . ' ORDER BY ' . $orden . ' ' . $tipo;
    } else
        $orden = "";

    $query = mysqli_query($con, $sql);
?>
<table class="table table-bordered">
    <tr>
        <th>Imagen</th>
        <th><a href="#" onclick="ordenar('<?php echo $orden == 'titulo' ? $nuevotipo : 'ASC'; ?>','titulo')">Titulo</a>

        </th>
        <th><a href="#" onclick="ordenar('<?php echo $orden == 'autor' ? $nuevotipo : 'ASC'; ?>','autor')">Autor</a>
        </th>
        <th><a href="#"
                onclick="ordenar('<?php echo $orden == 'editorial' ? $nuevotipo : 'ASC'; ?>','editorial')">Editorial</a>
        </th>
        <th><a href="#" onclick="ordenar('<?php echo $orden == 'anio' ? $nuevotipo : 'ASC'; ?>','anio')">Año</a>
        </th>
        <th><a href="#"
                onclick="ordenar('<?php echo $orden == 'usuario' ? $nuevotipo : 'ASC'; ?>','usuario')">Usuario</a>
        </th>
        <th><a href="#"
                onclick="ordenar('<?php echo $orden == 'carrera' ? $nuevotipo : 'ASC'; ?>','carrera')">Carrera</a>
        </th>
        <?php
            if ($_SESSION['nivel'] == 1) { ?>
        <th>Operaciones</th>
        <?php
            } ?>

    </tr>
    <?php while ($fila = mysqli_fetch_array($query)) { ?>
    <tr>
        <td><img width="100px" src="images/<?php echo $fila['imagen'];  ?>" alt=""></td>
        <td><?php echo $fila['titulo'] ?></td>
        <td><?php echo $fila['autor'] ?></td>
        <td><?php echo $fila['editorial'] ?></td>
        <td><?php echo $fila['anio'] ?></td>
        <td><?php echo $fila['usuario'] ?> </td>
        <td><?php echo $fila['carrera'] ?> </td>
        <?php if ($_SESSION['nivel'] == 1) { ?>
        <td>
            <a href="#" onclick="editar(<?php echo $fila['id'] ?>)">Editar</a>
        </td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>
<?php
    mysqli_close($con);
}
?>