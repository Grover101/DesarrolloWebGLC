<?php

class class_final
{
    private $n;
    private $cadena;
    function __construct($n, $cadena)
    {
        $this->n = $n;
        $this->cadena = $cadena;
    }
    function Calcularsumatoria($elemento)
    {
        if ($this->tope - 1 == $this->max) {
            echo "la pila esta llena";
        } else {
            $this->elementos[$this->tope] = $elemento;
            $this->tope++;
        }
    }
    function Diagonal()
    {
        if ($this->tope == 0) {
            return "la pila esta vacia";
        } else {
            $this->tope--;
            $aux = $this->elementos[$this->tope];

            return $aux;
        }
    }
}