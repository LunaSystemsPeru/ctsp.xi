<?php
require '../../models/Noticias.php';
require '../../models/NoticiaImagen.php';

$noticia = new noticias();
$galeria = new NoticiaImagen();

$noticia->setIdnoticias(filter_input(INPUT_GET, 'idnoticia'));

if (!$noticia->getIdnoticias()) {
    header("Location: ../contents/ver_noticias.php");
}

$noticia->obtenerDatos();

$galeria->setIdnoticia($noticia->getIdnoticias());



?>
<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Modificar Evento | Sistema de Gestion - CTSP Region XI Ancash </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../public/images/favicon.png">
    <!-- Datatable -->
    <link href="../../public/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="../../public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../../public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/vendor/trumbowyg/dist/ui/trumbowyg.min.css">
    <link rel="stylesheet" href="../../public/js/prettyimg/jpreview.css">

</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="index.php" class="brand-logo">
            <img class="logo-compact" src="../../public/images/logo-text-white.png" alt="" height="50px">
            <img class="brand-title" src="../../public/images/logo-text-white.png" alt="" height="50px">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <?php include '../fixed/header.php' ?>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <?php include '../fixed/sidebar.php' ?>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Listar Eventos</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">SG</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Eventos</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form method="POST" action="../controller/edt_noticia.php" enctype="multipart/form-data">
                        <div class="card-header">
                            <h4 class="card-title">Editar datos del Evento</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Titulo Evento</label>
                                        <input type="text" class="form-control" value="<?php echo $noticia->getTitulo()?>" name="input_titulo" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Fecha</label>
                                        <input type="date" class="form-control" value="<?php echo $noticia->getFecha()?>" name="input_fecha" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Contenido</label>
                                        <textarea name="input_contenido" id="trumbowyg-demo" class="wysiwyg-editor" style="width: 100%">
                                            <?php echo $noticia->getContenido()?>
                                        </textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Guardar
                                </button>
                            </div>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    <?php include '../fixed/footer.php' ?>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../../public/vendor/global/global.min.js"></script>
<script src="../../public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="../../public/js/deznav-init.js"></script>
<script src="../../public/js/custom.min.js"></script>

<!-- Svganimation scripts -->
<script src="../../public/vendor/svganimation/vivus.min.js"></script>
<script src="../../public/vendor/svganimation/svg.animation.js"></script>
<script src="../../public/vendor/trumbowyg/dist/trumbowyg.min.js"></script>

<script src="../../public/js/prettyimg/bootstrap-prettyfile.js"></script>
<script src="../../public/js/prettyimg/jpreview.js"></script>

<script>
    $(window).on("load",function(){

        $(function () {
            $('#trumbowyg-demo').trumbowyg();
            $('#inputPretty').prettyFile();
            $('.demo').jPreview();

            $('#input_imagen').change(function (e) {
                addImage(e);
            });

            function addImage(e) {
                var file = e.target.files[0],
                    imageType = /image.*/;

                if (!file.type.match(imageType))
                    return;

                var reader = new FileReader();
                reader.onload = fileOnload;
                reader.readAsDataURL(file);
            }

            function fileOnload(e) {
                var result = e.target.result;
                $('#imgSalida').attr("src", result);
            }
        });
    });
</script>
</body>


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
</html>
