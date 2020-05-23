<?php
    $id = $_SESSION['id_cliente'];
    
    $query_inquilino = mysqli_query($mysqli, "SELECT * FROM inquilino WHERE id_inquilino=$id");
	$row = mysqli_fetch_array($query_inquilino);

?>

<div class="contenedor_tarjeta">
    <form action="modulos/validar_pago.php"  method="post">
        <div class="card">
            <div class="card-header">
                <h3>Pago en línea</h3>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>
                        Nombre del titular
                    </label>
                    <input class="form-control" name="name" type="text"   maxlength="55" autocomplete="off" id="nombre" value="<?php echo $row['nombre']," ", $row['apellidos']?>" required readonly>
                </div>
                <div class="col-md-6">
                    <label>
                        Número de tarjeta
                    </label>
                    <input name="card" class="form-control" type="text"   maxlength="16" autocomplete="off" id="num_tar" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label>
                        CVC
                    </label>
                    <input name="cvc" class="form-control" type="text" maxlength="4"   autocomplete="off" id="cvc" required> 
                </div>
                <div class="col-md-6">
                    <label>
                        Fecha de expiración (MM/AA)
                    </label>
                    <div>
                        <input style="width:50px; display:inline-block" class="form-control" type="text" maxlength="2" autocomplete="off" id="mes" name="mes" required>
                        <input style="width:50px; display:inline-block" class="form-control" type="text" maxlength="2" autocomplete="off" id="año" name="año" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Monto</label>
                    <input class="form-control" type="number" name="monto" autocomplete="off" id="monto" required value="<?php echo $row['monto']?>" readonly>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12" style="text-align:center;">
                    <input type="submit" value="Pagar" class="btn btn-success btn-lg" style="width:50%;" id="btnSend"></input>

                    <a href="#" onclick="window.history.go(-1);"><button class="btn btn-danger btn-lg" style="width: 49.5%;">Cancelar</button></a>
                </div>
            </div>
        </div>
    </form>
    <script src="js/tarjeta.js"></script>
</div>