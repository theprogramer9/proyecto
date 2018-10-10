
<form  action="valida_foto.php" method="POST" enctype="multipart/form-data">
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
</form>