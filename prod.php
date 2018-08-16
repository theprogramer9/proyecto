


        <div class="clearfix"> </div> 
        <div class="resp-tabs-container">
          <div class="tab-1 resp-tab-content">
            <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">   
                <div class="p-mask">
                <form action="#" method="post">
                  <?php 
            $con="SELECT producto.clave, producto.nombre_producto, producto.nom_categoria,producto.precio, producto.im_producto 
              from producto
              INNER JOIN categorias on producto.id_categoria=categorias.id_categoria
              WHERE producto.nom_categoria='pollo'";
            $result =$db->query($con);
            if($result)
            {
               while($obj=mysqli_fetch_object($result))
               {
                
                echo '<li class="span3">
            
                              <div class="thumbnail thumbnail-1">     
                            <img  src="images/arreglos/'.$obj->im_producto.'" alt="">
                            <section> <strong>'.$obj->nombre_producto.'</strong>
                                  <p>$'.$obj->precio.'</p>
                                  <a href="#" class="btn btn-1">COMPRAR</a> </section>
                              </div>
                              
                       </li>';                    
                             
               }
            }

         ?>

                </form>
                </div>
              </div>
              