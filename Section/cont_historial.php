<div class="ibox-content">
            <div>
              <center><h1>Historial de retiros</h1></center>
            </div>
            <div class="row">
               <div class="col-lg-3">
                   <label>Fecha</label>
                   <div class="form-group" id="data_1">
                       <div class="input-group date">
                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                           <input type="text" onchange="corte(this);"  value = "<?php 
                           date_default_timezone_set("America/Mexico_City");
                           echo date('m/d/Y'); ?>" class="form-control" >

                       </div>
                       
                   </div>
               </div><br>
           </div><br>
           <div class="table-responsive">
               <table  id="retiros" class="table table-striped table-bordered table-hover" style="width: 100%;">
                <thead>
                    <tr>
                       <th style="display: none;">id</th>
                       <th>Caja</th>
                       <th>Retiro</th>
                       <th>Fecha</th>
                       <th>Empleado</th>

                   </tr>
               </thead>

           </table>
          </div>
          </div>