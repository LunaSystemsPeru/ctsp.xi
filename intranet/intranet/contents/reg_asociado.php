<?php
require '../../models/Asociado.php';
require '../../models/ParametrosDetalle.php';

$asociado = new Asociado();
$detalle = new ParametrosDetalle();
?>

<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Asociado | Sistema de Gestion - CTSP Region XI Ancash </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Datatable -->
    <link href="../public/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="../public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">

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
                        <h4>Agregar Asociado</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">SG</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Asociados</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form METHOD="post" action="../controller/asociado.php" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label>Tipo Documento</label>
                                            <select class="form-control" name="select_tipo_documento">
                                                <?php
                                                $detalle->setIdParametro(3);
                                                $adocumentos = $detalle->verFilas();
                                                foreach ($adocumentos as $fila) {
                                                    echo "<option value='".$fila['id_detalle']."'>".$fila['nombre']."</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Nro Doc</label>
                                            <input type="text" class="form-control" name="input_dni" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Apellidos</label>
                                            <input type="text" class="form-control" name="input_apellidos" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Nombres</label>
                                            <input type="text" class="form-control" name="input_nombres" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Tipo Inscripcion</label>
                                            <select class="form-control" name="select_tipo_inscripcion">
                                                <?php
                                                $detalle->setIdParametro(4);
                                                $ainscripcion = $detalle->verFilas();
                                                foreach ($ainscripcion as $fila) {
                                                    echo "<option value='".$fila['id_detalle']."'>".$fila['nombre']."</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="correo@correo.com" name="input_email" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Nro Celular</label>
                                            <input type="text" class="form-control" name="input_celular" maxlength="9" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Domicilio Actual</label>
                                            <input type="text" class="form-control" name="input_domicilio" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Fecha Nacimiento</label>
                                            <input type="date" class="form-control" name="input_fec_nac" required>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <label>Centro Trabajo Actual</label>
                                            <input type="text" class="form-control" name="input_trabajo">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4" >
                                            <div id="preview">
                                                <img src="../../public/images/profile/pic1.jpg" class="col-lg-12" id="img_perfil">
                                            </div>

                                            <div>
                                                <input type="file" name="input_file_perfil" id="input_file_perfil" required accept="image/jpeg" >
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form-group col-md-12">
                                                <label>Ficha Inscripcion</label>
                                                <input type="file" class="form-control" name="file_ficha_inscripcion" required accept="application/pdf">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Titulo scan</label>
                                                <input type="file" class="form-control" name="file_titulo" required accept="application/pdf">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Certificado SUNEDU</label>
                                                <input type="file" class="form-control" name="file_sunedu" required accept="application/pdf">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>
                            </div>
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
    document.getElementById("input_file_perfil").onchange = function(e) {
        var file = this.files[0];
        var imagefile = file.type;
        var match = ["image/jpeg", "image/png", "image/jpg"];
        if (!((imagefile == match[0]) || (imagefile == match[1]) || (imagefile == match[2]))) {
            $('#img_perfil').attr('src', 'noimage.png');
            return false;
        } else {
            var reader = new FileReader();
            reader.onload = imageIsLoaded_lado1;
            reader.readAsDataURL(this.files[0]);
        }

    }

    function imageIsLoaded_lado1(e) {
        //$("#file_lado1").css("color", "green");
        //$('#image_preview_lado1').css("display", "block");
        $('#img_perfil').attr('src', e.target.result);
        $('#img_perfil').attr('width', '100%');
        //$('#previewing').attr('height', '300px');
    }
</script>
</body>


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
</html>