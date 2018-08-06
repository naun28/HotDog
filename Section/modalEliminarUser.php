
 <!--Estructura del Modal-->
    <div class="modal inmodal fade" id="myModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h1 class="modal-title"><li class="fa fa-exclamation-triangle modal-icon"></li></h1>
                </div>
                <div class="modal-body">
                    <CENTER><h4>¿DESEA ELIMINAR ESTE USUARIO?</h4></CENTER>
                        <form method="POST" action="../Controlador/eliUsuario.php">
                            <input type="hidden"  id="id_user" name="id_usuario" placeholder="id_usuario" class="form-control" readonly="id_usuario">
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnLimpiar" value="Cerrar" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">ACEPTAR</button>
                </div>
            </form>
            </div>
        </div>
    </div>