<?php
//DESTRUIR LA SESION DE UN USUARIO LOGEADO AL MOMENTO DE CERRAR SESION
/*session_start();*/

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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800|Poppins:300i,400,300,700,400i,500|Ubuntu:300i,400,300,700,400i,500|Raleway:400,500,600,700" rel="stylesheet">
    <!-- CSS Files -->


    <!-- Owl Carousel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/travlez-jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">


    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>


</head>

<body>
    <!-- Header  -->
    <header class="background-white">
        <div class="background-main-color padding-tb-5px">
            <div class="container">
                <div class="row">
                    <div class="col-sm d-none d-sm-block text-white">Modern Creative Website ....</div>
                    <div class="col-sm">
                        <ul class="list-inline text-center margin-0px text-white">
                            <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        </ul>
                        <!-- // Social -->
                    </div>
                    <div class="col-sm d-none d-sm-block">
                    <li class="nav-item dropdown">
                    <ul class="user-area list-inline float-right margin-0px text-white">
                            <li class="list-inline-item  padding-right-10px"><?php
                        /*echo $_SESSION["nombres"] . " " . $_SESSION["apellidos"];*/
                        ?></li>
                     
                
                        <ul class="user-area list-inline float-right margin-0px text-white">
                            <li class="list-inline-item  padding-right-10px"><a href="page-login-2.php"><i class="fa fa-lock padding-right-5px"></i>login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="fixed-header" class="header-output background-white box-shadow">
            <div class="container header-in">
                <div class="row">
                    <div class="col-lg-3">
                        <a id="logo" href="index.html" class="d-inline-block margin-tb-10px"><img src="images/logo.png" alt=""></a>
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
                                    <li class="has-dropdown"><a href="#">Gestión de cuenta</a>
                                        <ul class="sub-menu">
                                            <li><a href="header-layout-1.html">Modificar contraseña</a></li>
                                            <li><a href="header-layout-2.html">Modificar correo electroncio</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-dropdown"><a href="inicio-ruta.php">Control de Cupos</a>


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

    <!-- Page title --->
    <section class="background-grey-1 padding-tb-35px text-grey-4">
        <div class="container">
            <h4 class="font-weight-300 text-uppercase float-left font-2" style=" color: #1db8c1">Bienvenido a Busy</h4>
            <ol class="breadcrumb z-index-2 position-relative no-background padding-tb-10px padding-lr-0px  margin-0px float-md-right">
                <li><a href="#" class="text-grey-4">Inicio</a></li>
                <li class="active">Perfil</li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- // Page title --->


    <!-- page output -->
    <div class="margin-tb-40px">
        <div class="container">
            <p>
                Bienvenido, Desde aquí podrá monitorear y modificar los cupos disponibles en su vehículo 
                
            </p>
            <br><br><br><br><br><br>
            <p>Si tiene algun problema comuniquese con nosotros y con gusto le ayudaremos.</p>
            <div class="col-3"><a href="#" class="btn btn-md border-2 border-radius-0 btn-info btn-block">Necesito ayuda</a></div>
           
        </div>
    </div>
    <!-- //  page output -->


    <!-- // Instgram Feed -->


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row padding-tb-100px">
                <div class="col-lg-6">
                    <div class="about">
                        <div class="logo margin-bottom-20px"><a href="#"><img src="images/logo.png" alt=""></a></div>
                        <p class="text-grey-2">
                            Mauris fermentum porta sem, non hendrerit enim bibendum consectetur. Fusce diam est, porttitor vehicula gravida at, accumsan bibendum tincidunt imperdiet. Maecenas quis magna faucibus, varius ante sit amet, varius augue. Praesent aliquam, a imperdiet lacus libero ac tellus. Nunc fringilla ullamcorper quam at lacinia.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <ul class="footer-menu row margin-0px padding-0px list-unstyled">
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Home</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Featured</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Feedback</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Ask a Question</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Team</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Maintenance</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Get a Quote</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Contact Us</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Alerts messages</a></li>
                    </ul>
                </div>
                

        </div>

    </footer>
    <!-- // Footer -->
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>

</html>