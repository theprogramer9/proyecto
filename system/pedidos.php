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

          $('#pedidos').dataTable({
           "ajax":{
            "url":"_consultas.php?consulta=pedidos","dataSrc":""
           },
           "columns" : [
             {"data":"fecha"},
             {"data":"cliente"},
             {"data":"total"},
            {"data":"acciones"}
             
           ]
          })
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
                           PEDIDOS     
                    </div>
                        <!-- /.panel-heading -->
                     <div class="panel-body">
                        <div class="table-responsive">
                          <!-- /.se adapta -->
                                <table class="table table-striped table-bordered table-hover" id="pedidos" >
                           
                             <!-- encabezados -->   
                              <thead>
                                <th>Fecha</th>
                                <th>Cliente</th>
                                <th>Total</th>
                                <th>Accioes</th>
                                
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