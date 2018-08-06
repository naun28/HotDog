<?php
include("../Controlador/conec.php");
$id_usuario  = $_POST['id_usuario'];
$nombres   = $_POST['nombres'];
$apellidos   = $_POST['apellidos'];
$user   = $_POST['user'];
$pass    = $_POST['pass'];
$tipouser    = $_POST['tipouser'];

$con   = mysqli_connect("localhost", "root", "", "dogos");


	
$q = ("UPDATE usuarios set nombres='$nombres',apellidos='$apellidos',user='$user',pass='$pass',tipouser='$tipouser' where id_usuario='" . $id_usuario . "'");

$ejecutar_q = mysqli_query($con, $q) or die("error al insertar");

header("location: ../Vista/usuarios.php");
echo "<br> Registro Insertado Correctamente! <br>";