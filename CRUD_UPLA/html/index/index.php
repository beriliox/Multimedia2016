<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/header.php'); ?>

<body>

<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/topnav.php'); ?>

<section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

  <?php
  if(isset($_GET['success'])) {
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Activado!</strong> tu usuario ha sido activado correctamente.
    </div>';
  }

  if(isset($_GET['error'])) {
    echo '<div class="alert alert-dismissible alert-danger">
      <strong>Error!</strong></strong> no se ha podido activar tu usuario.
    </div>';
  }
  ?>

</div>
</section>

<?php
if(isset($_GET['success'])) {
  echo '<div class="alert alert-dismissible alert-success">
    <strong>Activado!</strong> tu usuario ha sido activado correctamente.
  </div>';
}

if(isset($_GET['error'])) {
  echo '<div class="alert alert-dismissible alert-danger">
    <strong>Error!</strong></strong> no se ha podido activar tu usuario.
  </div>';
}
?>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <img src="http://localhost/CRUD_UPLA/views/app/img/upla.jpg" alt="" class="img-responsive portada"/>
    </div>
  </div></br></br></br></br>


<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/footer.php'); ?>

</body>
</html>
