<?php
include("../Controlador/conec.php");
$nombres   = $_POST['nombres'];
$apellidos   = $_POST['apellidos'];
$user   = $_POST['user'];
$pass    = $_POST['pass'];
$tipouser    = $_POST['tipouser'];



$con   = mysqli_connect("localhost", "root", "", "dogos");

$q = ("INSERT INTO usuarios VALUES ('','$nombres','$apellidos','$user','$pass','$tipouser')");

$ejecutar_q = mysqli_query($con, $q) or die("error al insertar");
header("location: ../Vista/usuarios.php");
echo "<br> Registro Insertado Correctamente! <br>";
