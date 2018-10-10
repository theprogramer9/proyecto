<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boostrap y Eventos</title>
 
    <!-- CSS de Bootstrap -->
   

  <?php include('_metas.php'); ?>
  <!-- document ready es para indicar que la pagina este atenta -->
  <script>

       $(document).ready(function(){ 

          $('#proveedor').dataTable({
           "ajax":{
            "url":"_consultas.php?consulta=proveedor","dataSrc":""
           },
           "columns" : [
             {"data":"persona"},
             {"data":"correos"},
            {"data":"id"},
            {"data":"nombreEmpresa"}

             
           ]
          });

               $(document).on('click', '.glyphicon-plus', function(){

             // $("#agregar").modal('show');
             location.href="FormProducto.php";      
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
                           Proveedor  
                                 <span class="glyphicon glyphicon-plus"></span>
                    </div>
                        <!-- /.panel-heading -->
                     <div class="panel-body">
                        <div class="table-responsive">
                          <!-- /.se adapta -->
                                <table class="table table-striped table-bordered table-hover" id="proveedor" >
                           
                             <!-- encabezados -->   
                              <thead>
                                <th>Proveedor</th>
                                <th>Correo</th>
                                <th>Id</th>
                                <th>Empresa</th>
                                
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