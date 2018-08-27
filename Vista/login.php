
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
               
                <a href="#" class="navbar-brand">Hot-Dog Edwin</a>
                <form role="form" class="form-inline m-t col-lg-12" method="POST" action="../Modelo/validalogin.php" autocomplete="on"  style="margin-top: -3%; margin-left: 820px;">
                    <div class="form-group">
                        <input style="color: black;font-weight: bold;" class="form-control" type="Text" name="user" required autofocus="off" placeholder="Usuario" autocomplete="off">
                        <input style="color: black;font-weight: bold;" class="form-control" type="password" name="pass" required placeholder="Contraseña" autocomplete="off">
                        <button type="submit" class="btn btn-danger">Entrar</button><br>
                    </div>
                </form>
            </div>
                  
            
            
        </nav>
    <img class="img-responsive" id="img" src="../Content/img/logo.jpg" alt="">
    
</body>
</html>