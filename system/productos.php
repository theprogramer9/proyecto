<!DOCTYPE html>
<?php   include("conexion.php");  ?>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos</title>
 
    <!-- CSS de Bootstrap -->
  <?php include('_metas.php'); ?>
  <!-- document ready es para indicar que la pagina este atenta -->
  <script>

       $(document).ready(function(){ 

          $('#arreglos').dataTable({

           "ajax":{

            "url":"_consultas.php?consulta=productos","dataSrc":""

           },
           "columns" : [
             {"data":"id"},
             {"data":"nombre"},
             {"data":"categoria"},
             {"data":"precio"},
             {"data":"kilo"},
            {"data":"acciones"},
            {"data":"acciones2"}
             
           ]
          });

         

               $(document).on('click', '.glyphicon-plus', function(){

              $("#agregar").modal('show');

            });



            $(document).on('click', '.glyphicon-trash', function(){

              var dato = $(this).attr('id');
              if (confirm('Esta seguro de eliminar el arreglo')) {

                $.ajax({

                  type:"GET",
                  url:"_consultas.php",
                  data:"accion=borra_arreglo&id="+dato,
                  
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
                          PRODUCTOS  
                        <span class="glyphicon glyphicon-plus"></span>
                    </div>
                        <!-- /.panel-heading -->
                     <div class="panel-body">
                        <div class="table-responsive">
                          <!-- /.se adapta -->
                                <table class="table table-striped table-bordered table-hover" id="arreglos" >
                           
                             <!-- encabezados -->   
                              <thead>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>CATEGORIA</th>
                                <th>PRECIO</th>
                                <th>KILOGRAMOS</th>
                                <th>Acciones Borrar</th>
                                <th>Acciones Editar</th>
                                
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

   <!-- Modal -->
    <div id="agregar" class="modal fade" role="dialog" method="POST" enctype="multipart/form-data" autocomplete="off">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nuevo Producto</h4>
      </div>
      <div class="modal-body">
        <label>Nombre</label>
        <input type="text" id="nombre">
        <label>Precio</label>
        <input type="text" id="precio">
        <label>Kilogramos</label>
        <input type="text" id="kilo">
        <label>Imagen</label>
        <input type="file" id="foto" name="foto" accept="image/*">

        <label>Categoria</label>
        <?php 

        echo '<select id="id_categoria">';

          $con="SELECT id_categoria, nom_categoria FROM categorias;";
          $result=$db->query($con);
          if ($result) {
            while($obj=mysqli_fetch_object($result))
            {

              echo '<option value="'.$obj->id_categoria.'">'.$obj->nom_categoria.'</option>';
            }
          }
          echo '</select>';

        ?>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="btn_agregar" type="button" class="btn btn-success" data-dismiss="modal">Agregar</button>
      </div>
    </div>

  </div>
</div>
    
    <div id="editar" class="modal fade" role="dialog" method="POST" enctype="multipart/form-data">
    <div class="modal-dialog">

    <!-- Modal content editar-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Producto</h4>
      </div>
      <div class="modal-body">
        <label>Clave</label>
        <input type="text" id="clave">
        <label>Nombre</label>
        <input type="text" id="nombre1">
        <label>Precio</label>
        <input type="text" id="precio1">
        <label>Kilogramos</label>
        <input type="text" id="kilo1">
        <label>Categoria</label>
        <?php 

        echo '<select id="id_categoria">';

          $con="SELECT id_categoria, nom_categoria FROM categorias;";
          $result=$db->query($con);
          if ($result) {
            while($obj=mysqli_fetch_object($result))
            {

              echo '<option value="'.$obj->id_categoria.'">'.$obj->nom_categoria.'</option>';
            }
          }
          echo '</select>';

        ?>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="btn_editar" type="button" class="btn btn-success" data-dismiss="modal">Editar</button>
      </div>
    </div>

  </div>
</div>










   <?php include('_script.php'); ?>
  </body>
</html>