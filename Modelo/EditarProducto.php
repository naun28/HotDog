<?php
$Id_Producto  = $_POST['Id_Producto'];
$Codigo     = $_POST['Codigo'];
$Nombre   = $_POST['Nombre'];
$Precio   = $_POST['Precio_Unitario'];
$Descripcion   = $_POST['Descripcion'];
$Cantidad    = $_POST['Cantidad'];

$con   = mysqli_connect("localhost", "root", "", "dogos");

if (!empty($Id_Producto)) {
	
$q = ("UPDATE productos set Nombre='$Nombre',Precio_Unitario='$Precio',Descripcion='$Descripcion' where Id_Producto='" . $Id_Producto . "'");

$ejecutar_q = mysqli_query($con, $q) or die("error al insertar");
}
header("location: ../Vista/productos.php");
echo "<br> Registro Insertado Correctamente! <br>";