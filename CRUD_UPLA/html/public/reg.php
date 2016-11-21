<div class="modal fade" id="Insertar_Alumno" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">

       <div id="_AJAX_REG_ALUMNO"></div>

       <div class="modal-header registro">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Insertar Alumno</h4>
       </div>

          <div class="modal-body">
          <div role="form" onkeypress="return runScriptReg(event)">
             <div class="form-group">
                 <label for="inputNombres">Nombres</label>
                 <input type="text" class="form-control" id="inputNombres" name="nombres" placeholder="Nombres" maxlength="50">
             </div>
             <div class="form-group">
                 <label for="inputApellidoP">Apellido Paterno</label>
                 <input type="text" class="form-control" id="inputApellidoP" name ="apellidop" placeholder="Apellido Paterno" maxlength="20" >
             </div>
             <div class="form-group">
                 <label for="inputApellidoM">Apellido Materno</label>
                 <input type="text" class="form-control" id="inputApellidoM" name="apellidom" placeholder="Apellido Materno" maxlength="20" >
             </div>
             <div class="form-group">
               <label for="inputRut">RUT</label>
                 <input type="text" class="form-control rut" id="inputRut" name="rut" placeholder="RUT" maxlength="8" onkeypress="validate(event)" >
                 <input type="text" class="form-control dv" id="inputDigVer" name="dv" placeholder="Dig. Ver." maxlength="1" >
             </div>
             <div class="form-group">
                 <label for="inputCorreo">Correo</label>
                 <input type="email" class="form-control" id="inputCorreo" placeholder="Correo Electrónico">
             </div>
             <div class="form-group">
               <label for="inputCarrera">Carrera</label>
                 <select class="form-control" id="inputCarrera" name="nombre_carrera" maxlength="15" >
                   <?php

                   include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/core/models/coneccion.php');

                   $consulta=mysql_query("SELECT * FROM Carrera",$link);

                   echo '<option></option>';
                   while($carrera = mysql_fetch_assoc($consulta)) {
                     echo '<option>'. $carrera['id_carrera']. '</option>';
                   }
                   ?>
                 </select>
            </div>
            <div class="form-group">
                <label for="inputPromocion">Promoción</label>
                <input type="text" class="form-control" id="inputPromocion" name="promocion" placeholder="Promoción" maxlength="4">
            </div>
             <div class="form-group">
                 <label for="inputDireccion">Dirección</label>
                 <input type="text" class="form-control" id="inputDireccion" name="dir" placeholder="Dirección" maxlength="60">
             </div>
             <div class="form-group">
                 <label for="inputCiudad">Ciudad</label>
                 <input type="text" class="form-control" id="inputCiudad" name="ciudad" placeholder="Ciudad" maxlength="20" >
             </div>
             <div class="form-group">
                 <label for="inputFoto">URL Foto Perfil</label>
                 <input type="text" class="form-control" id="inputFoto" name="foto" placeholder="URL Foto Perfil" maxlength="200">
             </div>
            <button type="button" onclick="goReg_Alumno()" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Insertar</button>
       </div>
     </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
       </div>
     </div>
   </div>
 </div>

 <!--PROFESOR-->

 <div class="modal fade" id="Insertar_Profesor" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">

        <div id="_AJAX_REG_PROFESOR"></div>

        <div class="modal-header registro">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Insertar Profesor</h4>
        </div>

           <div class="modal-body">
           <div role="form" onkeypress="return runScriptReg(event)">
              <div class="form-group">
                  <label for="inputNombres">Nombres</label>
                  <input type="text" class="form-control" id="inputNombres_p" name="nombres" placeholder="Nombres" maxlength="50">
              </div>
              <div class="form-group">
                  <label for="inputApellidoP">Apellido Paterno</label>
                  <input type="text" class="form-control" id="inputApellidoP_p" name ="apellidop" placeholder="Apellido Paterno" maxlength="20" >
              </div>
              <div class="form-group">
                  <label for="inputApellidoM">Apellido Materno</label>
                  <input type="text" class="form-control" id="inputApellidoM_p" name="apellidom" placeholder="Apellido Materno" maxlength="20" >
              </div>
              <div class="form-group">
                <label for="inputRut">RUT</label>
                  <input type="text" class="form-control rut" id="inputRut_p" name="rut" placeholder="RUT" maxlength="8" onkeypress="validate(event)" >
                  <input type="text" class="form-control dv" id="inputDigVer_p" name="dv" placeholder="Dig. Ver." maxlength="1" >
              </div>
              <div class="form-group">
                  <label for="inputCorreo">Correo</label>
                  <input type="email" class="form-control" id="inputCorreo_p" placeholder="Correo Electrónico">
              </div>
              <div class="form-group">
                  <label for="inputDireccion">Dirección</label>
                  <input type="text" class="form-control" id="inputDireccion_p" name="dir" placeholder="Dirección" maxlength="60">
              </div>
              <div class="form-group">
                  <label for="inputCiudad">Ciudad</label>
                  <input type="text" class="form-control" id="inputCiudad_p" name="ciudad" placeholder="Ciudad" maxlength="20" >
              </div>
              <div class="form-group">
                  <label for="inputFoto">URL Foto</label>
                  <input type="text" class="form-control" id="inputFoto_p" name="foto" placeholder="URL Foto Perfil" maxlength="200" >
              </div>
              <div class="form-group">
                  <label for="inputpass">Contraseña</label>
                  <input type="password" class="form-control" id="inputPass_p" name="pass" placeholder="Contraseña" maxlength="20" >
              </div>
              <div class="form-group">
                  <label for="inputpass_dos">Repetir Contraseña</label>
                  <input type="password" class="form-control" id="inputPass_dos_p" name="pass_dos" placeholder="Contraseña" maxlength="20" >
              </div>
             <button type="button" onclick="goReg_Profesor()" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Insertar</button>
        </div>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <!--COORD-->
  <div class="modal fade" id="Insertar_Coordinador" role="dialog">
     <div class="modal-dialog">
       <div class="modal-content">

         <div id="_AJAX_REG_COORDINADOR"></div>

         <div class="modal-header registro">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Insertar Coordinador</h4>
         </div>

            <div class="modal-body">
            <div role="form" onkeypress="return runScriptReg(event)">
               <div class="form-group">
                   <label for="inputNombres">Nombres</label>
                   <input type="text" class="form-control" id="inputNombres_c" name="nombres" placeholder="Nombres" maxlength="50">
               </div>
               <div class="form-group">
                   <label for="inputApellidoP">Apellido Paterno</label>
                   <input type="text" class="form-control" id="inputApellidoP_c" name ="apellidop" placeholder="Apellido Paterno" maxlength="20" >
               </div>
               <div class="form-group">
                   <label for="inputApellidoM">Apellido Materno</label>
                   <input type="text" class="form-control" id="inputApellidoM_c" name="apellidom" placeholder="Apellido Materno" maxlength="20" >
               </div>
               <div class="form-group">
                 <label for="inputRut">RUT</label>
                   <input type="text" class="form-control rut" id="inputRut_c" name="rut" placeholder="RUT" maxlength="8" onkeypress="validate(event)" >
                   <input type="text" class="form-control dv" id="inputDigVer_c" name="dv" placeholder="Dig. Ver." maxlength="1" >
               </div>
               <div class="form-group">
                   <label for="inputCorreo">Correo</label>
                   <input type="email" class="form-control" id="inputCorreo_c" placeholder="Introduce tu correo electrónico">
               </div>
               <div class="form-group">
                   <label for="inputDireccion">Dirección</label>
                   <input type="text" class="form-control" id="inputDireccion_c" name="dir" placeholder="Dirección" maxlength="60">
               </div>
               <div class="form-group">
                   <label for="inputCiudad">Ciudad</label>
                   <input type="text" class="form-control" id="inputCiudad_c" name="ciudad" placeholder="Ciudad" maxlength="20" >
               </div>
               <div class="form-group">
                   <label for="inputFoto">URL Foto</label>
                   <input type="text" class="form-control" id="inputFoto_c" name="foto" placeholder="URL Foto Perfil" maxlength="200" >
               </div>
               <div class="form-group">
                   <label for="inputpass">Contraseña</label>
                   <input type="password" class="form-control" id="inputPass_c" name="pass" placeholder="Contraseña" maxlength="20" >
               </div>
               <div class="form-group">
                   <label for="inputpass_dos">Repetir Contraseña</label>
                   <input type="password" class="form-control" id="inputPass_dos_c" name="pass_dos" placeholder="Contraseña" maxlength="20" >
               </div>
              <button type="button" onclick="goReg_Coordinador()" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Insertar</button>
         </div>
       </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
         </div>
       </div>
     </div>
   </div>

 <!--<script src="http://localhost/CRUD_UPLA/views/app/js/js.js"></script>-->
