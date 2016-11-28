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

<body>

<legend><h3 class="col-lg-offset-5">Crear Nueva Tabla</h3></legend>


<form id="fiel" action="crear_tabla.php" method="POST">
<label>Nombre de la nueva tabla:</label>
<input type="text" class="form-control"  name="nombre_tabla" placeholder="Nombre Tabla">
<input type="button" class="btn btn-default"  value="Crear Campo" onclick="crear(this)" />
<input type="hidden" id='total_campos' name="total_campos" value="" >
<input type="submit" class="btn btn-primary" name="enviar" value="Crear">
</form>
</body>

<?php include('html/overall/footer.php'); ?>
