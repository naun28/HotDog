
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
    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
               
               <h2 class="font-bold">Mision</h2>

                <p>
                    Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                </p>
                <h2 class="font-bold">Vision</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p> 

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" method="POST" action="../Modelo/validalogin.php" autocomplete="on" >
                         <center><h2 class="font-bold">BIENVENIDO</h2></center>
                        <div class="form-group">
                            <input style="color: black;font-weight: bold;" class="form-control" type="Text" name="user" required autofocus="on" placeholder="Usuario" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input style="color: black;font-weight: bold;" class="form-control" type="password" name="pass" required placeholder="Contraseña" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-danger block full-width m-b">Login</button><br>
                    </form>
                    <p class="m-t">
                        <small>Sistema de ventas &copy; 2018</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                &copy; Hot-Dogs Edwin
            </div>
            <div class="col-md-6 text-right">
               <small>2018</small>
            </div>
        </div>
    </div>
  

</body>
</html>