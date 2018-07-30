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
        filter: blur(4px);
        width: 100%;
        height: 100%;

    }
     
</style>

   
</head>
<body>
    <img id="img" src="../Content/img/mosaico.jpg" alt="">
   <div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>
            <center><h2>Bienvenido</h2></center>
            <h1 class="logo-name">HD</h1>

        </div>
        
        <form class="m-t" method="POST" action="../Modelo/validalogin.php" autocomplete="on" >

                    <div class="form-group">
                        
                        <input style="color: black;font-weight: bold;" class="form-control" type="Text" name="user" required autofocus="on" placeholder="Usuario" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input style="color: black;font-weight: bold;" class="form-control" type="password" name="pass" required placeholder="Contraseña" autocomplete="off">
                    </div>

                    <button class="btn btn-danger block full-width m-b"  type="submit" name="action">Entrar</button>

                    <?php
                    if (isset($_GET['error']) == true) {
                        echo "<font style='color: red; font-weight: bold;'><p><center>Usuario o contraseña incorrecto</center></p></font>";
                    }
                    ?>

                </form>
           <center><p class="m-t"> <small>Hot-Dogs &copy; 2018</small> </p></center> 
    </div>
</div>

</body>
</html>