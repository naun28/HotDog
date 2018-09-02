<?PHP
include "../Controlador/conexion.php";
cn = Conectarse();
$fecha = $_GET['fecha'];
$select = "SELECT * FROM corte WHERE DATE(fecha) = '".DATE($fecha)."'";
$result = mysqli_query($cn , $select);

if (!$result) {

    die(mysqli_error());

} else {
    $arreglo["data"] = [];
    while ($data = mysqli_fetch_assoc($result)) {

        $arreglo["data"][] = array_map("utf8_encode", $data);

    }
    echo json_encode($arreglo);

}

mysqli_free_result($result);
mysqli_close($cn);
