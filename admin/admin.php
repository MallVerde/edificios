<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:../?p=principal");
	}elseif ($_SESSION['rol']==2) {
		header("Location:../?p=principal");
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edificios Castro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
	<meta name="author" content="Joseph Godoy">
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="css/estilos.css?v=<?php echo time();?>">
  </head>
<body>
	<div class="container">
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<ul class="nav">
						<li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>
					</ul>
					<ul class="nav pull-right">
					<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
					<li><a href="funciones/agregar.php"> Agregar Usuario</a></li>	
					<li><a href="funciones/salir_admin.php"> Cerrar Cesión </a></li>	
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<div class="caption">
					<h2> Administración de usuarios registrados</h2>	
					<div class="well well-small">
						<h4>Tabla de Usuarios</h4>
							<div class="row-fluid">
								<?php
									require("../configs/funciones.php");
									$sql=("SELECT * FROM inquilino");

									//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
									$query=mysqli_query($mysqli,$sql);
									echo "<table border='1'; class='table table-hover';>";
									echo "<tr class='warning'>";
									echo "<td>Id</td>";
									echo "<td>Usuario</td>";
									echo "<td>Password</td>";
									echo "<td>Nombre</td>";
									echo "<td>Apellidos</td>";
									echo "<td>Password Admin";
									echo "<td>Editar</td>";
									echo "<td>Borrar</td>";
									echo "</tr>";			    
								?>	  
								<?php 
				 					while($arreglo=mysqli_fetch_array($query)){
				  						echo "<tr class='success'>";
				    					echo "<td>$arreglo[0]</td>";
				    					echo "<td>$arreglo[1]</td>";
				    					echo "<td>$arreglo[2]</td>";
				    					echo "<td>$arreglo[3]</td>";
										echo "<td>$arreglo[4]</td>";
										echo "<td>$arreglo[5]</td>";
				    					echo "<td><a href='funciones/actualizar.php?id=$arreglo[0]'><img src='../img/actualizar.png' style='width:30px; class='img-rounded'></td>";
										echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2 '><img src='../img/eliminar.png' class='img-rounded' style='width:30px;'/></a></td>";							
										echo "</tr>";
									}
									echo "</table>";
									extract($_GET);
									if(@$idborrar==2){
										$sqlborrar="DELETE FROM inquilino WHERE id_inquilino=$id";
										$resborrar=mysqli_query($mysqli,$sqlborrar);
										echo '<script>alert("REGISTRO ELIMINADO")</script> ';
										//header('Location: proyectos.php');
										echo "<script>location.href='admin.php'</script>";
									}
								?>
							<div class="span8">
						</div>	
					</div>	
				</div>
				<div class="caption">		
					<h2> Administración de pagos realizados</h2>				
					<div class="well well-small">
						<h4>Tabla de pagos</h4>
							<div class="row-fluid">
								<?php
									$sql=("SELECT * FROM pago");

									//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
									$query=mysqli_query($mysqli,$sql);
									echo "<table border='1'; class='table table-hover';>";
									echo "<tr class='warning'>";
									echo "<td>Id_pago</td>";
									echo "<td>Id_inquilino</td>";
									echo "<td>Id_cuarto</td>";
									echo "<td>Estado</td>";
									echo "<td>Fecha</td>";
									echo "</tr>";			    
								?>	  
								<?php 
				 					while($arreglo=mysqli_fetch_array($query)){
				  						echo "<tr class='success'>";
				    					echo "<td>$arreglo[0]</td>";
				    					echo "<td>$arreglo[1]</td>";
				    					echo "<td>$arreglo[2]</td>";
				    					echo "<td>$arreglo[3]</td>";
										echo "<td>$arreglo[4]</td>";
										echo "</tr>";
									}
									echo "</table>";
								?>
							<div class="span8">
						</div>	
					</div>	
				</div>
				<footer class="footer">
					<hr class="soften"/>
					<p>&copy; Copyright Equipo Prieto, Zepahua & Bulbarela<br/><br/></p>
 				</footer>
			</div>
		</div>
	</div>

</body>
</html>