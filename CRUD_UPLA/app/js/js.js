    $(document).ready(function(){
        $("#inputNombres").keypress(function(event){
            var inputValue = event.charCode;
            if(!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)){
                event.preventDefault();
            }
        });
    });
    $(document).ready(function(){
        $("#inputApellidoP").keypress(function(event){
            var inputValue = event.charCode;
            if(!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)){
                event.preventDefault();
            }
        });
    });
    $(document).ready(function(){
        $("#inputApellidoM").keypress(function(event){
            var inputValue = event.charCode;
            if(!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)){
                event.preventDefault();
            }
        });
    });
    $(document).ready(function(){
        $("#inputCiudad").keypress(function(event){
            var inputValue = event.charCode;
            if(!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)){
                event.preventDefault();
            }
        });
    });

    $(document).ready(function(){
        $("#inputRut").keypress(function(event){
            var inputValue = event.charCode;
            if(!(inputValue >= 48 && inputValue <= 57)){
                event.preventDefault();
            }
        });
    });

    $(document).ready(function(){
        $("#inputDigVer").keypress(function(event){
            var inputValue = event.charCode;
            if(!(inputValue >= 48 && inputValue <= 57) && (inputValue != 75 && inputValue != 107)){
                event.preventDefault();
            }
        });
    });

      $(function() {
        $("a.delete").click(function() {
          var rut = $(this).attr("id");
          var dataString = 'rut='+ rut ;
          var parent = $(this).parent().parent();
          if(confirm("¿Estas seguro de que deseas eliminar este registro?")) {
          $.ajax({
            type: "POST",
            url: "../../html/public/eliminar.php",
            data: dataString,
            cache: false,
            beforeSend: function(){
            parent.animate({'backgroundColor':'#fb6c6c'},300).animate({ opacity: 0.35 }, "slow");;
            },
            success: function(){
            parent.slideUp('slow', function() {$(this).remove();});
            }
          });
        }
          return false;
        });
      });

      $(function() {
        $("a.update").click(function() {
          var id = $(this).attr("id");
          var dataString = 'rut='+ id ;
          if(confirm("¿Estas seguro de que deseas actualizar este registro?")) {
          $.ajax({
            type: "GET",
            url: "../../html/public/actualizar.php",
            data: dataString,
            cache: false,
            success: function(){
            window.location.href = "http://localhost/CRUD_UPLA/html/public/actualizar.php?rut=" + id;
            }
          });
        }
          return false;
        });
      });

      $(function() {
        $("a.update_c").click(function() {
          var id = $(this).attr("id");
          var nombres = document.getElementById('inputNombres').value;
          var apellidop = document.getElementById('inputApellidoP').value;
          var apellidom = document.getElementById('inputApellidoM').value;
          var rut = document.getElementById('inputRut').value;
          var dv = document.getElementById('inputDigVer').value;
          var correo = document.getElementById('inputCorreo').value;
          var direccion = document.getElementById('inputDireccion').value;
          var ciudad = document.getElementById('inputCiudad').value;
          var dataString = '&nombres=' + nombres + '&apellidop=' + apellidop + '&apellidom=' + apellidom + '&rut=' + rut + '&dv=' + dv + '&correo=' + correo + '&dir=' + direccion + '&ciudad=' + ciudad;
          $.ajax({
            type: "GET",
            url: "../../html/resultados/actualizar.php",
            data: dataString,
            cache: false,
            success: function(){
              window.location.href = "http://localhost/CRUD_UPLA/html/resultados/actualizar.php?rut=" + rut + '&dv=' + dv + '&nombres=' + nombres + '&apellidop=' + apellidop + '&apellidom=' + apellidom + '&correo=' + correo + '&dir=' + direccion + '&ciudad=' + ciudad;
            }
          });
          return false;
        });
      });

      $(document).ready(function() {

              $("#ok").hide();

              $("#formid").validate({
                  rules: {
                      nombres: { required: true},
                      apellidop: { required: true},
                      apellidom: { required: true},
                      rut: { required: true},
                      dv: { required: true},
                      correo: { required:true, email: true},
                      dir: { required: true},
                      ciudad: { required: true}
                  },
                  messages: {
                      nombres: "Debe introducir su Nombre.",
                      apellidop: "Debe introducir su Apellido Paterno.",
                      apellidom: "Debe introducir su Apellido Materno.",
                      correo : "Debe introducir un Correo válido.",
                      rut : "Debe introducir su RUT",
                      dv : "Debe introducir su Dígito Verificador",
                      dir: "Debe introducir su Dirección",
                      ciudad: "Debe introducir su Ciudad",
                  },
                  submitHandler: function(form){
                      var dataString = '&nombres='+$('#inputNombres').val()+'&apellidop='+$('#inputApellidoP').val()+'&apellidom='+$('#inputApellidoM').val()+'&rut='+$('#inputRut').val()+'&dv='+$('#inputDigVer').val()+'&correo='+$('#inputCorreo').val()
                                      +'&dir='+$('#inputDireccion').val()+'&ciudad='+$('#inputCiudad').val();
                      $.ajax({
                          type: "POST",
                          url:"http://localhost/CRUD_UPLA/html/public/send.php",
                          data: dataString,
                          success: function(data){
                              $("#ok").html(data);
                              $("#ok").show();
                              window.location.href = "http://localhost/CRUD_UPLA/html/resultados/insertar.php?id=s" + dataString;
                          }
                      });
                  }
              });
          });

          $(function() {
            $("#ok").show();
            $("a.campos").click(function() {
              var nombre_tabla = $(this).attr("id");
              var cantidad = $("a.cantidad").attr("id");
              var campo = $("input.campo").attr("id");
              var tipo = $("input.tipo").attr("id");
              var nulo = $("input.nulo").attr("id");

              var nombre_campo = document.getElementById(campo).value;
              var tipo_dato = document.getElementById(tipo).value;
              var nullo = document.getElementById(nulo).value;

              var dataString = 'cantidad=' + cantidad + '&nombre_tabla='+ nombre_tabla + '&nombre_campo=' + nombre_campo + '&tipo_dato=' + tipo_dato + '&nullo=' + nullo;
              $.ajax({
                type: "POST",
                url: "../../html/ejercicios_clase/campos.php",
                data: dataString,
                cache: false,
                success: function(data){
                  $("#ok").html(data);
                  $("#ok").show();
                  }
              });
              return false;
            });
          });
