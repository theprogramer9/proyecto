<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boostrap y Eventos</title>
 
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="js/jquery-1.6.min.js" type="text/javascript"></script>
 	<?php include('_metas.php'); ?>
    
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
                           BIENVENIDOS      
                    </div>
                        <!-- /.panel-heading -->
                     <div class="panel-body">
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                            		<TR>
                            		    <TD></TD>
                            		</TR>
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

    
 
   
    <script>
       $(document).ready(function(){  
           alert('Abriendo pagina');
       });
    </script>
   <?php include('_script.php'); ?>
  </body>
</html>