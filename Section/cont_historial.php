<div id="tab-1" class="tab-pane active">
      <div class="panel-body">
         <div class="ibox-content">
            <div class="row">
               <div class="col-lg-3">
                   <label>Fecha</label>
                   <div class="form-group" id="data_1">
                       <div class="input-group date">
                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                           <input type="text" onchange="corte(this);" name="fec" id="fec" value = "<?php 
                           date_default_timezone_set("America/Mexico_City");
                           echo date('m/d/Y'); ?>" class="form-control" >

                       </div>
                       
                   </div>
               </div><br><!-- <button class=' agenda btn btn-danger dim btn-xs pull-right' data-toggle='modal' data-target='#myModal99'>Generar viaticos</button> -->
           </div><br>
           <div class="table-responsive">
               <table  id="retiros" class="table table-striped table-bordered table-hover" style="width: 100%;">
                <thead>
                    <tr>
                       <th style="display: none;">id</th>
                       <th><center>Caja</center></th>
                       <th><center>Retiro</center></th>
                       <th><center>Fecha</center></th>
                       <th><center>Empleado</center></th>
                   </tr>
               </thead>

           </table>
          </div>
          </div>
        </div>
       </div>