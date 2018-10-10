<?php
include("conexioon.php"); 
$nom=$_REQUEST["txtnom"];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="fotos/".$foto;
copy($ruta,$destino);
mysql_query("insert into images_tabla (nombre,foto) values('$nom','$destino')");
header("Location: inic.php");
?>
