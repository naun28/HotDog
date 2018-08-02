<?php 

$db="dogos";
$host="localhost";
$pw="";
$user="root";

$con = mysqli_connect($host,$user,$pw,$db) or die("Error al conectar ".mysql_error());


#conexion para mostrar los datos en la tabla de Productos
$conexion = new mysqli("localhost","root","","dogos");


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=dogos;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

 ?>
