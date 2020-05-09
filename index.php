<?php
include "configs/config.php";
include "configs/funciones.php";


if (@!$_SESSION['user']) {
    
} elseif ($_SESSION['rol'] == 1) {
    header("Location:admin/admin.php");
}

if (!isset($p)) {
    $p = "principal";
} else {
    $p = $p;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="fontawesome/js/all.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/app.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/font-awesome.css">
    <title>Edificios Castro</title>
</head>

<body>
    <div class="contenedor_principal">
        <div class="cabecera">
            <header>
                <div class="titulo_cabecera">
                    <a href="#">
                        <h3>Edificios Castro</h3>
                    </a>
                </div>

                <nav>
                    <ul class="menu">
                        <li><a href="?p=principal">Inicio</a></li>
                        <li><a href="?p=contacto">Contacto</a></li>
                        <li><a href="?p=galeria">Galeria</a></li>
                        <?php
                        if (isset($_SESSION['id_cliente'])) {
                        ?>
                            <li><a class="" href="#"><?= nombre_cliente($_SESSION['id_cliente']) ?></a>
                                <ul class="submenu">
                                    <li><a href="?p=perfil">ver perfil</a></li>
                                    <li><a class="" href="?p=salir_usuario">Salir</a></li>
                                </ul>
                            </li>
                    </ul>
                <?php
                        } else {
                ?>
                    
                        <li><a href="?p=login">Iniciar Sesión</a></li>
                    </ul>
                <?php
                        }
                ?>
                </nav>
            </header>
        </div>

        <section>
            <div class="cuerpo">
                <?php
                if (file_exists("modulos/" . $p . ".php")) {
                    include "modulos/" . $p . ".php";
                } else {
                    echo "<i>No se ha encontrado el modulo <b>" . $p . "</b><a href='./'> Regresar</a></i>";
                }
                ?>
            </div>
        </section>
        <footer>
            <div class="contenido_pie">
                <div class="pie_left">
                    <h5>
                        Copyright Edificios Castro &copy; <?= date("Y") ?>
                        <br>
                        <br>
                        Esquina Oriete 9, Norte 12
                    </h5>
                </div>
                <div class="pie_right">
                    <h5>
                        Redes sociales
                    </h5>
                    <a href="https://www.facebook.com/"><img src="img/icono_F.png" alt=""></a>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


</body>

</html>