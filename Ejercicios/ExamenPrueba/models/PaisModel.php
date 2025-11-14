<?php

require_once 'db/Conexion.php';

class PaisModel
{
    private Conexion $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion('127.0.0.1', 'unioneuropea', 'root', '');
    }

    public function getAll(): array
    {
        return $this->conexion->query('SELECT * FROM paises');
    }
}