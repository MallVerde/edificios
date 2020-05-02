<?php
    extract($_POST);	//extraer todos los valores del metodo post del formulario agregar
    require("../../configs/funciones.php");

    $sql = "INSERT INTO inquilino (`id_inquilino`,`username`,`password`,`nombre`,`apellidos`,`pasadmin`,`rol`) 
    VALUES ('$id','$user','$pass', '$name', '$apellido',NULL,'2')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script>alert("NUEVO USUARIO REGISTRADO")</script> ';
        echo "<script>location.href='../admin.php'</script>";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }

?>