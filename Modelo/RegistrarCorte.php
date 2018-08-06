<?php
include("../Controlador/conec.php");
$fecha   = $_POST['fecha'];
$empleado   = $_POST['empleado'];
$cortetotal   = $_POST['cortetotal'];
$cortecaja    = $_POST['cortecaja'];
$status_retiro = 1;

$con   = mysqli_connect("localhost", "root", "", "dogos");

$q = ("INSERT INTO corte VALUES ('','$cortetotal','$cortecaja','$fecha','$empleado')");
$ejecutar_q = mysqli_query($con, $q) or die("error al insertar");

$que = ("UPDATE ventas set status_retiro='$status_retiro' where fecha='" . $fecha . "' AND empleado ='" . $empleado . "'");

$ejec_q = mysqli_query($con, $que) or die("error al insertar");

header("location: ../Vista/corte.php");
echo "<br> Registro Insertado Correctamente! <br>";
