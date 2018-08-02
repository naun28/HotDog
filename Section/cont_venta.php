
<div class="row">
    <div class="col-MD-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                        <CENTER><h3>ORDENAR</h3></CENTER>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            
                        </div>
            </div>
            <div class="ibox-content">
              <div class="row">
              <div class="col-sm-3" >
                <div class="form-group">
                    <label class="control-label" for="order_id">HotDog</label>
                   <button id="hotdog" value="1" class="btn btn-primary  dim btn-large-dim" onclick="dogo()" style="width: 100%; height: 15%;"><img src="../Content/img/Hotdog.png" style="width: 100%; height: 100%;"></button>
                </div>
                 </div>
                 <div class="col-sm-3" >
                <div class="form-group">
                    <label class="control-label" for="order_id">HotDog d/Wini</label>
                   <button id="dogodoble" value="4" class="btn btn-primary  dim btn-large-dim" onclick="dogodoble()" style="width: 100%; height: 15%;"><img src="../Content/img/Hotdog.png" style="width: 100%; height: 100%;"></button>
                </div>
                 </div>
                 <div class="col-sm-3" >
                 <div class="form-group">
                    <label class="control-label" for="order_id">HotDog/Papas</label>
                   <button id="dogoconpa" value="2" class="btn btn-primary  dim btn-large-dim" onclick="dogoconpa()" style="width: 100%; height: 15%;"><img src="../Content/img/hdpapas.png"  style="width: 100%; height: 100%;"></button>
               </div>
                </div>
                <div class="col-sm-3" >
                 <div class="form-group">
                    <label class="control-label" for="order_id">HotDog/d/Papas</label>
                   <button id="dogodopa" value="5" class="btn btn-primary  dim btn-large-dim" onclick="dogodopa()" style="width: 100%; height: 15%;"><img src="../Content/img/hdpapas.png"  style="width: 100%; height: 100%;"></button>
               </div>
                </div>
                <div class="col-sm-3" >
                 <div class="form-group">
                    <label class="control-label" for="order_id">Orden de PAPAS</label>
                   <button id="papas" value="3" class="btn btn-primary  dim btn-large-dim" onclick="papas()" style="width: 100%; height: 15%;"><img src="../Content/img/papas.png " style="width: 100%; height: 100%;"></button>
               </div>
                </div>
                <div class="col-sm-3" >
                 <div class="form-group">
                    <label class="control-label" for="order_id">Momia</label>
                   <button id="momia" value="6" class="btn btn-primary  dim btn-large-dim" onclick="momia()" style="width: 100%; height: 15%;"><img src="../Content/img/papas.png " style="width: 100%; height: 100%;"></button>
               </div>
                </div>
                <div class="col-sm-3" >
                 <div class="form-group">
                    <label class="control-label" for="order_id">Momia c/papas</label>
                   <button id="momiapa" value="7" class="btn btn-primary  dim btn-large-dim" onclick="momiapa()" style="width: 100%; height: 15%;"><img src="../Content/img/papas.png " style="width: 100%; height: 100%;"></button>
               </div>
                </div>
                <div class="col-sm-3" >
                 <div class="form-group">
                    <label class="control-label" for="order_id">Momia Picada</label>
                   <button id="momiapic" value="8" class="btn btn-primary  dim btn-large-dim" onclick="momiapic()" style="width: 100%; height: 15%;"><img src="../Content/img/papas.png " style="width: 100%; height: 100%;"></button>
               </div>
                </div>
                <div class="col-sm-3" >
                 <div class="form-group">
                    <label class="control-label" for="order_id">SalchiPapas</label>
                   <button id="salchipapas" value="9" class="btn btn-primary  dim btn-large-dim" onclick="salchipapas()" style="width: 100%; height: 15%;"><img src="../Content/img/papas.png " style="width: 100%; height: 100%;"></button>
               </div>
                </div>
                <div class="col-sm-3" >
                 <div class="form-group">
                    <label class="control-label" for="order_id">Dogo Momia</label>
                   <button id="dogomomia" value="10" class="btn btn-primary  dim btn-large-dim" onclick="dogomomia()" style="width: 100%; height: 15%;"><img src="../Content/img/papas.png " style="width: 100%; height: 100%;"></button>
               </div>
                </div>
                <div class="col-sm-3" >
                 <div class="form-group">
                    <label class="control-label" for="order_id">dogo Momia c/p</label>
                   <button id="dogomomiapa" value="11" class="btn btn-primary  dim btn-large-dim" onclick="dogomomiapa()" style="width: 100%; height: 15%;"><img src="../Content/img/papas.png " style="width: 100%; height: 100%;"></button>
               </div>
                </div>
                <div class="col-sm-3" >
                 <div class="form-group">
                    <label class="control-label" for="order_id">Wini</label>
                   <button id="wini" value="12" class="btn btn-primary  dim btn-large-dim" onclick="wini()" style="width: 100%; height: 15%;"><img src="../Content/img/papas.png " style="width: 100%; height: 100%;"></button>
               </div>
                </div>

                <br><br><br><br><br><br><br>
                
                    <label class="control-label" for="order_id" hidden="">Producto</label>
                    <input type="hidden" id="nombre"  value=""  placeholder="Producto" class="form-control col-md-6">
                    <br><br>
                <div class="form-group col-md-6">
                   <label class="control-label" for="status" hidden="">PRECIO</label>
                    <input type="hidden" id="precioU" value="" placeholder="Precio" class="form-control col-md-6" required="required" readonly="precio">
                    <br>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label" for="status" hidden="">CANTIDAD</label>
                    <input type="hidden" id="cantidad" value="" minlength="1" placeholder="Cantidad" class="form-control col-md-6" required="required">
                     <br>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label" for="order_id" hidden="">Descripción del producto</label>
                    <input type="hidden" value="" readonly placeholder="Descripción del producto" class="form-control" id="descripcion">
                    
                
                </div >          
                
             <!--    <input type="submit"  value="Agregar" class="btn btn-w-m btn-danger col-md-12" onclick="agregar()"> -->
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-lg-6" >
       <form method="post" action="../Modelo/RegistrarVenta.php">
        <input type="hidden" name="venta" id="venta" class="form-control venta" >
        <input type="hidden" name="empleado" value="<?php $nombre = utf8_encode($_SESSION["nombres"]);
                   $apellido = utf8_encode($_SESSION["apellidos"]);
                 $empleado = $nombre." ".$apellido;  
                 echo $empleado; ?>">
        <div class="form-group col-md-12" style="margin-left: 66%;">
            <div class="col-md-4">
            <input class="form-control " type="hidden" name="fecha" value="<?php 
                           date_default_timezone_set("America/Hermosillo");
                           echo date('Y-m-d'); ?>"  id="fecha">
            </div>
        </div>
        <div class="col-lg-4 text-center">
            <div class="widget style1 red-bg">
                <div class="row vertical-align">                    
                    <i class="fa-1x"><b>TOTAL</b></i>
                   <h2 class="font-bold suma" id="suma">0</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center">
            <div class="widget style1 red-bg">
                <div class="row vertical-align">
                    <i class="fa-1x"><b>RECIBIDO</b></i>
                    <input type="number" name="recibido" min="5" style="color: black" id="pago"  value="" class="form-control" onchange="cambio();" required="recibido" autofocus="cambio">
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center">
            <div class="widget style1 navy-bg">
                <div class="row vertical-align">                                
                    <i class="fa-1x"><b>CAMBIO</b></i>
                    <h2 class="font-bold cambio" id="cambio">0</h2>
                </div>
            </div>
        </div>
        <button type="submit" id="terminar" class="btn btn-primary dim col-md-12 demo1" disabled="disabled"><i class="fa fa-check"></i> Terminar Venta</button>
        
       </form>

       <div class="ibox float-e-margins">

            <div class="ibox-title">
                        <h5>NOTA DE ORDEN</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            
                        </div>
                    </div>
            <div class="ibox-content table-responsive">

                <table class="table table-striped table-bordered table-hover" id="productos">
                    <thead>
                      <tr>


                            <th >Producto</th>
                            <th >Descripción</th>
                            <th >Precio</th>
                            <th >Cantidad</th>
                            <th >Total</th>
                            <th >Accion</th>

                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                    <tfoot>
                        <tr>
                             <th >Producto</th>
                            <th >Descripción</th>
                            <th >Precio</th>
                            <th >Cantidad</th>
                            <th >Total</th>
                            <th >Accion</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
        </div>
        
    </div>
</div>

