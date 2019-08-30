<?php
// elimina la tarea
	include "conexion.php";

	EliminarTarea($_GET['no']);

	function EliminarTarea($no)
	{
		$sentencia="DELETE FROM tareas WHERE ID_tarea='".$no."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Tarea Eliminada Exitosamente");
	window.location.href='index.php';
</script>