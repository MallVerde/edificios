<?php		
	$id = $_SESSION['id_cliente'];
	
	if(isset($_SESSION['id_cliente'])){
		
	}
	else{
		header ("Location:?p=principal");
	}
	$query_empresa = mysqli_query($mysqli, "SELECT * FROM inquilino WHERE id_inquilino=$id");
	$row = mysqli_fetch_array($query_empresa);
?>

<div class="container" style="margin-bottom: 1em;">
	<div class="row">
		<form method="post" id="perfil">			
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad" style="z-index: 1" >
					<div class="panel panel-success">
						<div class="panel-body">
						<br>
							<div class="row">
								<div class="col-md-3 col-lg-3" align="center">
									<div id="load_img">
										<img  id="imagen_perfil" class="img-responsive" src="<?php echo $row['logo_url']; ?>" alt="imagen_perfil">
									</div>
									<br>
									<br>
									<br>
									<br>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input class='filestyle' data-buttonText="Buscar" type="file" name="imagefile" id="imagefile" onchange="upload_image();">
											</div>
										</div>
									</div>
								</div>
								<div class=" col-md-9 col-lg-9">
									<h2>Datos del Inquilino</h2>	
									<br>
									<table class="table table-striped table-dark  table-bordered">
										<tbody>
											<tr>
												<td class='col-md-3'>Nickname:</td>
												<td><?php echo $row['username'] ?></td>
											</tr>
											<tr>
												<td>Constraseña:</td>
												<td><?php echo $row['password'] ?></td>
											</tr>
											<tr>
												<td>Nombre:</td>
												<td><?php echo $row['nombre'] ?></td>
											</tr>
											<tr>
												<td>Apellidos</td>
												<td><?php echo $row['apellidos'] ?></td>
											</tr>
											<tr>
												<td>Num. Departamento</td>
												<td><?php echo $row['cuarto'] ?></td>
											</tr>
											<tr>
												<td>Monto de pago</td>
												<td><?php echo $row['monto']?> $</td>
											</tr>
										</tbody>
									</table>
									<div style="margin-top: 25px;">
										<a href="?p=pago"><button type="button" class="btn btn-primary">Realizar pago</button></a>
										<a href="?p=historial_pagos"><button type="button" class="btn btn-primary">Historial de pagos</button></a>
									</div>			
								</div>
							</div>						
						</div>
					</div>		
				</div>
		</form>
	</div>

	<script type="text/javascript" src="js/bootstrap-filestyle.js"> </script>
	<script>
		function upload_image() {
			var inputFileImage = document.getElementById("imagefile");
			var file = inputFileImage.files[0];
			if ((typeof file === "object") && (file !== null)) {
				$("#load_img").text('Cargando...');
				var data = new FormData();
				data.append('imagefile', file);

				$.ajax({
					url: "ajax/imagen_ajax.php", // Url to which the request is send
					type: "POST", // Type of request to be send, called as method
					data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
					contentType: false, // The content type used when sending data to the server.
					cache: false, // To unable request pages to be cached
					processData: false, // To send DOMDocument or non processed data file it is set to false
					success: function(data) // A function to be called if request succeeds
					{
						$("#load_img").html(data);
					}
				});
			}
		}
	</script>
	<br>
</div>