<?php

class A
{
    private $n;
    private $cadena;
    function __construct($n = null, $cadena = null)
    {
        $this->n = $n;
        $this->cadena = $cadena;
    }
    function Calcularsumatoria()
    {
        $cont = 0;
        $texto = '';
        for ($i = 1; $i <= $this->n; $i++) {
            $cont += $i;
            $texto .= $i;
            if ($i < $this->n) {
                $texto .= '+';
            }
        }
        return "<span> Sumatoria es: " . $texto . " = " . $cont . "</span><br>";
    }
    function Diagonal()
    {
        $size = strlen($this->cadena);
        $recorre = 0;
        $tabla = '<span>Resultado para la Tabla:</span><table class="table">';
        for ($i = 0; $i < $size; $i++) {
            $tabla .= "<tr>";
            for ($j = 0; $j < $size; $j++)
                $tabla .= ($j == $recorre) ? '<td style="background: blue;">' . $this->cadena[$j] . '</td>' : '<td>&nbsp;</td>';
            $recorre++;
            $tabla .= "</tr>";
        }
        $tabla .= '</table>';
        return $tabla;
    }
}


if (isset($_POST['cadena'])) {
    $cad = new A(null, $_POST['cadena']);
    echo $cad->Diagonal();
}
if (isset($_GET['n'])) {
    $cad = new A($_GET['n']);
    echo $cad->Calcularsumatoria();
}