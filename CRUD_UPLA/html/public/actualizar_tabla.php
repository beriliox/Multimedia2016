<?php include('html/overall/header.php'); ?>

<script type="text/javascript">
<!--
num=0;
function crear(obj) {
  num++;
  document.getElementById('total_campos').value = num;
  fi = document.getElementById('fiel');
  contenedor = document.createElement('div');
  contenedor.id = 'div'+num;
  fi.appendChild(contenedor);

  lbl = document.createElement('label');
  lbl.innerHTML = 'Nombre: ';
  contenedor.appendChild(lbl);
  ele = document.createElement('input');
  ele.type = 'text';
  ele.name = 'nombre_campo'+num;
  contenedor.appendChild(ele);

  lbl = document.createElement('label');
  lbl.innerHTML = 'Tipo de Dato: ';
  contenedor.appendChild(lbl);
  ele = document.createElement('input');
  ele.type = 'text';
  ele.name = 'tipo_dato'+num;
  contenedor.appendChild(ele);

  lbl = document.createElement('label');
  lbl.innerHTML = 'Not Null: ';
  contenedor.appendChild(lbl);
  ele = document.createElement('select');
  ele.name = "null"+num;
  contenedor.appendChild(ele);
  sel = document.createElement('option');
  sel.value ='yes';
  ele.appendChild(sel);
  lbl = document.createElement('label');
  lbl.innerHTML = 'Si';
  sel.appendChild(lbl);
  sel = document.createElement('option');
  sel.value ='no';
  ele.appendChild(sel);
  lbl = document.createElement('label');
  lbl.innerHTML = 'No';
  sel.appendChild(lbl);

  lbl = document.createElement('label');
  lbl.innerHTML = 'Clave Primaria: ';
  contenedor.appendChild(lbl);
  ele = document.createElement('select');
  ele.name = "pk"+num;
  contenedor.appendChild(ele);
  sel = document.createElement('option');
  sel.value ='yes';
  ele.appendChild(sel);
  lbl = document.createElement('label');
  lbl.innerHTML = 'Si';
  sel.appendChild(lbl);
  sel = document.createElement('option');
  sel.value ='no';
  ele.appendChild(sel);
  lbl = document.createElement('label');
  lbl.innerHTML = 'No';
  sel.appendChild(lbl);

  ele = document.createElement('input');
  ele.type = 'button';
  ele.value = 'Eliminar Campo';
  ele.name = 'div'+num;
  ele.onclick = function () {borrar(this.name)}
  contenedor.appendChild(ele);
}
function borrar(obj) {
  fi = document.getElementById('fiel');
  fi.removeChild(document.getElementById(obj));
}
-->
</script>

<?php include('html/overall/topnav.php'); ?>

<?php

  include('core/models/coneccion.php');

?>

<body>

<div class="table-responsive">
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>Nombre Campo</th>
      <th>Tipo</th>
      <th>Null</th>
      <th>Key</th>
    </tr>
  </thead>
  <tbody>
  <?php

  if($_GET['nombre_tabla']) {
  	$nombre_tabla = $_GET['nombre_tabla'];
    $sql=mysql_query("SHOW COLUMNS FROM ".$nombre_tabla, $link);

    while($campos = mysql_fetch_assoc($sql)) {
      echo '<tr>';
      echo '<td>' . $campos['Field']. '</td>';
      echo '<td>' . $campos['Type']. '</td>';
      echo '<td>' . $campos['Null']. '</td>';
      echo '<td>' . $campos['Key']. '</td>';
      echo '</tr>';

    }
}

 ?>
</tbody>
</table>
</div>

<form id="fiel" action="modificar_tabla.php" method="POST">
<input type="button" class="btn btn-default" value="Crear Nuevo Campo" onclick="crear(this)" />
<input type="hidden" id='nombre_tabla' name="nombre_tabla" value=<?php echo $nombre_tabla; ?> >
<input type="hidden" id='total_campos' name="total_campos" value="" >
<input type="submit" class="btn btn-primary" value="Actualizar" name="enviar">
</form>
<br><br><br><br><br>





<?php include('html/overall/footer.php'); ?>
