<div class="modal inmodal fade" id="myModal9" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width: 40%; height: 18%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                <h4 class="modal-title">Agregar Usuario <i class="fa fa-pencil-square "></i></h4>
            </div>
            <div class="modal-body">
                <form  method="POST" action="../Modelo/RegistrarUsuario.php" id="formLimpiar">
                    
                    <div class="form-group col-sm-6">
                        <label>Nombre(s)</label><input type="text" name="nombres" placeholder="Nombre(s)" class="form-control
                        " pattern="^[A-Z]+[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð]{2,50}" title="Solo permite hasta letras y la primera mayuscula"  required="">
                    </div>
                    <div class="form-group col-sm-6">
                         <label>Apellido(s)</label><input type="text"  name="apellidos" placeholder="Apellido(s)" class="form-control" pattern="^[A-Z]+[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo permite letras y la primera mayuscula" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Usuario</label><input class="form-control" type="text"  name="user" placeholder="Nombre de Usuario" pattern="^[a-zA-Z0-9]{2,10}" title="Solo permite hasta 10 letras y/o numeros" maxlength="10">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Contraseña</label><input type="password" id="passs" name="pass" placeholder="Contraseña" class="form-control"pattern="[A-Za-z0-9!?-.]{4,8}" minlength="4" maxlength="8" required="" title="Minimo 6 caracteres y maximo 8"><input  class="icheckbox_square-green" style="position: relative;" type="checkbox" onclick="VerPas()"> Ver contraseña
                    </div>
                    <div class="form-group">
                        <label>Tipo de Usuario</label>
                        <select class="select2_demo_1 form-control " name="tipouser">
                            <option value="Administrador"> Administrador</option>
                            <option value="Empleado"> Empleado</option>
                        </select>
                       
                    </div>
                  
            </div>
                <div class="modal-footer">
                    <button type="button" id="btnLimpiar" value="Cerrar" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">ACEPTAR</button>
                </div>
            </form>
        </div>
    </div>
</div>

