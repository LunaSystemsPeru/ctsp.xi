<?php
require '../../models/ParametrosDetalle.php';
$detalle = new ParametrosDetalle();

?>
<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Cursos | Sistema de Gestion - CTSP Region XI Ancash </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../public/images/favicon.png">
    <!-- Datatable -->
    <link href="../../public/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="../../public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../../public/css/style.css" rel="stylesheet">

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
                        <h4>Agregar Curso</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">SG</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Cursos</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form method="post" action="../controller/curso.php" enctype="multipart/form-data">
                            <div class="card-header">

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label>Nombre del curso</label>
                                            <input type="text" class="form-control" name="input_nombre" required>
                                            <input type="hidden" name="action" value="1">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Profesor</label>
                                            <input type="text" class="form-control" name="input_profesor">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Fecha Inicio</label>
                                            <input type="date" class="form-control text-center" name="input_fecha" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Monto Inscripcion</label>
                                            <input type="text" class="form-control text-right" placeholder="0.00" name="input_monto" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Modalidad</label>
                                            <select class="form-control" name="select_modalidad">
                                                <?php
                                                $detalle->setIdParametro(2);
                                                $amodalidad = $detalle->verFilas();
                                                foreach ($amodalidad as $fila) {
                                                    echo "<option value='".$fila['id_detalle']."'>".$fila['nombre']."</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Lugar del Curso O LINK</label>
                                            <input type="text" class="form-control" name="input_lugar" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Imagen</label>
                                            <input type="file" class="form-control" name='input_imagen' id="input_imagen"
                                                   accept="image/jpeg, image/png" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <img id="imgSalida" width="70%" height="70%" src="../../public/images/1.jpg"/>
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Guardar</button>
                                </div>
                        </form>
                    </div>
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
<script src="../../public/vendor/global/global.min.js"></script>
<script src="../../public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="../../public/js/deznav-init.js"></script>
<script src="../../public/js/custom.min.js"></script>


<!-- Datatable -->
<script src="../../public/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="../../public/js/plugins-init/datatables.init.js"></script>

<!-- Svganimation scripts -->
<script src="../../public/vendor/svganimation/vivus.min.js"></script>
<script src="../../public/vendor/svganimation/svg.animation.js"></script>
<script>
    $(window).on("load",function(){

        $(function () {
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