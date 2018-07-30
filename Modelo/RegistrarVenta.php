<?php
#include("../Conect/conexion.php");

$venta    = $_POST['venta'];
$recibido   = $_POST['recibido'];
$cambio   = $_POST['cambio'];


$con   = mysqli_connect("localhost", "root", "", "dogos");

$q = ("INSERT INTO ventas VALUES ('','$venta','$recibido','$cambio')");

$ejecutar_q = mysqli_query($conexion, $q) or die("error al insertar");
header("location: ../Vista/venta.php");
echo "<br> Registro Insertado Correctamente! <br>";
