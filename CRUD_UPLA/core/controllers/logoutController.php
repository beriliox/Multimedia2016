<?php
if(isset($_SESSION['app_id'])) {
  unset($_SESSION['app_id']);
  header('location: ?view=index');
}
if(isset($_SESSION['app_id_coord'])) {
  unset($_SESSION['app_id_coord']);
  header('location: ?view=index');
}
if(isset($_SESSION['app_id_prof'])) {
  unset($_SESSION['app_id_prof']);
  header('location: ?view=index');
}

?>
