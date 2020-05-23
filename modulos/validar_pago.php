<?php    
    session_start();
    
    require("../configs/funciones.php");
    $id = $_SESSION['id_cliente'];   
    $monto = $_POST['monto'];

    $sql = "INSERT INTO pago (`id_pago`,`id_inquilino`,`estado`,`fecha`,`monto`) 
    VALUES ('','$id','pagado',NULL,'$monto')";

    if (mysqli_query($mysqli, $sql)) {
        $message= "PAGO REALIZADO SATISFACTORIAMENTE";
        echo '<script>window.location.href="../?p=perfil"</script>';
        
    


    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }

    
?>