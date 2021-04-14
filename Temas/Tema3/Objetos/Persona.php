<?php
class Persona
{
    public $nombre;
    public $apellido;

    function __construct($nom, $ape)
    {
        $this->nombre = $nom;
        $this->apellido = $ape;
    }

    function getNombreCompleto()
    {
        return $this->nombre . " " . $this->apellido;
    }
}