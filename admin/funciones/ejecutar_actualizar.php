<?php
	extract($_POST);//extraer todos los valores del metodo post del formulario de actualizar
	require("../../configs/funciones.php");

	$sentencia="update inquilino set username='$user', password='$pass', nombre='$name', apellidos='$apellido', cuarto='$cuarto', monto='$monto' where id_inquilino='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("funciones.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: ../admin.php");
		
		echo "<script>location.href='../admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='../admin.php'</script>";
	}
?>