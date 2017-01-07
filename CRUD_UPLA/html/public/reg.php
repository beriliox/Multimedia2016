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
                 <input type="text" class="form-control" id="inputNombres_al" name="nombres" placeholder="Nombres" maxlength="50">
             </div>
             <div class="form-group">
                 <label for="inputApellidoP">Apellido Paterno</label>
                 <input type="text" class="form-control" id="inputApellidoP_al" name ="apellidop" placeholder="Apellido Paterno" maxlength="20" >
             </div>
             <div class="form-group">
                 <label for="inputApellidoM">Apellido Materno</label>
                 <input type="text" class="form-control" id="inputApellidoM_al" name="apellidom" placeholder="Apellido Materno" maxlength="20" >
             </div>
             <div class="form-group">
               <label for="inputRut">RUT</label>
                 <input type="text" class="form-control rut" id="inputRut_al" name="rut" placeholder="RUT" maxlength="8" onkeypress="validate(event)" >
                 <input type="text" class="form-control dv" id="inputDigVer_al" name="dv" placeholder="Dig. Ver." maxlength="1" >
             </div>
             <div class="form-group">
                 <label for="inputCorreo">Correo</label>
                 <input type="email" class="form-control" id="inputCorreo_al" placeholder="Correo Electrónico">
             </div>
             <div class="form-group">
               <label for="inputCarrera">Carrera</label>
                 <select class="form-control" id="inputCarrera_al" name="nombre_carrera" maxlength="15" >
                   <?php

                   include('core/models/coneccion.php');

                   $consulta=mysql_query("SELECT id_carrera, nombre_carrera FROM Carrera",$link);

                   echo '<option></option>';
                   while($carrera = mysql_fetch_assoc($consulta)) {
                     echo '<option value="',$carrera['id_carrera'],'">'. $carrera['nombre_carrera']. '</option>';
                   }
                   ?>
                 </select>
            </div>
            <div class="form-group">
                <label for="inputPromocion">Promoción</label>
                <input type="text" class="form-control" id="inputPromocion_al" name="promocion" placeholder="Promoción" maxlength="4">
            </div>
             <div class="form-group">
                 <label for="inputDireccion">Dirección</label>
                 <input type="text" class="form-control" id="inputDireccion_al" name="dir" placeholder="Dirección" maxlength="60">
             </div>
             <div class="form-group">
                 <label for="inputCiudad">Ciudad</label>
                 <input type="text" class="form-control" id="inputCiudad_al" name="ciudad" placeholder="Ciudad" maxlength="20" >
             </div>
             <div class="form-group">
                 <label for="inputFoto">URL Foto Perfil</label>
                 <input type="text" class="form-control" id="inputFoto_al" name="foto" placeholder="URL Foto Perfil" maxlength="200">
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
<!--ADMIN-->
<div class="modal fade" id="Insertar_Administrador" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">

       <div id="_AJAX_REG_ADMINISTRADOR"></div>

       <div class="modal-header registro">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Insertar Administrador</h4>
       </div>
          <div class="modal-body">
          <div role="form" onkeypress="return runScriptReg(event)">
             <div class="form-group">
                 <label for="inputNombres">Nombres</label>
                 <input type="text" class="form-control" id="inputNombres_admin" name="nombres" placeholder="Nombres" maxlength="50">
             </div>
             <div class="form-group">
                 <label for="inputApellidoP">Apellido Paterno</label>
                 <input type="text" class="form-control" id="inputApellidoP_admin" name ="apellidop" placeholder="Apellido Paterno" maxlength="20" >
             </div>
             <div class="form-group">
                 <label for="inputApellidoM">Apellido Materno</label>
                 <input type="text" class="form-control" id="inputApellidoM_admin" name="apellidom" placeholder="Apellido Materno" maxlength="20" >
             </div>
             <div class="form-group">
               <label for="inputRut">RUT</label>
                 <input type="text" class="form-control rut" id="inputRut_admin" name="rut" placeholder="RUT" maxlength="8" onkeypress="validate(event)" >
                 <input type="text" class="form-control dv" id="inputDigVer_admin" name="dv" placeholder="Dig. Ver." maxlength="1" >
             </div>
             <div class="form-group">
                 <label for="inputCorreo">Correo</label>
                 <input type="email" class="form-control" id="inputCorreo_admin" placeholder="Correo Electrónico">
             </div>
             <div class="form-group">
                 <label for="inputDireccion">Dirección</label>
                 <input type="text" class="form-control" id="inputDireccion_admin" name="dir" placeholder="Dirección" maxlength="60">
             </div>
             <div class="form-group">
                 <label for="inputCiudad">Ciudad</label>
                 <input type="text" class="form-control" id="inputCiudad_admin" name="ciudad" placeholder="Ciudad" maxlength="20" >
             </div>
             <div class="form-group">
                 <label for="inputFoto">URL Foto Perfil</label>
                 <input type="text" class="form-control" id="inputFoto_admin" name="foto" placeholder="URL Foto Perfil" maxlength="200">
             </div>
             <div class="form-group">
                 <label for="inputCiudad">Contraseña</label>
                 <input type="password" class="form-control" id="inputPass_admin" name="pass" placeholder="Contraseña" maxlength="20" >
             </div>
             <div class="form-group">
                 <label for="inputCiudad">Repetir Contraseña</label>
                 <input type="password" class="form-control" id="inputPass_dos_admin" name="pass_dos" placeholder="Contraseña" maxlength="20" >
             </div>
            <button type="button" onclick="goReg_Administrador()" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Insertar</button>
       </div>
     </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
       </div>
     </div>
   </div>
 </div>
