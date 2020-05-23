<?php
    extract($_POST);	//extraer todos los valores del metodo post del formulario agregar
    require("../../configs/funciones.php");

    $sql = "INSERT INTO inquilino (`id_inquilino`,`username`,`password`,`logo_url`,`nombre`,`apellidos`,`pasadmin`,`rol`,`cuarto`,`monto`) 
    VALUES ('$id','$user','$pass','img/user_13230.png','$name', '$apellido',NULL,'2',$cuarto,$monto)";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script>alert("NUEVO USUARIO REGISTRADO")</script> ';
        echo "<script>location.href='../admin.php'</script>";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }

?>