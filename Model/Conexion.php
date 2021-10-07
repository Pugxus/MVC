<?php
class Conexion{
    private $con;
    function __construct()
    {
        $this->con = new mysqli("localhost", "root", "","zapateria");
    }

    function getCon()
    {
        return $this->con;
    }
}
?>