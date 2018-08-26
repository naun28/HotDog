<?php 
session_start();

if (!isset($_SESSION["user"])) {
    header("location:../Vista/login.php");
    exit();

}

?>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hot-Dog | Edwin</title>
    
<?php include('../Section/css.php'); ?>
</head>

<body class="top-navigation" >

    <div id="wrapper">
        <!-- style="background-image: url('../Content/img/mosaico.jpg');" -->
        <div id="page-wrapper"  class="gray-bg" >
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <i class="fa fa-reorder"></i>
                </button>
                <a href="inicio.php" class="navbar-brand">Hot-Dog Edwin</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <?php
                $empleado = $_SESSION["tipouser"];
                if ($empleado == "Administrador") {
                    include('menu.php'); 
                 } else{
                    include('menu2.php');
             }
                ?>


                
            </div>
        </nav>
        </div>
        <div class="wrapper wrapper-content">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="widget style1 red-bg">
                            <div class="text-center p-md">

                            <h1><b><span>Bienvenido</span></b></h1>

                            <p>
                                <h2><?php echo utf8_encode($_SESSION["nombres"]);?>&nbsp;<?php echo utf8_encode($_SESSION["apellidos"]); ?> </h2>
                            </p>


                        </div>
                        </div>
                        
                    </div>
                </div>    
            </div>
            
        <div class="footer">
            <div>
                <strong>Copyright</strong> Hot-Dogs Edwin &copy; <?php echo date('Y') ?>
            </div>
        </div>

        </div>
        </div>
    </div>

<?php include('../Section/js.php'); ?>

</body>

</html>