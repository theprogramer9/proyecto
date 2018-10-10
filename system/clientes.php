<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
 
    <!-- CSS de Bootstrap -->
   

  <?php include('_metas.php'); ?>
  <!-- document ready es para indicar que la pagina este atenta -->
  <script>

       $(document).ready(function(){ 

          $('#clientes').dataTable({
           "ajax":{
            "url":"_consultas.php?consulta=clientes","dataSrc":""
           },
           "columns" : [
             {"data":"id"},
             {"data":"nombre"},
             {"data":"apellido"},
             {"data":"usuario"},
             {"data":"contraseña"},
            {"data":"acciones"}
             
           ]
          });
    $(document).on('click', '.glyphicon-plus', function(){

             // $("#agregar").modal('show');
             location.href="FormCliente.php";      
                  });

         $(document).on('click', '.glyphicon-trash', function(){

              var dato = $(this).attr('id');
              if (confirm('Esta seguro de eliminar el arreglo')) {

                $.ajax({

                  type:"GET",
                  url:"_consultas.php",
                  data:"accion=borra_cliente&id="+dato,
                  
                  success: function(datos){

                    var dataJson = eval(datos);
                    for(var x in dataJson){
                      if (dataJson[x].bn==1) {
                        alert('Elemento eliminado');
                      }else{
                        alert('No fue posible eliminar');
                      }
                    } 
                  }

                });
              }
            });


       $(document).on('click', '.glyphicon-pencil', function(){



              var dato = $(this).attr('id');

                $.ajax({

                 
                  url:"_consultas.php?consulta=productos1&clave="+dato,
                   type:"POST",
                  dataSrc:"",
                  
                  success: function(datos){

                    var dataJson = eval(datos);
                    for(var x in dataJson){

                     $("#clave").val(dataJson[x].clave);
                     $("#nombre1").val(dataJson[x].nombre);
                     $("#categoria1").text(dataJson[x].nom_categoria);
                     $("#precio1").val(dataJson[x].precio);
                     $("#kilo1").val(dataJson[x].kilo);
                    } 
                  }

                });
              $("#editar").modal('show');

            });

 $("#btn_agregar").click(function(){

            alert("accion=agrega_arreglo&nombre="+$("#nombre").val()+"&precio="+$("#precio").val() +"&kilo="+$("#kilo").val()+"&categoria="+$("#id_categoria").val());

            $.ajax({

                  type:"GET",
                  url:"_consultas.php",
                  data:"accion=agrega_arreglo&nombre="+$("#nombre").val()+"&precio="+$("#precio").val()+"&kilo="+$("#kilo").val()+"&categoria="+$("#id_categoria").val(),
                  
                  success: function(datos){

                    var dataJson = eval(datos);
                    for(var x in dataJson){
                      if (dataJson[x].bn==1) {
                        alert('Arreglo Agregado');
                      }else{
                        alert('No fue posible agregar el arreglo');
                      }
                    }
                  }

                });
          });


            $("#btn_editar").click(function(){

            alert("accion=editar_arreglo&clave="+$("#clave").val()+"&nombre="+$("#nombre1").val()+"&precio="+$("#precio1").val() +"&kilo="+$("#kilo1").val()+"&categoria="+$("#id_categoria").val());

            $.ajax({

                  type:"GET",
                  url:"_consultas.php",
                  data:"accion=editar_arreglo&clave="+$("#clave").val()+"&nombre="+$("#nombre1").val()+"&precio="+$("#precio1").val() +"&kilo="+$("#kilo1").val()+"&categoria="+$("#id_categoria").val(),
                  
                  success: function(datos){

                    var dataJson = eval(datos);
                    for(var x in dataJson){
                      if (dataJson[x].bn==1) {
                        alert('Arreglo editado');
                      }else{
                        alert('No fue posible editar el arreglo');
                      }
                    }
                  }

                });
          });
       });






    </script>
  </head>
  <body>
    <!-- Navigation -->
      <?php include("menu.php"); ?>
    <!-- Page Content -->
    <div class="container">
    <BR><BR>
        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                           CLIENTES   
                           <span class="glyphicon glyphicon-plus"></span> 
                    </div>
                        <!-- /.panel-heading -->
                     <div class="panel-body">
                        <div class="table-responsive">
                          <!-- /.se adapta -->
                                <table class="table table-striped table-bordered table-hover" id="clientes" >
                           
                             <!-- encabezados -->   
                              <thead>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>USUARIO</th>
                                <th>CONTRASEÑA</th>
                                <th>ACCIONES</th> 
                                
                              </thead>

                                </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <BR><BR>
        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
               INFORMACION
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

    
 
   
   
   <?php include('_script.php'); ?>
  </body>
</html>