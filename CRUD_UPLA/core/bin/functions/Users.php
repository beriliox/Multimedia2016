<?php


function Users() {
  $db = new Conexion();

  if(isset($_SESSION['app_id'])) { //Administrador

      $sql = $db->query("SELECT * FROM Administrador;");
      if($db->rows($sql) > 0) {
        while($d = $db->recorrer($sql)) {
          $users[$d['id']] = array(
            'id' => $d['id'],
            'rut' => $d['rut'],
            'dv' => $d['dv'],
            'nombre' => $d['nombre'],
            'apellidop' => $d['apellidop'],
            'apellidom' => $d['apellidom'],
            'direccion' => $d['direccion'],
            'ciudad' => $d['ciudad'],
            'email' => $d['email'],
            'estado' => $d['estado'],
            'pass' => $d['pass'],
            'image_perfil' => $d['image_perfil']
          );
        }
      } else {
        $users = false;
      }

        $db->liberar($sql);
        $db->close();

        return $users;
  }
  if(isset($_SESSION['app_id_coord'])) { //Coordindor

      $sql = $db->query("SELECT * FROM Coordinador;");
      if($db->rows($sql) > 0) {
        while($d = $db->recorrer($sql)) {
          $users[$d['id']] = array(
            'id' => $d['id'],
            'rut' => $d['rut'],
            'dv' => $d['dv'],
            'nombre' => $d['nombre'],
            'apellidop' => $d['apellidop'],
            'apellidom' => $d['apellidom'],
            'direccion' => $d['direccion'],
            'ciudad' => $d['ciudad'],
            'email' => $d['email'],
            'estado' => $d['estado'],
            'pass' => $d['pass'],
            'image_perfil' => $d['image_perfil']
          );
        }
      } else {
        $users = false;
      }

        $db->liberar($sql);
        $db->close();

        return $users;
  }

  if(isset($_SESSION['app_id_prof'])) { //Profesor

      $sql = $db->query("SELECT * FROM Profesor;");
      if($db->rows($sql) > 0) {
        while($d = $db->recorrer($sql)) {
          $users[$d['id']] = array(
            'id' => $d['id'],
            'rut' => $d['rut'],
            'dv' => $d['dv'],
            'nombre' => $d['nombre'],
            'apellidop' => $d['apellidop'],
            'apellidom' => $d['apellidom'],
            'direccion' => $d['direccion'],
            'ciudad' => $d['ciudad'],
            'email' => $d['email'],
            'estado' => $d['estado'],
            'pass' => $d['pass'],
            'image_perfil' => $d['image_perfil']
          );
        }
      } else {
        $users = false;
      }

        $db->liberar($sql);
        $db->close();

        return $users;
 }

}

?>
