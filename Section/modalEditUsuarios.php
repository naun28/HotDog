<div class="modal inmodal fade" id="myModal7" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width: 40%; height: 18%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                <h4 class="modal-title">Editar Usuario <i class="fa fa-pencil-square "></i></h4>
            </div>
            <div class="modal-body">
                <form  method="POST" action="../Modelo/EditarUsuario.php" id="formLimpiar">
                    <div class="form-group">
                        <label></label><input type="hidden"  id="id_usuario" name="id_usuario" placeholder="" class="form-control" readonly="id_usuario">
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Nombre(s)</label><input type="text" id="nombres" name="nombres" placeholder="Nombre(s)" class="form-control
                        " pattern="^[A-Z]+[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo permite letras y la primera mayuscula" required="">
                    </div>
                    <div class="form-group col-sm-6">
                         <label>Apellido(s)</label><input type="text" id="apellidos" name="apellidos" placeholder="Apellido(s)" class="form-control" pattern="^[A-Z]+[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo permite letras y la primera mayuscula" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Usuario</label><input class="form-control" type="text" id="user" name="user">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Contraseña</label><input type="password"  id="pass"  name="pass" placeholder="Contraseña" class="form-control"pattern="[A-Za-z0-9!?-]{6,8}" minlength="6" maxlength="8" required="" title="Minimo 6 caracteres y maximo 8"><input  class="icheckbox_square-green" style="position: relative;" type="checkbox" onclick="VerPass()"> Ver contraseña
                    </div>
                    <div class="form-group">
                        <label>Tipo de Usuario</label>
                        <select class="select2_demo_1 form-control " id="tipouser" name="tipouser">
                            <option value="Administrador"> Administrador</option>
                            <option value="Empleado"> Empleado</option>
                        </select>
                       
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

