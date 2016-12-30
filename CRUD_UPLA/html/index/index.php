<?php include('html/overall/header.php'); ?>

<body>

<?php include('html/overall/topnav.php'); ?>

<section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

</div>
</section>

<?php
if(isset($_SESSION['app_id'])) {

  echo '<div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="views/app/img/upla.jpg" alt="" class="img-responsive portada"/>
          </div>
        </div></br></br></br></br>';
} else if(isset($_SESSION['app_id_coord'])) {

  echo '<div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="views/app/img/valpo.jpg" alt="" class="img-responsive portada"/>
          </div>
        </div></br></br></br></br>';
}else if(isset($_SESSION['app_id_prof'])) {

  echo '<div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="views/app/img/valpo_2.jpg" alt="" class="img-responsive portada"/>
          </div>
        </div></br></br></br></br>';
}else if(!isset($_SESSION['app_id']) or !isset($_SESSION['app_id_coord']) or !isset($_SESSION['app_id_prof'])) {

  echo '<div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="views/app/img/valpo_3.jpg" alt="" class="img-responsive portada"/>
          </div>
        </div></br></br></br></br>';
}

?>


<?php include('html/overall/footer.php'); ?>

</body>
</html>
