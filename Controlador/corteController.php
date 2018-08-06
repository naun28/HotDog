<?php 
require('conec.php');
$nombre = utf8_encode($_SESSION["nombres"]);
$apellido = utf8_encode($_SESSION["apellidos"]);
$empleado = $nombre." ".$apellido;  

date_default_timezone_set("America/Mexico_City");
$fe= date('Y-m-d');
$rs = mysqli_query($con, "SELECT SUM(venta) as total FROM ventas where Fecha='$fe' AND empleado like '%$empleado' AND status_venta = 0");

$row = mysqli_fetch_array($rs);

$total=$row['total']; 
  echo $total;

mysqli_close($con);

?>