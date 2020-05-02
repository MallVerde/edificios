<section class="form_wrap">
    <section class="cantact_info">
        <section class="info_title">
            <span class="fa fa-user-circle"></span>
            <h2>INFORMACIÓN<br>DE CONTÁCTO</h2>
        </section>
        <section class="info_items">
            <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
            <p><span class="fa fa-mobile"></span> +1(585) 902-8665</p>
        </section>
    </section>

    <form action="modulos/enviar.php" class="form_contact" method="post">
        <h1 style="text-align: center">Envía un mensaje</h1>
        <div class="user_info">
            <label for="names">Nombres *</label>
            <input type="text" id="names" name="nombre" required autocomplete="off">

            <label for="phone">Telefono / Celular</label>
            <input type="text" id="phone" name="telefono" autocomplete="off">

            <label for="email">Correo electrónico *</label>
            <input type="text" id="email" name="correo" required autocomplete="off">

            <label for="mensaje">Mensaje *</label>
            <textarea id="mensaje" name="mensaje" required></textarea>

            <input type="submit" value="Enviar Mensaje" id="btnSend">
        </div>
    </form>
    <script src="js/contacto.js"></script>
</section>
