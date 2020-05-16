<?php
    // Llamando a los comapos
    require("../configs/funciones.php");
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    // Datos para el correo
    $destinatario = "treason.199@gmail.com";
    $asunto = "Contacto desde nuestra web";

    $carta = "De: $nombre \n";
    $carta .= "Correo: $correo \n";
    $carta .= "Telefono: $telefono \n";
    $carta .= "Mensaje: $mensaje";

    // Enviando mensaje
    @mail($destinatario, $asunto,$carta);
    echo '<script language="javascript">alert("Mensaje enviado exitosamente");
    window.location.href="../?p=contacto"</script>';
?>