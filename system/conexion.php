<?php
   $host="localhost";
   $database="masterpoint";
   $user="root";
   $psw="pavilion";
   $db=new mysqli($host,$user,$psw,$database);

   			if($db-> connect_error>0)
   			   die("Error de conexion [".$db->connect_error."]");   
   		
   		//	else
   		//		echo"Conexion Correcta";
?>   			   