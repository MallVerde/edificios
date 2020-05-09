
<?php
	session_start();	
	require("../configs/funciones.php");
	$username=$_POST['username'];
	$pass=$_POST['password'];
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM inquilino WHERE username='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['id_cliente']=$f2['id_inquilino'];
			$_SESSION['user']=$f2['username'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='../admin/admin.php'</script>";
		}
	}

	$sql=mysqli_query($mysqli,"SELECT * FROM inquilino WHERE username='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id_cliente']=$f['id_inquilino'];
			$_SESSION['user']=$f['username'];
			$_SESSION['rol']=$f['rol'];

			header("Location:../?p=principal");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='../?p=login'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE SUS DATOS CORRECTAMENTE")</script> ';
		
		echo "<script>location.href='../?p=login'</script>";	

	}

?>