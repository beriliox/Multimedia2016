<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/header.php'); ?>

<body>

</br></br>
<form class="form-horizontal" action="http://localhost/CRUD_UPLA/html/ejercicios_clase/ejercicios_clase.php" method="POST">
  <fieldset>
    <legend><h3 class="col-lg-offset-5">Insertar campos</h3></legend>
    <div class="form-group">
      <label for="inputNombres" class="col-lg-2 control-label col-lg-offset-2">Nombre de la Base de Datos</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputNombres" name="db" placeholder="Nombre de la Base de Datos">
      </div>
    </div>
    <div class="form-group">
      <label for="inputNombres" class="col-lg-2 control-label col-lg-offset-2">Nombre de la Tabla</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputNombres" name="tabla" placeholder="Nombre de la Tabla" maxlength="10">
      </div>
    </div>
    <div class="form-group">
      <label for="Cantidad_Campos" class="col-lg-2 control-label col-lg-offset-2">Cantidad de Campos</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputRut" name ="cantidadc" placeholder="Cantidad de Campos" maxlength="5" >
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-4">
        <button type="reset" class="btn btn-default">Cancelar</button>
        <input type="submit" class="btn btn-primary" value="Insertar"/>
      </div>
    </div>
  </fieldset>
</form>
</br></br></br></br>

</body>
</html>
