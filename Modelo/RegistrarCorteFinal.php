<?php
include("../Controlador/conec.php");
$fechafinal   = $_POST['fechafinal'];
$empleado   = $_POST['empleado'];
$cortetotalfinal   = $_POST['cortetotalfinal'];
$cortecajafinal    = $_POST['cortecajafinal'];
$status_retiro = 1;
$status_corte = 2;


if ($cortetotalfinal > $cortecajafinal) {
$faltante = $cortetotalfinal - $cortecajafinal;
$sobrante = 0;
	$con   = mysqli_connect("localhost", "root", "", "dogos");

$q = ("INSERT INTO cortefinal VALUES ('','$cortetotalfinal','$cortecajafinal','$faltante','$sobrante','$fechafinal','$empleado')");
$ejecutar_q = mysqli_query($con, $q) or die("error al insertar");

$que = ("UPDATE ventas set status_corte = '$status_corte', status_retiro='$status_retiro' where fecha='" . $fechafinal . "' AND empleado ='" . $empleado . "'");

$ejec_q = mysqli_query($con, $que) or die("error al insertar");
header("location: ../Controlador/Salir.php");
echo "<br> Registro Insertado Correctamente! <br>";
	
}
if ($cortetotalfinal == $cortecajafinal || $cortecajafinal > $cortetotalfinal) {
$sobrante = $cortecajafinal - $cortetotalfinal;
$faltante = 0;
	
$con   = mysqli_connect("localhost", "root", "", "dogos");

$q = ("INSERT INTO cortefinal VALUES ('','$cortetotalfinal','$cortecajafinal','$faltante','$sobrante','$fechafinal','$empleado')");
$ejecutar_q = mysqli_query($con, $q) or die("error al insertar");

$que = ("UPDATE ventas set status_corte = '$status_corte', status_retiro='$status_retiro' where fecha='" . $fechafinal . "' AND empleado ='" . $empleado . "'");

$ejec_q = mysqli_query($con, $que) or die("error al insertar");
header("location: ../Controlador/Salir.php");
echo "<br> Registro Insertado Correctamente! <br>";
}


