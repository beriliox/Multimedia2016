<?php
  if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord']) or isset($_SESSION['app_id_prof'])) {

  } else{
    header('location: ?view=index');

  }
?>
<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/header.php'); ?>

<body>

<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/topnav.php'); ?>
  <legend><h3 style="text-align:center;">Avance Académico de Alumnos</h3></legend>

  <div class="row">
      <div class="col-lg-4 col-lg-offset-4">
          <div class="input-group">
                <input type="text" class="form-control" placeholder="Busca Alumno por RUT" id="bs-prod_avance" maxlength="8">
                <span class="input-group-btn">
                  <a class="buscar_avance btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></a>
                </span>
          </div></br>
        </div>
  </div>
  <div class="form-group">
    <center>
      <div class="col-lg-10 col-lg-offset-1">
          <a target="_blank" href="javascript:reportePDF();" class="oculto btn btn-danger"><i class="fa fa-file-pdf-o" style="font-size:18px;color:white"> Exportar Búsqueda a PDF</i></a>
          <a target="_blank" href="javascript:reporteEXCEL();" class="oculto btn btn-success"><i class="fa fa-file-excel-o" style="font-size:18px;color:white"> Exportar Búsqueda a EXCEL</i></a>
      </div>
    </center>
  </div></br>

 <div id="agrega-registros_avance"></div>
 </br></br></br></br>


<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/footer.php'); ?>

</body>
</html>
