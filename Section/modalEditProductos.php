<div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width: 40%; height: 18%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                <h4 class="modal-title">Editar Producto <i class="fa fa-pencil-square "></i></h4>
            </div>
            <div class="modal-body">
                <form  method="POST" action="../Modelo/EditarProducto.php" id="formLimpiar">
                    <div class="form-group">
                        <label></label><input type="hidden"  id="Id_Producto" name="Id_Producto" placeholder="" class="form-control" readonly="Id_Producto">
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Codigo</label><input class="form-control" type="Number" id="Codigo" name="Codigo" readonly="ver">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Cantidad</label>
                        <input class="form-control" type="Number" id="Cantidad" name="Cantidad" readonly="ver">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Producto</label><input class="form-control" type="text" id="Nombre" name="Nombre">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Precio</label><input class="form-control" type="Number" id="Precio_Unitario" name="Precio_Unitario">
                    </div>
                    <div class="form-group">
                        <label>Descripcion</label><input class="form-control" type="text" id="Descripcion" name="Descripcion">
                    </div>
                  
            </div>
                <div class="modal-footer">
                    <button type="button" id="btnLimpiar" value="Cerrar" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary demo2">ACEPTAR</button>
                </div>
            </form>
        </div>
    </div>
</div>

