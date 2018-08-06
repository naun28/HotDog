<?php
include("../Controlador/conec.php");
$fechafinal   = $_POST['fechafinal'];
$empleado   = $_POST['empleado'];
$cortetotalfinal   = $_POST['cortetotalfinal'];
$cortecajafinal    = $_POST['cortecajafinal'];


$con   = mysqli_connect("localhost", "root", "", "dogos");

$q = ("INSERT INTO cortefinal VALUES ('','$cortetotalfinal','$cortecajafinal','$fechafinal','$empleado')");
$ejecutar_q = mysqli_query($con, $q) or die("error al insertar");

header("location: ../Vista/login.php");
echo "<br> Registro Insertado Correctamente! <br>";
