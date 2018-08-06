<ul class="nav navbar-nav" >
    <li class="">
        <a aria-expanded="false" role="button" href="venta.php">Venta <i class="fa fa-shopping-cart"></i></a>
    </li>
    <li class="dropdown">
        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Caja <i class="fa fa-money"></i><span class="caret"></span></a>
        <ul role="menu" class="dropdown-menu">
            <li><a href="retiro.php">Retiro<i class="fa fa-money"></i> <i class="fa fa-money"></i></a></li>
            <li><a href="corte_final.php">Corte de caja <i class="fa fa-money"></i> <i class="fa fa-money"></i> <i class="fa fa-usd"></i></a></li>
        </ul>
    </li>
    
    <li class="">
        <a aria-expanded="false" role="button" href="productos.php">Productos <i class="fa fa-cubes"></i></a>
    </li>
    <li class="">
        <a aria-expanded="false" role="button" href="usuarios.php">Usuarios <i class="fa fa-user-circle-o"></i></a>
    </li>
</ul>
<ul class="nav navbar-top-links navbar-right">
   <?php $nombre = utf8_encode($_SESSION["nombres"]);
   $apellido = utf8_encode($_SESSION["apellidos"]);
   $empleado = $nombre." ".$apellido;  
   echo $empleado; ?>
   <li>
    <a href="../Controlador/Salir.php">
        <i class="fa fa-sign-out"></i> Salir
    </a>
    </li>
</ul>