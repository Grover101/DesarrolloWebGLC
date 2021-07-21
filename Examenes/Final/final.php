<?php

class A
{
    private $n;
    private $cadena;
    function __construct($n, $cadena)
    {
        $this->n = $n;
        $this->cadena = $cadena;
    }
    function Calcularsumatoria()
    {
        $cont = 0;
        for ($i = 0; $i <= $this->n; $i++)
            $cont += $i;
        return "<span> Sumatoria es: " . $cont . "</span><br>";
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
    $cad = new A(0, $_POST['cadena']);
    echo $cad->Diagonal();
}
if (isset($_GET['n'])) {
    $cad = new A($_GET['n'], '');
    echo $cad->Calcularsumatoria();
}