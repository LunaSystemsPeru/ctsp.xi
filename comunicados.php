<?php
require 'intranet/models/Comunicados.php';
$comunicado = new Comunicado();

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
    <meta property="og:description" content="Comunicados del Colegio de Trabajadores Sociales del Peru - Region XI Ancash"/>
    <meta property="og:image" content=""/>
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"/>

    <!-- PAGE TITLE HERE -->
    <title>Comunicados | Colegio de Trabajadores Sociales del Peru - Region XI Ancash</title>

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
        <!-- Our Awesome Services -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center section-head">
                        <h3 class="h3"> Comunicados</h3>
                        <div class="dez-separator bg-primary"></div>

                    </div>
                </div>

                <div class="section-content ">
                    <div class="row">
                        <div class="col-lg-12 p-lr0">
                            <!-- blog grid -->
                            <div id="masonry" class="dez-blog-grid-4">
                                <div>
                                    <ul id="masonry" class="dez-gallery-listing gallery-grid-4 mfp-gallery m-b0">
                                        <?php
                                        $acomunicados = $comunicado->verComunicados();
                                        foreach ($acomunicados as $item) {
                                            $imagen = $item['imagen'];
                                            $extesion = explode(".", $imagen);
                                            $extesionfinal = $extesion[1];
                                            if ($extesionfinal == "pdf") {
                                                $imagen = "logopdf.jpeg";
                                                ?>
                                                <li class="card-container col-lg-2 col-md-6 col-sm-6 m-b30 home">
                                                    <a href="javascript:void(0);" onclick="cargarArchivo('<?php echo $item['imagen'] ?>')">
                                                    <div class="">
                                                        <img src="images/comunicados/<?php echo $imagen ?>" alt="">
                                                    </div>
                                                    <div class="dez-post-info">
                                                        <div class="dez-post-title ">
                                                            <h3 class="post-title"><?php echo $item['titulo'] ?></h3>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </li>

                                                <?php
                                            } else {
                                                ?>
                                                <li class="card-container col-lg-2 col-md-6 col-sm-6 m-b30 home">
                                                    <div class="dez-box  dez-gallery-bx">
                                                        <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom-slow"><a href="javascript:void(0);"> <img src="images/comunicados/<?php echo $imagen ?>" alt=""> </a>
                                                            <div class="overlay-bx">
                                                                <div class="overlay-icon">
                                                                    <a href="images/comunicados/<?php echo $imagen ?>" class="mfp-link" title="<?php echo $item['titulo'] ?>">
                                                                        <i class="fa fa-picture-o icon-bx-xs"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dez-post-info">
                                                        <div class="dez-post-title ">
                                                            <h3 class="post-title"><?php echo $item['titulo'] ?></h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php
                                            }
                                        }
                                        ?>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- -->
                <div class="modal fade" id="basicModal">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Ver Comunicado </h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <embed src="images/comunicados/logopdf.jpeg" id="embedPDF" width="100%" height="500px" >
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
    function cargarArchivo (archivo) {
        $("#basicModal").modal("toggle");
        $("#embedPDF").attr("src", "images/comunicados/" + archivo)
    }
</script>
<script>
    jQuery(document).ready(function () {
        'use strict';
        dz_rev_slider_5();
    });
</script>
</body>

<!-- Mirrored from medico.dexignzone.com/xhtml/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Sep 2020 21:19:49 GMT -->
</html>