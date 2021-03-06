<?php
require 'intranet/models/Evento.php';
require 'intranet/models/EventoDetalle.php';
$evento = new Evento();
$galeria = new EventoDetalle();
$evento->setIdTipoEvento(11);
$anio=$evento->obtenerUltimoAño();

if (filter_input(INPUT_GET, 'anio')) {
    $anio = filter_input(INPUT_GET, 'anio');
}

$evento->setAnio($anio);
if ($evento->obtenerDatosporTipo()) {
    $evento->obtenerDatos();
} else {
    header("index.php");
}

?>
<!DOCTYPE html>
<html lang="es">

<!-- Mirrored from medico.dexignzone.com/xhtml/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Sep 2020 21:18:50 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta name="robots" content=""/>
    <meta name="description" content=""/>
    <meta property="og:title" content="Colegio de Trabajadores Sociales del Peru - Region XI Ancash"/>
    <meta property="og:description"
          content="Comunicados del Colegio de Trabajadores Sociales del Peru - Region XI Ancash"/>
    <meta property="og:image" content=""/>
    <meta name="format-detection" content="telephone=no">
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"/>

    <!-- PAGE TITLE HERE -->
    <title>FIESTAS NAVIDEÑAS Y AÑO NUEVO | Colegio de Trabajadores Sociales del Peru - Region XI Ancash</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="css/plugins.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="plugins/themify/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
    <link rel="stylesheet" type="text/css" href="css/templete.min.css">

    <script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>


    <style>
        @import url('https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|PT+Serif:400,400i,700,700i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Slab:100,300,400,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i');
    </style>

</head>
<body id="bg">

<div id="loading-area"></div>
<div class="page-scroll"></div>
<div class="page-wraper">
    <!-- header -->
    <?php include 'fixed/header.php' ?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">

        <!-- About Company -->
        <!-- Our Awesome Services section-full bg-white content-inner -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center section-head">
                        <h3 class="h3"> FIESTA NAVIDEÑA Y FIN DE AÑO</h3>
                        <div class="dez-separator bg-primary"></div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center section-head">
                        <a href="archivos/eventos/<?php echo $evento->getPrograma() ?>" target="_blank"
                           class="site-button">Descargar Programa Aqui</a></div>

                </div>
                <div class="section-content ">
                    <div class="row">
                        <div class="col-lg-12 p-lr0 text-center">
                            <iframe width="400" height="315" src="https://www.youtube.com/embed/<?php echo $evento->getVideo()?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <br>

            </div>

            <div class="blog-page-content full-blog-dark style-2 style-3">
                <div class="row m-lr0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-tb20">
                        <div id="masonry"
                             class="row m-lr0 dez-blog-grid-3 dez-gallery-listing gallery-grid-4 gallery mfp-gallery">
                            <?php
                            $galeria->setIdevento($evento->getId());
                            $agaleria = $galeria->verImagenes();
                            foreach ($agaleria as $fila) {
                                ?>
                                <div class="post card-container col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="dez-box dez-gallery-box m-b0">
                                        <div class="dez-media dez-img-overlay11 dez-img-effect zoom-slow"><a
                                                    href="javascript:void(0);"> <img
                                                        src="archivos/eventos/imagenes/<?php echo $fila['imagen'] ?>" alt=""> </a>
                                            <div class="overlay-bx overlay-primary-dark">
                                                <div class="overlay-icon z-index2"><a
                                                            href="archivos/eventos/imagenes/<?php echo $fila['imagen'] ?>" class="mfp-link"
                                                            title="Dia del Trabajador Social"> <i
                                                                class="fa fa-picture-o icon-bx-xs"></i> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<?php include 'fixed/footer.php' ?>
<!-- Footer END-->
<!-- scroll top button -->
<button class="scroltop fa fa-chevron-up"></button>
</div>
<!-- JavaScript  files ========================================= -->
<script src="js/combining.js"></script><!-- COMBINING JS  -->
<!-- revolution JS FILES -->
<script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/rev.slider.js"></script>
<script>
    jQuery(document).ready(function () {
        'use strict';
        dz_rev_slider_5();
    });	/*ready*/
</script>
</body>


</html>