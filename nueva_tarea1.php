<?php
// formato para generar la nueva tarea
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crear Tarea</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h3 style="color:#666">Crear Nuevo Tarea</h3> </span>
  		<br>
	  <form action="nueva_tarea2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
  		
  		
  		<label>Descripcion: </label>
  		<input type="text" id="producto" name="tarea" required><br>

  		
  		<br>
  		<button type="submit" class="btn btn-success" required>Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>