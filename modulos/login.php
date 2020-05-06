<section class="form_wrap">
	<section class="cantact_info">
        <section class="info_title">
			<span class="fa fa-user-circle"></span>
			<h2>INGRESE CORRECTAMENTE SUS DATOS</h2>
        </section>
        <section class="info_items">
        </section>
	</section>

	<form action="modulos/validar.php" class="form_contact" method="post">
		<div class="titulo_sesion">
			<h1 style="text-align: center">Iniciar Sesión</h2>
			<br>
			<label for=""><h4>Nombre de usuario</h4></label>
			<input type="text" autocomplete="off" placeholder="Usuario" name="username" id="names" required onkeypress="pulsar(event)"/>	
			<br>
			<br>
			<label for=""><h4>Contraseña</h4></label>
			<input type="password" placeholder="Contraseña" name="password" id="password" required/>
			<br><br><br>
			<br>
			<input type="submit" value="Iniciar Sesión" id="btnSend" name="enviar" style="float: right">
		</div>
	</form>
	<script src="js/sesion.js"></script>
</section>




