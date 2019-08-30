<?php
    // define la tarea como terminada
	include 'conexion.php';

	ActualizarTarea($_GET['no']);

	function ActualizarTarea($actualizar)
	{   
		$sentencia="UPDATE tareas SET Completada='Terminada' WHERE ID_tarea='".$actualizar."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Tarea Terminada Exitosamente");
	window.location.href='index.php';
</script>