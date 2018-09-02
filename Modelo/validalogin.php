
<?php
session_start();
unset($_SESSION["nombres"]);
$usuario = trim($_POST['user']);
$password = trim($_POST['pass']);

$db   = "dogos";
$host = "localhost";
$pw   = "";
$user = "root";

//require_once('singleton.php');

$con = mysqli_connect($host, $user, $pw, $db) or die("Error al conectar " . mysql_error());

$query  = "SELECT * FROM usuarios WHERE user = '$usuario' AND pass = '$password'";
$result = mysqli_query($con, $query);
$row    = mysqli_fetch_assoc($result);
if (!isset($row)) {

    header("location: ../Vista/inicio.php");
}
$id_usuario  = $row['id_usuario'];
$nombres   = $row["nombres"];
$apellidos = $row["apellidos"];
$usuario   = $row['user'];
$password = $row['pass'];
$tipouser = $row['tipouser'];

if ($tipouser === "Administrador") {
    if ($row["user"] === $usuario && $row["pass"] === $password) {
        session_start();
        $_SESSION["nombres"]   = $nombres;
        $_SESSION["apellidos"] = $apellidos;
        $_SESSION["id_usuario"] = $id_usuario;
        $_SESSION["user"] = $usuario;
        $_SESSION["tipouser"] = $tipouser;
        echo '<script language="javascript">alert("Bienvenido");</script>'; 
        header("location: ../Vista/inicio.php");

    } else {
        echo "
                <script type='text/javascript'>
                alert('Usuario o contraseña incorrecto');
                </script>";
        header("location: ../Vista/login.php");
        exit();
    }
}
if ($tipouser === "Empleado") {
    if ($row["user"] === $usuario && $row["pass"] === $password) {
        session_start();
        $_SESSION["nombres"]   = $nombres;
        $_SESSION["apellidos"] = $apellidos;
        $_SESSION["id_usuario"] = $id_usuario;
        $_SESSION["user"] = $usuario;
        $_SESSION["tipouser"] = $tipouser;

        echo "
                <script>
                var mensaje = 'sesión iniciada';
                alert(mensaje);
                </script>";

        header("location: ../Vista/inicio.php");

    } else {
        echo "
                <script type='text/javascript'>
                alert('Usuario o contraseña incorrecto');
                </script>";
        header("location: ../Vista/login.php?error=1");
        exit();
    }
}

?>
