<?PHP
include "../Controlador/conexion.php";
$cn    = Conectarse();
$fech = $_GET['fecha'];

//OR DATE(FechaIni) BETWEEN '" . DATE($fecha) . "' AND DATE(FechaFin) 

$select = "SELECT * FROM corte WHERE DATE(fecha)  =  '" . DATE($fech) . "'" ;
$result = mysqli_query($cn , $select);

if (!$result) {

    die(mysql_error());

} else {
    $arreglo["data"] = [];
    while ($data = mysqli_fetch_assoc($result)) {

        $arreglo["data"][] = array_map("utf8_encode", $data);

    }
    echo json_encode($arreglo);

}

mysqli_free_result($result);
mysqli_close($cn);
