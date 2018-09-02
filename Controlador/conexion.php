<?php
function Conectarse()
{
    $servidor    = "localhost";
    $basededatos = "dogos";
    $usuario     = "root";
    $clave       = "";

   $cn = new mysqli($servidor, $usuario, $clave, $basededatos) or die("Error conectando a la base de datos");
    return $cn;
}
