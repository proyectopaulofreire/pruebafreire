<?php
// guarda la nueva tarea
	include 'conexion.php';

	NuevaTarea($_POST['tarea']);

	function NuevaTarea($tarea)
	{
		$sentencia="INSERT INTO tareas (Descripcion,Completada) VALUES ('".$tarea."', 'No Terminada')";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Tarea Ingresada Exitosamente");
	window.location.href='index.php';
</script>