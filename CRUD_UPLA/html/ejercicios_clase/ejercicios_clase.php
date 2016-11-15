<?php
  include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/header.php');

  include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/config/config.php');

  $nombre_db = $_POST['db'];
  $nombre_tabla = $_POST['tabla'];
  $cantidad = $_POST['cantidadc'];

  $use_db = "USE '$nombre_db'";
  mysql_query($use_db);

  echo '</br>';

  echo '<form class="form-horizontal" action="http://localhost/CRUD_UPLA/html/ejercicios_clase/campos.php" method="POST">
            <fieldset>
            <legend><h3 class="col-lg-offset-5">Insertar campos</h3></legend>
            <div id="ok"></div>';

  for ($i=1; $i <= $cantidad; $i++) {
      echo '<div class="form-group">
              <label for="campo" class="col-lg-2 control-label col-lg-offset-2">Campo #',$i,'</label>
              <div class="col-lg-2">
                <input type="text" class="form-control campo" id="inputCampo_',$i,'"  placeholder="Nombre del Campo">
              </div>
              <div class="col-lg-2">
                <input type="text" class="form-control tipo" id="inputDato_',$i,'" placeholder="Tipo de Dato">
              </div>
              <div class="col-lg-2">
                <input type="text" class="form-control nulo" id="inputNULLO_',$i,'" placeholder="NULL / NOT NULL">
              </div>
              <a id="',$cantidad,'" class="cantidad"></a>
            </div>';
  }

  echo '<div class="form-group">
          <div class="col-lg-10 col-lg-offset-4">
            <button type="reset" class="btn btn-default">Cancelar</button>
            <a id="',$nombre_tabla,'" class="campos btn btn-primary">Crear</a>
          </div>
        </div>
        </fieldset>
      </form>';

?>
