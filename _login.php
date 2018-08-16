<?php 
include("conexion.php");
	if (isset($_POST["Email"]) and isset($_POST["Pass"]))
 		{
	     $consulta = "SELECT Nombre, ApellidoP, Usuario, Contraseña FROM clientes
        WHERE  Usuario='".$_POST["Email"]."' AND Contraseña='".$_POST["Pass"]."'";
         $resultbuscar= $db->query($consulta);
           if($resultbuscar)
              {

                 if (mysqli_num_rows($resultbuscar)>0) 
                   {
                    session_start();
                    
                  $objbuscar=mysqli_fetch_object($resultbuscar);
                  $_SESSION["autentificado"]="si";
                  $_SESSION["Nombre"]=$objbuscar->Nombre;
                  //asignando el resultado del query a una variable de _session
                  $_SESSION["ApellidoP"]=$objbuscar->ApellidoP;
                  header ("Location:index.php");
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