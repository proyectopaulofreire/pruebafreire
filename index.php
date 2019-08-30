<!DOCTYPE html>
<!-- pagina principal listado de tareas 

Participante: Henry Iregui Florez
Fecha: 29-08-2019

Elementos Utilizados para el Proyecto
Dream Weaver CS6
Wampserver
base de datos: MySQL 5.1
nombre base de datos: proyecto_freire
tabla: tareas
estructura tabla:
ID_tarea INT not null Primary key
Descripcion Varchar(300)
Completada Varchar(30)

-->
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>INSTITUTO PAULO FREIRE</title>

<style type="text/css">
@import url("css/mycss.css"); <!-- clase para adaptar pantalla -->
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

</head>
<body>

<div class="todo"> <!-- clase para adaptar pantalla -->
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  <h2 align="center"> <p style="color:#666"> <b> Listado de Tareas </b> </p> </h2>
  
  <div id="contenido">
 
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 20px 10px">
     
  		<thead>
  			<th>DESCRIPCION</th>
  			<th>ESTADO TAREA</th>
            <!-- boton nueva tarea -->
  		    <th> <a href="nueva_tarea1.php"> <button type="button" class="btn btn-info">Nueva Tarea</button> </a> </th> 
  		</thead> 
 
   <?php
     include "conexion.php";
     $sentencia="SELECT * FROM tareas";
     $resultado=mysql_query($sentencia);
		 
      while($filas=mysql_fetch_assoc($resultado))
      {
        echo "<tr>";
          echo "<td>"; echo $filas['Descripcion']; echo "</td>"; // descripcion de la tarea
          echo "<td>"; echo $filas['Completada']; echo "</td>"; // estado de la tarea
		  
		  // boton terminar tarea - inhabilita el boton cuando la tarea ya esta terminada
		  if ($filas['Completada'] == 'Terminada'){
	         echo "<td>  <a href='actualizar_tarea.php?no=".$filas['ID_tarea']."'> <button type='button' class='btn btn-success' disabled>Tarea Completada</button> </a> </td>";
          }else {
	         echo "<td>  <a href='actualizar_tarea.php?no=".$filas['ID_tarea']."'> <button type='button' class='btn btn-success'>Terminacion Tarea</button> </a> </td>";
          }  
		  
		  // boton eliminar
          echo "<td> <a href='eliminar_tarea.php?no=".$filas['ID_tarea']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";

      }

      ?>
  	</table>	
    
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>

</body>
</html>