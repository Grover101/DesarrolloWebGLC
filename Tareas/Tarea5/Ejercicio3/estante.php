<?php
class Estante
{
    private $fila1 = array();
    private $fila2 = array();
    private $fila3 = array();
    private $tope1, $tope2, $tope3;
    private $max;

    function __construct($ma)
    {
        $this->max = $ma;
        $this->tope1 = 0;
        $this->tope2 = 0;
        $this->tope3 = 0;
    }

    function insertarLibro($fila, $libro)
    {

        if ($fila == 1) {
            if ($this->tope1 - 1 == $this->max)
                echo "Estante lleno";
            else {
                $this->fila1[$this->tope1] = $libro;
                $this->tope1++;
            }
        }
        if ($fila == 2) {
            if ($this->tope2 - 1 == $this->max)
                echo "Estante lleno";
            else {
                $this->fila2[$this->tope2] = $libro;
                $this->tope2++;
            }
        }
        if ($fila == 3) {
            if ($this->tope3 - 1 == $this->max)
                echo "Estante lleno";
            else {
                $this->fila3[$this->tope3] = $libro;
                $this->tope3++;
            }
        }
    }

    function eliminarLibro($fila)
    {
        if ($fila == 1) {
            if ($this->tope1  == 0)
                return null;
            else {
                $this->tope1--;
                $aux = $this->fila1[$this->tope1];
                return $aux;
            }
        }
        if ($fila == 2) {
            if ($this->tope2  == 0)
                return null;
            else {
                $this->tope2--;
                $aux = $this->fila2[$this->tope2];
                return $aux;
            }
        }
        if ($fila == 3) {
            if ($this->tope3  == 0)
                return null;
            else {
                $this->tope3--;
                $aux = $this->fila3[$this->tope3];
                return $aux;
            }
        }
    }

    function mostrar($fila)
    {
        if ($fila == 1) {
            if ($this->tope1  == 0)
                echo "<h2>El estante esta vacia</h2>";
            else
                for ($i = 0; $i < $this->tope1; $i++) {
                    echo $this->fila1[$i] . "&nbsp&nbsp";
                }
        }
        if ($fila == 2) {
            if ($this->tope2  == 0)
                echo "<h2>El estante esta vacia</h2>";
            else
                for ($i = 0; $i < $this->tope2; $i++) {
                    echo $this->fila2[$i] . "&nbsp&nbsp";
                }
        }
        if ($fila == 3) {
            if ($this->tope3  == 0)
                echo "<h2>El estante esta vacia</h2>";
            else
                for ($i = 0; $i < $this->tope3; $i++) {
                    echo $this->fila3[$i] . "&nbsp&nbsp";
                }
        }
    }

    function mostrarArmario()
    {
        echo "Estante 1: ";
        for ($i = 0; $i < $this->tope1; $i++) {
            echo $this->fila1[$i] . "&nbsp&nbsp";
        }
        echo "<br>
        Estante 2: ";
        for ($i = 0; $i < $this->tope2; $i++) {
            echo $this->fila2[$i] . "&nbsp&nbsp";
        }
        echo "<br>
        Estante 3: ";
        for ($i = 0; $i < $this->tope3; $i++) {
            echo $this->fila3[$i] . "&nbsp&nbsp";
        }
    }
}