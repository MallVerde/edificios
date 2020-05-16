<?php
session_start();
include("conexion.php");
$active_config = "active";
$active_banner = "active";

if (@!$_SESSION['user']) {
	header("Location:../?p=principal");
} elseif ($_SESSION['rol'] == 2) {
	header("Location:../?p=principal");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Edificios Castro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta charset="utf-8">
	<link rel="stylesheet" href="../..//bootstrap/css/bootstrap.min.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="../css/estilos.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="icon" href="images/ico/favicon.ico">
</head>

<body>
	<div class="container" style="width: 75%;">
		<div class="row" style="width: 100%;">
			<div class="span12">
				<div class="navbar">
					<div class="navbar-inner">
						<div class="container">
							<ul class="nav">
								<li class=""><a href="../admin.php">ADMINISTRADOR DEL SITIO</a></li>
							</ul>
							<ul class="nav pull-right">
								<li><a href="">Bienvenido <strong><?php echo $_SESSION['user']; ?></strong> </a></li>
								<li><a href="../funciones/agregar.php"> Agregar Usuario</a></li>
								<li><a href="bannerlist.php"> Galeria</a></li>
								<li><a href="../funciones/salir_admin.php"> Cerrar Cesión </a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 text-right">
						<a href='banneradd.php' class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Agregar Banner</a>
					</div>

				</div>

				<br>
				<div id="loader" class="text-center"> <span><img src="img/ajax-loader.gif"></span></div>
				<div class="outer_div"></div><!-- Datos ajax Final -->

				<footer class="footer">
					<hr class="soften" />
					<p>&copy; Copyright Equipo Prieto, Zepahua & Bulbarela<br /><br /></p>
				</footer>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>

<script>
	$(document).ready(function() {
		load(1);
	});

	function load(page) {
		var parametros = {
			"action": "ajax",
			"page": page
		};
		$.ajax({
			url: 'ajax/banner_ajax.php',
			data: parametros,
			beforeSend: function(objeto) {
				$("#loader").html("<img src='img/ajax-loader.gif'>");
			},
			success: function(data) {
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}

	function eliminar_slide(id) {
		page = 1;
		var parametros = {
			"action": "ajax",
			"page": page,
			"id": id
		};
		if (confirm('Esta acción  eliminará de forma permanente el banner \n\n Desea continuar?')) {
			$.ajax({
				url: 'ajax/banner_ajax.php',
				data: parametros,
				beforeSend: function(objeto) {
					$("#loader").html("<img src='images/ajax-loader.gif'>");
				},
				success: function(data) {
					$(".outer_div").html(data).fadeIn('slow');
					$("#loader").html("");
				}
			})
		}
	}
</script>