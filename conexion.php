<?php
// conexion a la base de datos

  $conexion = mysql_connect('localhost','root','root');
  mysql_select_db("proyecto_freire",$conexion);
  
  mysql_query("SET NAMES 'utf8'");
  
?>