<?php //enviar el id del registro del conductor el cual queremos modifiar por medio de la url//
include "modelo/conexion.php";

$id = $_GET["id"];
$sql = $conexion->query(" select * from registro_conductor where id_conductor=$id ");
include "controlador/modificar_conductor.php"

?>

<!DOCTYPE html>
<html lang="en-US">


<head>
    <title>Travelz HTML5 Multipurpose Travel Template</title>
    <meta name="author" content="Nile-Theme">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Travel, HTML5, CSS3, Hotel , Multipurpose, Template, Create a Travel website fast">
    <meta name="description" content="HTML5 Multipurpose Template, Create a website fast">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800|Poppins:300i,400,300,700,400i,500|Ubuntu:300i,400,300,700,400i,500|Raleway:400,500,600,700"
        rel="stylesheet">
    <!-- CSS Files -->
    <!-- Owl Carousel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/travlez-jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="css/sb-admin.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</head>

<body>
    <!-- Header  -->
    <header class="background-white box-shadow">
        <div class="background-main-color padding-tb-5px">
            <div class="container">
                <div class="row">
                    <div class="col-sm d-none d-sm-block text-white">Impulsando el turismo ...</div>
                    <div class="col-sm">
                        <ul class="list-inline text-center margin-0px text-white">
                            <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="youtube" href="#"><i class="fa fa-youtube-play"
                                        aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="google" href="#"><i class="fa fa-google-plus"
                                        aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="rss" href="#"><i class="fa fa-rss"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                        <!-- // Social -->
                    </div>
                    <div class="col-sm d-none d-sm-block">
                        <ul class="user-area list-inline float-right margin-0px text-white">
                            <li class="list-inline-item  padding-right-10px"><a href="page-login-2.php"><i
                                        class="fa fa-lock padding-right-5px"></i>login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-output">
            <div class="container header-in">
                <div class="row">
                    <div class="col-lg-3">
                        <a id="logo" href="perfil-admin.html" class="d-inline-block margin-tb-10px"><img
                                src="images/logo.png" alt=""></a>
                        <a class="mobile-toggle" href="#"><i class="fa fa-navicon"></i></a>
                    </div>
                    <div class="col-lg-9 position-inherit">


                        <ul id="menu-main" class="nav-menu float-right link-padding-tb-20px">
                            <li class="active mega-menu mega-links mega-links-4columns"><a href="#">Inicio</a>
                                <div class="mega-menu-out sub-menu-out">

                                    <ul class="sub-menu-columns">
                                        <li>
                                            <a href="index.html">Inicio</a>
                                        </li>
                                </div>
                            </li>
                            <li class="has-dropdown"><a class="dropdown" href="#">Mi perfil </a>
                                <ul class="sub-menu">
                                    <li class="has-dropdown"><a href="#">Gesti??n de cuenta</a>
                                        <ul class="sub-menu">
                                            <li><a href="header-layout-1.html">Modificar contrase??a</a></li>
                                            <li><a href="header-layout-2.html">Modificar correo electroncio</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-dropdown"><a href="#">Base de datos</a>
                                <ul class="sub-menu">
                                    <li class="has-dropdown"><a href="#">Vehiculos</a>
                                    </li>
                                    <li class="has-dropdown"><a href="tabla-conductores.php">Conductores</a>
                                    </li>
                                    <li class="has-dropdown"><a href="#">Destinos</a>
                                    </li>
                                    <li class="has-dropdown"><a href="#">Ventas</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-dropdown"><a href="#">Control de rutas</a>
                                <ul class="sub-menu">
                                    <li class="has-dropdown"><a href="#">GPS</a>
                                    </li>
                                </ul>



                        </ul>
                        </li>
                        </ul>
                    </div>
                    </li>
                    </ul>

                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- // Header  -->
    <div class="background-light-grey">

        <div class="container padding-tb-50px">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark background-main-color " id="mainNav">
                <a class="navbar-brand" href="dashboard-home.html">Modificar registros </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav navbar-sidenav  background-third-color" id="exampleAccordion">
                        <li class="nav-item" data-toggle="tooltip" data-placement="right">
                            <a class="nav-link" href="dashboard-home.html">
                <i class="fa fa-fw fa-dashboard"></i>
                <span class="nav-link-text">Registrar Veh??culos</span>
            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right">
                            <a class="nav-link" href="dashboard-my-items.html">
                <i class="fa fa-fw fa-table"></i>
                <span class="nav-link-text">Ventas</span>
            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right">
                            <a class="nav-link" href="dashboard-reviews.html">
                <i class="fa fa-fw fa-star"></i>
                <span class="nav-link-text">Destinos</span>
            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right">
                            <a class="nav-link" href="registro_conductores.php">
                <i class="fa fa-fw fa-user-circle"></i>
                <span class="nav-link-text">Registrar conductor</span>
            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right">
                            <a class="nav-link" href="tabla-conductores.php">
                                <i class="fa fa-fw" aria-hidden="true">???</i>
                <span class="nav-link-text">Tabla conductores</span>
            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right">
                            <a class="nav-link" href="tabla-buses.php">
                                <i class="fa fa-fw" aria-hidden="true">???</i>
                <span class="nav-link-text">Tabla de Veh??culos</span>
            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right">
                            <a class="nav-link" href="tabla-rutas.php">
                                <i class="fa fa-fw" aria-hidden="true">???</i>
                                <span class="nav-link-text">Tabla de rutas </span>
                            </a>
                        </li>
                            </ul>
                        </li>
                    </ul>
            </a>
                        </li>
                    </ul>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav navbar-sidenav background-third-color" id="exampleAccordion">
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-fw fa-sign-out"></i>Cerrar sesi??n</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="content-wrapper">
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item "><a href="#">Modificar </a></li>
                                <li class="active">registro</li>

                                <div class="padding-top-15px">
                               
                               
                               <?php
                                            
                                            while ($datos = $sql->fetch_object()) { ?>

                              

                                    <form method="POST">
                                        
                                        
                                    <input type="hidden" name="id" value="<?= $id = $_GET["id"] ?>">

                                        <div class="form-row">

                                            <div class="form-group col-md-6">

                                              

                                                <label for="inputName">Nombres</label>
                                                <input type="text" autocomplete="off" class="form-control"
                                                    name="nombres" value="<?= $datos->nombres ?>" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputName">Apellidos </label>
                                                <input type="text" autocomplete="off" class="form-control"
                                                    name="apellidos" value="<?= $datos->apellidos ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputNumber">Numero de documento </label>
                                                <input type="tel" autocomplete="off" class="form-control" name="dni"
                                                    value="<?= $datos->numero_cedula ?>" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputNumber">Edad </label>
                                                <input type="number" autocomplete="off" class="form-control" name="edad"
                                                    value="<?= $datos->edad ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="date">Fecha de nacimiento</label>
                                                <input type="date" autocomplete="off" class="form-control" name="fecha"
                                                    value="<?= $datos->fecha_nacimiento ?>" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="number">Numero de licencia de conducci??n </label>
                                                <input type="tel" autocomplete="off" class="form-control"
                                                    name="licencia" value="<?= $datos->numero_licencia ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="number">direccion</label>
                                                <input type="text" autocomplete="off" class="form-control"
                                                    name="direccion" value="<?= $datos->direccion ?>" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="number">telefono</label>
                                                <input type="tel" autocomplete="off" class="form-control"
                                                    name="telefono" value="<?= $datos->telefono_celular ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="email">Correo electronico</label>
                                                <input type="email" autocomplete="off" class="form-control"
                                                    name="correo" value="<?= $datos->correo ?>" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email">contrase??a</label>
                                                <input type="pasword" autocomplete="off" class="form-control"
                                                    name="contrase??a" value="<?= $datos->contrase??a ?>" required>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <button type="submit" class="btn btn-primary" name="btnregistrar"
                                            value="ok">Modificar registro</button>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->


            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Desea cerrar sesi??n?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">??</span>
                            </button>
                        </div>
                        <div class="modal-body">Selecciona salir si quieres cerrar la sesi??n actual, en caso contrario
                            selecciona cancelar.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-primary" href="page-login-2.PHP">Salir</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JavaScript-->
        </div>



    </div>
    </div>

    <!-- Footer -->
    <footer id="footer" class="text-center text-lg-left">

        <div class="container">
            <div class="row padding-tb-35px">
                <div class="col-lg-4">
                    <p class="text-sm-center text-lg-left"><span class="text-third-color">Busy</span> | @2017 All copy
                        rights reserved</p>
                </div>
                <div class="col-lg-4 sm-mb-20px">
                    <div class="text-center"><img src="images/cards.png" alt=""></div>
                </div>
                <div class="col-lg-4">
                    <ul class="social_link list-inline text-sm-center text-lg-right">
                        <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="youtube" href="#"><i class="fa fa-youtube-play"
                                    aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin"
                                    aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="google" href="#"><i class="fa fa-google-plus"
                                    aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="rss" href="#"><i class="fa fa-rss"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                    <!-- // Social -->
                </div>
            </div>

        </div>

    </footer>
    <!-- // Footer -->
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/sticky-sidebar.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>

</html>