
<div class="ibox-content">
	<fieldset>
		<legend>Retiro de efectivo</legend>
<form method="POST" action="../Modelo/RegistrarCorte.php">
		<label class="col-sm-2 control-label">Fecha</label>
		<div class="form-group col-sm-10" id="data_1">
			<div class="input-group ">
				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				<input type="text" readonly name="fecha" id="fecha" value = "<?php
				date_default_timezone_set("America/Mexico_City");
				echo date('Y-m-d')?>" class="form-control" >
			</div>
		</div>
		<label class="col-sm-2 control-label">Empleado</label>
		<div class="form-group col-sm-10" id="data_1">
			<div class="input-group ">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" readonly name="empleado" id="empleado" value = "<?php $nombre = utf8_encode($_SESSION["nombres"]);
                   $apellido = utf8_encode($_SESSION["apellidos"]);
                 $empleado = $nombre." ".$apellido;  
                 echo $empleado; ?>" class="form-control" >
			</div>
		</div>
		<label class="col-sm-2 control-label">Total de ventas</label>
		<div class="form-group col-sm-10" id="data_1">
			<div class="input-group ">
				<span class="input-group-addon"><i class="fa fa-money"></i></span>
				<input type="number" autocomplete="off" readonly name="cortetotal" id="cortetotal" maxlength="60"  class="form-control" value="<?php require ('../Controlador/corteController.php'); ?>">
			</div>
		</div>
		<label class="col-sm-2 control-label">Cantidad de caja</label>
		<div class="form-group col-sm-10" id="data_1">
			<div class="input-group ">

				<span class="input-group-addon"><i class="fa fa-money"></i></span>
				<input type="number" autocomplete="off" name="cortecaja" id="cortecaja" maxlength="60"  class="form-control">
			</div>
		</div>
    

		<div class="form-group pull-right" id="data_1">
			<div class="input-group "><br>
				<input type="submit" class=" btn btn-success dim" value="Retirar Efectivo">
			</div>
		</div>
    
		</form>
		
		









	</fieldset>
</div>