<!--CREAR CARRERA-->
   <div class="modal fade" id="Crear_Carrera" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">

          <div id="_AJAX_CARRERA"></div>

          <div class="modal-header registro">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Crear Carrera</h4>
          </div>

             <div class="modal-body">
             <div role="form" onkeypress="return runScriptReg(event)">
                <div class="form-group">
                    <label for="inputNombres">Cod. Carrera</label>
                    <input type="text" class="form-control" id="inputCodCarrera" placeholder="Cod. Carrera" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="inputApellidoP">Nombre Carrera</label>
                    <input type="text" class="form-control" id="inputNombreCarrera" placeholder="Nombre Carrera" maxlength="50" >
                </div>
                <div class="form-group">
                  <label for="inputCarrera">Coordinador</label>
                    <select class="form-control" id="inputCoordinador">
                      <?php

                      include('core/models/coneccion.php');

                      $consulta=mysql_query("SELECT id , nombre, apellidop, rut, dv FROM Coordinador ORDER BY rut",$link);

                      echo '<option></option>';
                      while($coordinador = mysql_fetch_assoc($consulta)) {
                        echo '<option value="',$coordinador['id'],'">'. $coordinador['nombre'] . ' ' . $coordinador['apellidop'] . ' / ' . $coordinador['rut'] . '-' . $coordinador['dv'] . '</option>';
                      }
                      ?>
                    </select>
               </div>
               <button type="button" onclick="goCrear_Carrera()" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Crear</button>
          </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
          </div>
        </div>
      </div>
    </div>
    <!--CREAR ASIGNATURA-->
       <div class="modal fade" id="Crear_Asignatura" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">

              <div id="_AJAX_ASIGNATURA"></div>

              <div class="modal-header registro">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Crear Asignatura</h4>
              </div>

                 <div class="modal-body">
                 <div role="form" onkeypress="return runScriptReg(event)">
                    <div class="form-group">
                        <label for="inputNombres">Cod. Asignatura</label>
                        <input type="text" class="form-control" id="inputCodAsignatura" placeholder="Cod. Asignatura" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="inputApellidoP">Nombre Asignatura</label>
                        <input type="text" class="form-control" id="inputNombreAsignatura" placeholder="Nombre Asignatura" maxlength="50" >
                    </div>
                    <div class="form-group">
                      <label for="inputCarrera">Carrera</label>
                        <select class="form-control" id="inputCarreraAsignatura" maxlength="15" >
                          <?php

                          include('core/models/coneccion.php');

                          $consulta=mysql_query("SELECT id_carrera, nombre_carrera FROM Carrera",$link);

                          echo '<option></option>';
                          while($carrera = mysql_fetch_assoc($consulta)) {
                            echo '<option value="',$carrera['id_carrera'],'">'. $carrera['nombre_carrera']. '</option>';
                          }
                          ?>
                        </select>
                   </div>
                   <button type="button" onclick="goCrear_Asignatura()" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Crear</button>
              </div>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="Inscribir_Alumno" role="dialog">
           <div class="modal-dialog">
             <div class="modal-content">

               <div id="_AJAX_INSCR_ALUMNO"></div>

               <div class="modal-header registro">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Inscribir Alumno en Asignatura</h4>
               </div>

                  <div class="modal-body">
                  <div role="form" onkeypress="return runScriptReg(event)">
                    <div class="form-group">

                    <label for="inputAlumno">Alumno</label>
                      <select class="form-control" id="inputAlumno_ins" >
                        <option></option>
                        <?php
                        $consulta=mysql_query("SELECT DISTINCT nombre, rut, dv, apellidop FROM Alumno ORDER BY rut",$link);

                        while($alumno = mysql_fetch_assoc($consulta)) {
                          if($alumno['nombre'] && $alumno['rut'] != '10206103' && $alumno['rut'] != '10475515') {
                            echo '<option value="',$alumno['rut'],'">'. $alumno['nombre'] . ' ' . $alumno['apellidop'] . ' / ' . $alumno['rut'] . '-' . $alumno['dv'] .    '</option>';
                          }
                        }
                         ?>

                      </select>
                    </div>
                     <div class="form-group">
                       <label for="inputAsignatura">Asignatura</label>
                         <select class="form-control" id="inputAsignatura_ins">
                           <option></option>
                           <?php
                           $consulta=mysql_query("SELECT nombre_asign, cod_asign FROM Asignatura",$link);

                           while($asignatura = mysql_fetch_assoc($consulta)) {
                             if($asignatura['cod_asign']) {

                             echo '<option value="',$asignatura['cod_asign'],'">'. $asignatura['cod_asign'] . ' / ' . $asignatura['nombre_asign'] .    '</option>';
                           }
                           }
                            ?>

                         </select>
                     </div>
                     <div class="form-group">
                       <label for="inputPeriodo">Periodo</label>
                         <select class="form-control" id="inputPeriodo_ins">
                           <option></option>
                           <option>2010/1</option>
                           <option>2010/2</option>
                           <option>2011/1</option>
                           <option>2011/2</option>
                           <option>2012/1</option>
                           <option>2012/2</option>
                           <option>2013/1</option>
                           <option>2013/2</option>
                           <option>2014/1</option>
                           <option>2014/2</option>
                           <option>2015/1</option>
                           <option>2015/2</option>
                           <option>2016/1</option>
                           <option>2016/2</option>
                           <option>2017/1</option>
                           <option>2017/2</option>
                         </select>
                     </div>
                     <div class="form-group">
                       <label for="inputOportunidad">Oportunidad</label>
                         <select class="form-control" id="inputOportunidad_ins">
                           <option></option>
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                         </select>
                     </div>
                    <button type="button" onclick="goInsc_Alumno()" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Inscribir</button>
               </div>
             </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
               </div>
             </div>
           </div>
         </div>

         <div class="modal fade" id="Asignar_Profesor" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">

                <div id="_AJAX_ASIGN_PROFESOR"></div>

                <div class="modal-header registro">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Asignar Profesor a Asignatura</h4>
                </div>

                   <div class="modal-body">
                   <div role="form" onkeypress="return runScriptReg(event)">
                     <div class="form-group">
                       <label for="inputProfesor">Profesor</label>
                         <select class="form-control" id="inputProfesor_asign">
                           <option></option>
                           <?php
                           $consulta=mysql_query("SELECT DISTINCT nombre, id , apellidop, rut, dv FROM Profesor ORDER BY rut",$link);

                           while($profesor = mysql_fetch_assoc($consulta)) {
                             echo '<option value="',$profesor['id'],'">'. $profesor['nombre'] . ' ' . $profesor['apellidop'] . ' / ' . $profesor['rut'] . '-' . $profesor['dv'] . '</option>';
                           }
                            ?>

                         </select>
                     </div>
                      <div class="form-group">
                        <label for="inputAsignatura">Asignatura</label>
                          <select class="form-control" id="inputAsignatura_asign">
                            <option></option>
                            <?php
                            $consulta=mysql_query("SELECT DISTINCT nombre_asign, cod_asign FROM Asignatura",$link);

                            while($asignatura = mysql_fetch_assoc($consulta)) {
                              echo '<option value="',$asignatura['cod_asign'],'">'. $asignatura['cod_asign'] . ' / ' . $asignatura['nombre_asign'] .    '</option>';
                            }
                             ?>

                          </select>
                      </div>
                      <div class="form-group">
                        <label for="inputPeriodo">Periodo</label>
                          <select class="form-control" id="inputPeriodo_asign">
                            <option></option>
                            <option>2010/1</option>
                            <option>2010/2</option>
                            <option>2011/1</option>
                            <option>2011/2</option>
                            <option>2012/1</option>
                            <option>2012/2</option>
                            <option>2013/1</option>
                            <option>2013/2</option>
                            <option>2014/1</option>
                            <option>2014/2</option>
                            <option>2015/1</option>
                            <option>2015/2</option>
                            <option>2016/1</option>
                            <option>2016/2</option>
                            <option>2017/1</option>
                            <option>2017/2</option>
                          </select>
                      </div>
                     <button type="button" onclick="goAsign_Prof()" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Asignar</button>
                </div>
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                </div>
              </div>
            </div>
          </div>


 <!--<script src="views/app/js/js.js"></script>-->
