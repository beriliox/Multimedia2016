<div class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header-fluid">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost/CRUD_UPLA/index.php">UPLA</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <?php
          if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord']) or isset($_SESSION['app_id_prof'])) {

            echo '<ul class="nav navbar-nav">
                <li class="menu-item dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">CRUD<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Alumnos</a>
                            <ul class="dropdown-menu">';
                              if(isset($_SESSION['app_id'])) {
                                  echo '<li class="menu-item ">
                                            <a data-toggle="modal" data-target="#Insertar_Alumno">Insertar Alumno</a>
                                        </li>';
                              }
                              echo '<li class="menu-item ">
                                  <a href="http://localhost/CRUD_UPLA/index.php?view=listar_actualizar">Lista de Alumnos</a>
                              </li>
                              <li class="menu-item ">
                                  <a href="http://localhost/CRUD_UPLA/index.php?view=inscripcion_alumno">Inscripción Alumnos</a>
                              </li>
                          </ul>
                        </li>
                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Académicos</a>
                            <ul class="dropdown-menu">
                                <li class="menu-item dropdown dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profesores</a>
                                    <ul class="dropdown-menu">';
                                      if(isset($_SESSION['app_id'])) {
                                          echo '<li><a data-toggle="modal" data-target="#Insertar_Profesor">Insertar Profesor</a></li>';
                                        }
                                      echo '<li><a href="?view=profesores">Lista de Profesores</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Coordinadores</a>
                                    <ul class="dropdown-menu">';
                                      if(isset($_SESSION['app_id'])) {
                                      echo '<li><a data-toggle="modal" data-target="#Insertar_Coordinador">Insertar Coordinador</a></li>';
                                      }
                                      echo '<li><a href="?view=coordinadores">Lista de Coordinadores</a></li>
                                    </ul>
                                </li>
                              </ul>
                        </li>
                    </ul>
                </li>
            </ul>';
          }
             ?>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(!isset($_SESSION['app_id']) && !isset($_SESSION['app_id_coord']) && !isset($_SESSION['app_id_prof'])) {

                  echo '<li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" class="active">LOGIN<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a data-toggle="modal" data-target="#Login_admin">Iniciar Sesión como Administrador</a></li>
                            <li><a data-toggle="modal" data-target="#Login_coord">Iniciar Sesión como Coordinador</a></li>
                            <li><a data-toggle="modal" data-target="#Login_prof">Iniciar Sesión como Profesor</a></li>
                          </ul>
                        </li>';
                } elseif(isset($_SESSION['app_id'])) {
                    echo '<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" class="active">'. strtoupper($users[$_SESSION['app_id']]['nombre']) .' (Administrador)<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a data-toggle="modal" data-target="#Perfil">Perfil</a></li>

                              <li><a href="?view=logout">SALIR</a></li>
                            </ul>
                          </li>';
                  } elseif(isset($_SESSION['app_id_coord'])) {

                    echo '<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" class="active">'. strtoupper($users[$_SESSION['app_id_coord']]['nombre']) .' (Coordinador)<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a data-toggle="modal" data-target="#Perfil">Perfil</a></li>
                              <li><a href="?view=logout">SALIR</a></li>
                            </ul>
                          </li>';

                  } elseif(isset($_SESSION['app_id_prof'])) {

                    echo '<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" class="active">'. strtoupper($users[$_SESSION['app_id_prof']]['nombre']) .' (Profesor)<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a data-toggle="modal" data-target="#Perfil">Perfil</a></li>
                              <li><a href="?view=logout">SALIR</a></li>
                            </ul>
                          </li>';

                  }
                  ?>
              </ul>
        </div>
    </div>
</div>


<?php
if(!isset($_SESSION['app_id']) or !isset($_SESSION['app_id_coord']) or !isset($_SESSION['app_id_prof'])) {
  include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/public/login.html');
  //include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/modals/lostpass.html');
} if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord']) or isset($_SESSION['app_id_prof'])) {
  include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/public/perfil.php');
}
if(isset($_SESSION['app_id'])){
  include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/public/reg.php');
}
?>
