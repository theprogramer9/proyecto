<?php   include("conexion.php");  

function array_utf8_encode_recursive($dat){
  if (is_string($dat)) {
      return utf8_encode($dat);
  }
  if (is_object($dat)) {
      $ovs=get_object_vars($dat);
      $new=$dat;
      foreach ($ovs as $k => $v) {
        $new->$k=array_utf8_encode_recursive($new->$k);
      }
      return $new;
  }
  if (!is_array($dat)) return $dat; 
  $ret = array();
  foreach ($dat as $i => $d) $ret[i]=array_utf8_encode_recursive($d);
  return $ret;
}

//----------------------------------------------------------------------------------------------
if(isset($_GET["consulta"]) and $_GET["consulta"]=="clientes")
{
    $con="SELECT id_cliente,nombre,apellido,usuario,contra
          from clientes
          
          ";

    $result =$db->query($con);
    if($result)
       {
         while($obj=mysqli_fetch_object($result))
           {

$acciones='<span class="glyphicon glyphicon-trash" id="'.$obj->id_cliente.'">
<span class="glyphicon glyphicon-pencil id="'.$obj->id_cliente.'">';
           $arr[]=array('id'=>$obj->id_cliente,
                        'nombre'=> array_utf8_encode_recursive($obj->nombre),
                        'apellido'=> array_utf8_encode_recursive($obj->apellido),
                        'usuario'=> array_utf8_encode_recursive($obj->usuario),
                        'contraseña'=> array_utf8_encode_recursive($obj->contra),
                        'acciones'=>array_utf8_encode_recursive($acciones)
                      );

               

           }  

         
        }
        else
        {
              $arr[]=array('id'=>'',
                        'nombre'=>'',
                        'apellido'=> '',
                        'usuario'=> '',
                        'contraseña'=> '',
                        'acciones'=>''
                      );

        }
     echo json_encode($arr);
}
//----------------------------------------------------------------------------------------------
if(isset($_GET["consulta"]) and $_GET["consulta"]=="categorias")
{
    $con="SELECT id_categoria,nom_categoria
          from categorias
          
          ";

    $result =$db->query($con);
    if($result)
       {
         while($obj=mysqli_fetch_object($result))
           {

$acciones='<span class="glyphicon glyphicon-trash" id="'.$obj->id_categoria.'">
<span class="glyphicon glyphicon-pencil id="'.$obj->id_categoria.'">';
           $arr[]=array('id'=>$obj->id_categoria,
                        'nombre'=> array_utf8_encode_recursive($obj->nom_categoria),
                        'acciones'=>array_utf8_encode_recursive($acciones)
                      );

               

           }  

         
        }
        else
        {
              $arr[]=array('id'=>'',
                        'nombre'=>'',
                        'acciones'=>''
                      );

        }
     echo json_encode($arr);
}

