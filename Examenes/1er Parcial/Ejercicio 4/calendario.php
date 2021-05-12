<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calendario</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];

    // Devolver el número de días de un mes para un año y un calendario dados
    $numeroDias = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);
    // Devuelve el día de la semana
    // Convertir un calendario soportado a la Fecha Juliana
    $diasSemana = jddayofweek(cal_to_jd(CAL_GREGORIAN, $mes, 1, $anio), 1);
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    switch ($diasSemana) {
        case 'Monday':
            $empieza = 1;
            break;
        case 'Tuesday':
            $empieza = 2;
            break;
        case 'Wednesday':
            $empieza = 3;
            break;
        case 'Thursday':
            $empieza = 4;
            break;
        case 'Friday':
            $empieza = 5;
            break;
        case 'Saturday':
            $empieza = 6;
            break;
        case 'Sunday':
            $empieza = 7;
            break;
    }

    ?>
    <a href="./formcalendario.html" class="cerrar">Volver</a>
    <h2>Año: <?php echo $anio ?></h2>
    <h2>Mes: <?php echo $meses[$mes - 1] ?></h2>
    <table class="calendario">
        <tr>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miercoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sabado</th>
            <th>Domingo</th>
        </tr>
        <?php
        $dias = 1;
        for ($i = 1; $i <= 5; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 7; $j++) {
                if ($i % 2 == 0)
                    echo '<td class="par" >';
                else
                    echo '<td class="impar" >';
                if ($dias == 1) {
                    if ($j == $empieza) {
                        echo $dias;
                        $dias++;
                    } else {
                        echo "&nbsp;";
                    }
                } else if ($dias <= $numeroDias) {
                    echo $dias;
                    $dias++;
                } else
                    echo "&nbsp;";
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>


</body>

</html>