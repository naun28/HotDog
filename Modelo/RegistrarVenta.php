<?php
include("../Controlador/conec.php");

$venta    = $_POST['venta'];
$recibido   = $_POST['recibido'];
$cambio   = $recibido - $venta;
$fecha= $_POST['fecha'];
$empleado= $_POST['empleado'];



$con   = mysqli_connect("localhost", "root", "", "dogos");

$q = ("INSERT INTO ventas VALUES ('','$venta','$recibido','$cambio','$fecha','$empleado')");

$ejecutar_q = mysqli_query($con, $q) or die("error al insertar");
header("location: ../Vista/venta.php");
echo "<br> Registro Insertado Correctamente! <br>";
