		 <?php
include("conexion.php");
session_start();
$_SESSION["nombre"]="Betzaira";
echo  $_SESSION["nombre"].'';

?>



    	<?php 
            $con="SELECT clave,nom_producto,nom_categoria,precio,im_producto 
                  from producto 
                  INNER JOIN categorias on producto.nom_categoria=categorias.nom_categoria 
                  WHERE nom_categoria='res' LIMIT 1,4";

            $result =$db->query($con);
            if($result)
            {
               while($obj=mysqli_fetch_object($result))
               {
                
                echo '<li class="span3">
                              <div class="thumbnail thumbnail-1">
                            <h3 class="title-1 extra">'.$obj->nom_categoria.'</h3>
                            <img  src="imges/arreglos/'.$obj->im_producto.'" alt="">
                            <section> <strong>'.$obj->nom_producto.'</strong>
                                  <p>'.$obj->precio.'</p>
                                  <a href="#" class="btn btn-1">COMPRAR</a> </section>
                              </div>
                       </li>';                    
                             
               }
            }

         ?>
          </ul>
            </div>
      </div>
        </div>
