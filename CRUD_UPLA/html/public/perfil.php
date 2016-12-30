<div class="modal fade" id="Perfil" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">

       <div id="_AJAX_LOGIN_"></div>

       <div class="modal-header login">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-user"></span> Perfil Académico</h4>
       </div>
       <div class="modal-body">
         <div id="ok"></div>

         <div role="form" class="form-horizontal" onkeypress="return runScriptLogin(event)">

           <?php

           if(isset($_SESSION['app_id'])) {
             $app = 'app_id';
           }
           if(isset($_SESSION['app_id_coord'])) {
             $app = 'app_id_coord';
           }
           if(isset($_SESSION['app_id_prof'])) {
             $app = 'app_id_prof';
           }

           echo '
           <legend><h3 style="text-align:center;"> ',$users[$_SESSION[$app]]['nombre'],' ',$users[$_SESSION[$app]]['apellidop'],' </h3></legend>

           <div class="form-group">
             <div class="col-lg-4 col-lg-offset-4 col-xs-6 col-xs-offset-3 col-ms-6 col-ms-offset-3 col-md-6 col-md-offset-3">
               <img src="',$users[$_SESSION[$app]]['image_perfil'],'" alt="" class="img-responsive  img-circle"/>
             </div>
           </div><hr>

           <div class="form-group">
             <label for="inputCorreo" class="col-lg-2">Email</label>
             <div class="col-lg-10">
               <input type="email" class="form-control inputDisabled_correo" id="correo_update" name="correo" maxlength="50" value="',$users[$_SESSION[$app]]['email'],'" disabled="disabled">
             </div>
           </div>
           <div class="form-group">
             <label for="inputDireccion" class="col-lg-2">Direccion</label>
             <div class="col-lg-10">
               <input type="text" class="form-control inputDisabled_direccion" id="direccion_update" name="direccion" maxlength="50" value="',$users[$_SESSION[$app]]['direccion'],'" disabled="disabled">
             </div>
           </div>
           <div class="form-group">
             <label for="inputCiudad" class="col-lg-2">Ciudad</label>
             <div class="col-lg-10">
               <input type="text" class="form-control inputDisabled_ciudad" id="ciudad_update" name="ciudad" maxlength="50" value="',$users[$_SESSION[$app]]['ciudad'],'" disabled="disabled">
             </div>
           </div>
           <div class="form-group">
             <label for="inputurl_foto" class="col-lg-2">URL Foto</label>
             <div class="col-lg-10">
               <input type="text" class="form-control inputDisabled_URL_Foto" id="URL_Foto_update" name="url_foto" maxlength="200" value="',$users[$_SESSION[$app]]['image_perfil'],'" disabled="disabled">
             </div>
           </div>


            <a class="actualizar btn btn-default btn-success btn-block" id="',$users[$_SESSION[$app]]['id'],'"><span class="glyphicon glyphicon-off"></span> Actualizar Datos</a>

            <button id="habilitar_update" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Actualizar Datos</button>';

            ?>

       </div>
     </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
       </div>
     </div>
   </div>
 </div>

 <script src="views/app/js/js.js"></script>
