<ul class="nav navbar-nav" >
    <li class="">
        <a aria-expanded="false" role="button" href="venta.php">Venta <i class="fa fa-shopping-cart"></i></a>
    </li>
  <li class="">
        <a aria-expanded="false" role="button" href="productos.php">Productos <i class="fa fa-cubes"></i></a>
    </li>
    <li class="">
        <a aria-expanded="false" role="button" href="usuarios.php">Usuarios <i class="fa fa-user-circle-o"></i></a>
    </li>
     <!--  <li class="dropdown">
        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Inventario <span class="caret"></span></a>
        <ul role="menu" class="dropdown-menu">
            <li><a href="agregaproducto.php">Agregar productos</a></li>
            <li><a href="agregarexistencia.php">Agregar existencia</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="existencias.php">Existencias</a></li>

        </ul>
    </li> -->
   <!--  <li class="dropdown">
        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Cortes <span class="caret"></span></a>
        <ul role="menu" class="dropdown-menu">
            <li><a href="Corte.php">Realizar corte</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Usuarios <span class="caret"></span></a>
        <ul role="menu" class="dropdown-menu">
            <li><a href="usuarios.php">Usuarios</a></li>
        </ul>
    </li>
              -->       <!-- <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu item <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="#">Menu item</a></li>
                            <li><a href="#">Menu item</a></li>
                            <li><a href="#">Menu item</a></li>
                            <li><a href="#">Menu item</a></li>
                        </ul>
                    </li> -->

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