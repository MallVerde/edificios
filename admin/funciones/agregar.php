<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==2) {
		header("Location:../index.php");
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
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
  </head>
<body>
	<div class="container">
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<div class="nav-collapse">
						<ul class="nav">
							<li class=""><a href="../admin.php">ADMINISTRADOR DEL SITIO</a></li>
						</ul>
						<ul class="nav pull-right">
                            <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
							<li><a href="agregar.php"> Agregar Usuario</a></li>	
							<li><a href="../galeria/bannerlist.php"> Galeria</a></li>	
							<li><a href="funciones/salir_admin.php"> Cerrar Cesión </a></li>			 
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">	
			<div class="span12">
				<div class="caption">
					<h2> Administración de usuarios registrados</h2>	
					<div class="well well-small">
						<h4>Agregar Usuarios</h4>
						<div class="row-fluid">				
							<form action="ejecutar_agregar.php" method="post">																
								Id
								<br>
								<input type="text" name="id" required autocomplete="off">
								<br>
								Nick Name
								<br>
								<input type="text" name="user" required autocomplete="off">
								<br>
								Contraseña
								<br>
								<input type="text" name="pass" required autocomplete="off">
								<br>
								Nombre de usuario
								<br> 
								<input type="text" name="name" required autocomplete="off">
								<br>
								Apellidos
								<br>
                                <input type="text" name="apellido" required autocomplete="off">
								<br>
								Num. Departamento
								<br>
								<input type="text" name="cuarto" required autocomplete="off">
								<br>
								Monto de pago
								<br>
								<input type="number" name="monto" required autocomplete="off">
								<br>
								<input type="submit" value="Guardar" class="btn btn-success btn-primary">
							</form>
						</div>	
					</div>
				</div>
			</div>
		</div>

		<footer class="footer">
			<hr class="soften"/>
			<p>&copy; Copyright Equipo Prieto, Zepahua & Bulbarela<br/><br/></p>
 		</footer>
	</div>
</body>
</html>