<div class="historial_pagos">
    <h2>Historial de pagos</h2>
    <div class="row-fluid">
        <?php
        $id = $_SESSION['id_cliente'];

        $sql = ("SELECT * FROM pago where id_inquilino = $id ");

        $q = $mysqli->query("SELECT * FROM inquilino WHERE id_inquilino = $id");
        $r = mysqli_fetch_array($q);
        $nombre = $r['nombre'];
        $apellido = $r['apellidos'];
        $departamento = $r['cuarto'];

        //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");

        $query = mysqli_query($mysqli, $sql);
        echo "<table border='1'; class='table table-hover';>";
        echo "<tr class='warning'>";
        echo "<td>Nombre</td>";
        echo "<td>Num. Departamento</td>";
        echo "<td>Monto de pago</td>";
        echo "<td>Estado de pago</td>";
        echo "<td>Fecha de pago</td>";
        echo "</tr>";
        ?>
        <?php
        while ($arreglo = mysqli_fetch_array($query, $id)) {
            echo "<tr class='success'>";
            echo "<td>$nombre $apellido</td>";
            echo "<td>$departamento</td>";
            echo "<td>$arreglo[4] $</td>";
            echo "<td>$arreglo[2]</td>";
            echo "<td>$arreglo[3]</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
        <a href="#" onclick="window.history.go(-1);"><button class="btn btn-danger btn-lg">Regresar</button></a>
    </div>
</div>