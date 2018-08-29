
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <?php include "../Section/css.php";?>
    <style>
    html,body {

        background-color: #ebe9e5;
        color: black;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
        text-shadow: 5px 5px 15px 15px #434343;


    }
    .topnav .login-container {
        float: left;
        margin-top: 2%;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: red;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
    #img{
        position: fixed;

        width: 100%;
        height: 100%;

    }

</style>

<?php include('../Section/css.php'); ?>
</head>
<body class="top-navigation">
  <div id="wrapper">
    <!-- style="background-image: url('../Content/img/mosaico.jpg');" -->

    <nav class="navbar navbar-static-top" role="navigation" style="background-color: #e08c8c;">

        <div class="navbar-header">
         <div class="topnav">
            <a href="#" class="navbar-brand">Hot-Dog</a>

        </div>
    </div> 
    <ul class="nav navbar-nav navbar-right">
        <form role="form" class="form-inline" method="POST" action="../Modelo/validalogin.php" autocomplete="on" style="margin-top: 3%;">
            <div class="row navbar-nav ml-auto">
                <div class="col-lg-12 col-xs-12" >
                    <input style="color: black;font-weight: bold; height: 27px;" size="10" class="form-control" type="Text" name="user" required autofocus="off" placeholder="Usuario" autocomplete="off">
                    <input style="color: black;font-weight: bold; height: 27px;" size="10" class="form-control" type="password" name="pass" required placeholder="Contraseña" autocomplete="off">
                    <button type="submit" class="btn btn-danger btn-sm">Entrar</button><br>
                </div>
            </div>
        </form> 
    </ul>

</nav>
<img class="img-responsive" id="img" src="../Content/img/carro.jpg" alt="">

</body>
</html>