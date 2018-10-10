<?php 
include("conexion.php");
	if (isset($_POST["Email"]) and isset($_POST["Pass"]))
 		{
	     $consulta = "SELECT nombre, apellido, usuario, contra FROM user
        WHERE  usuario='".$_POST["Email"]."' AND contra='".$_POST["Pass"]."'";
         $resultbuscar= $db->query($consulta);
           if($resultbuscar)
              {

                 if (mysqli_num_rows($resultbuscar)>0) 
                   {
                    session_start();
                    
                  $objbuscar=mysqli_fetch_object($resultbuscar);
                  $_SESSION["autentificado"]="si";
                  $_SESSION["nombre"]=$objbuscar->nombre;
                  //asignando el resultado del query a una variable de _session
                  $_SESSION["apellido"]=$objbuscar->apellido;
                  header ("Location:inicio.php");
        //concatenar variables de post
                    }else
                    {
                     //para mandar parametros de una pagina
                     header("Location:login.php?error=1");


                    }
                }
            }
		    else
		    {
 			header("Location:404.html");

		    }

     
?>