//-----------------------------------------------------------------------------------------------
if(isset($_GET["consulta"]) and $_GET["consulta"]=="proveedor")
{
    $con="SELECT personaContacto,correo,idProvedor,EMPRESA_nombreEmpresa
          from provedor
          
          ";

    $result =$db->query($con);
    if($result)
       {
         while($obj=mysqli_fetch_object($result))
           {

$acciones='<span class="glyphicon glyphicon-trash" id="'.$obj->idProvedor.'">
<span class="glyphicon glyphicon-pencil id="'.$obj->idProvedor.'">';
           $arr[]=array('persona'=> array_utf8_encode_recursive($obj->personaContacto),
            'correos'=> array_utf8_encode_recursive($obj->correo),
                        'id'=>$obj->idProvedor,
                        'nombreEmpresa'=> array_utf8_encode_recursive($obj->EMPRESA_nombreEmpresa),
                        'acciones'=>array_utf8_encode_recursive($acciones)
                      );

               

           }  

         
        }
        else
        {
              $arr[]=array('persona'=>'',
                        'correos'=>'',
                        'id'=>'',
                        'nombreEmpresa'=>'',
                        'acciones'=>''
                      );

        }
     echo json_encode($arr);
}
//------------------------------------------------------------------------------------------------
if(isset($_GET["consulta"]) and $_GET["consulta"]=="productos")
{
    $con="SELECT clave,nombre_producto,categorias.nom_categoria,precio,kilogramos,producto.id_categoria 
          from producto
          INNER JOIN categorias on producto.id_categoria=categorias.id_categoria";

    $result =$db->query($con);
    if($result)
       {
         while($obj=mysqli_fetch_object($result))
           {

$acciones='<span class= "glyphicon glyphicon-trash" id="'.$obj->clave.'">'; 
           $acciones2='<span class= "glyphicon glyphicon-pencil" id="'.$obj->clave.'">';
                        $arr[]=array('id'=>$obj->clave,
                        'nombre'=> array_utf8_encode_recursive($obj->nombre_producto),
                        'categoria'=> array_utf8_encode_recursive($obj->nom_categoria),
                        'precio'=> $obj->precio,
                        'kilo'=> array_utf8_encode_recursive($obj->kilogramos),
                        'acciones'=>array_utf8_encode_recursive($acciones),
                        'acciones2'=>array_utf8_encode_recursive($acciones2)
                      );

               

           }  

         
        }
        else
        {
              $arr[]=array('id'=>'',
                        'nombre'=>'',
                        'categoria'=> '',
                        'precio'=> '',
                        'kilo'=> '',
                        'acciones'=>'',
                        'acciones2'=>''
                      );

        }
     echo json_encode($arr);
}
//--------------------------------------------------------------------------------------------
if(isset($_GET["consulta"]) and $_GET["consulta"]=="productos1")
{
    $con="SELECT clave,nombre_producto,categorias.nom_categoria,precio,kilogramos,producto.id_categoria 
          from producto
          INNER JOIN categorias on producto.id_categoria=categorias.id_categoria WHERE clave=".$_GET["clave"]."";

    $result =$db->query($con);
    if($result)
       {
         while($obj=mysqli_fetch_object($result))
           {

           
           $acciones='<span class= "glyphicon glyphicon-trash" id="'.$obj->clave.'">'; 

           $acciones2='<span class= "glyphicon glyphicon-pencil" id="'.$obj->clave.'">';
                        $arr[]=array(
                        'clave'=>array_utf8_encode_recursive($obj->clave),
                        'nombre'=> array_utf8_encode_recursive($obj->nombre_producto),
                        'categoria'=> array_utf8_encode_recursive($obj->nom_categoria),
                        'precio'=>array_utf8_encode_recursive($obj->precio),
                        'kilo'=> array_utf8_encode_recursive($obj->kilogramos),
                        'acciones'=>array_utf8_encode_recursive($acciones),
                        'acciones2'=>array_utf8_encode_recursive($acciones2)
                      );

               

           }  

         
        }
        else
        {
            $arr[]=array(
                        'clave'=>'',
                        'nombre'=>'',
                        'categoria'=> '',
                        'precio'=> '',
                        'kilo'=> '',
                        'acciones'=>'',
                        'acciones2'=>''

                      );

        }
     echo json_encode($arr);
}






//-----------------------------

if (isset($_GET["accion"])and$_GET["accion"]=="borra_arreglo") {
$del="DELETE from producto
where clave=".$_GET["id"];
$result=$db->query($del);
if($result)
  $arr[]=array('bn'=>'1');
else
  $arr[]=array('bn'=>'0');
echo json_encode($arr);
}




  if (isset($_GET["accion"]) and $_GET["accion"] == "agrega_arreglo") {

    //falta revisar los campos
        
        $add = "INSERT INTO producto(nombre_producto, precio,kilogramos, id_categoria) 
        VALUES('".$_GET["nombre"]."', ".$_GET["precio"].",".$_GET["kilo"].",'".$_GET["categoria"]."');";

//cambiar
        $result=$db->query($add);
        
        if ($result) {
          $arr[]=array('bn'=>'1');

        }else{
          $arr[]=array('bn'=>'0');
        }
        echo json_encode($arr);
      }



       if (isset($_GET["accion"]) and $_GET["accion"] == "editar_arreglo") {

    //falta revisar los campos
        
        $add = "UPDATE producto SET clave='".$_GET["clave"]."',nombre_producto='".$_GET["nombre"]."',precio='".$_GET["precio"]."',kilogramos='".$_GET["kilo"]."',id_categoria='".$_GET["categoria"]."'
WHERE clave='".$_GET["clave"]."'";

//cambiar
        $result=$db->query($add);
        
        if ($result) {
          $arr[]=array('bn'=>'1');

        }else{
          $arr[]=array('bn'=>'0');
        }
        echo json_encode($arr);
      }

?>





