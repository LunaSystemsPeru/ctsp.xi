<?php
session_start();
require '../../models/Asociado.php';
require '../../models/ParametrosDetalle.php';
require '../../models/Cuota.php';
require '../../tools/Util.php';

$asociado = new Asociado();
$detalle = new ParametrosDetalle();
$cuota = new Cuota();

$util = new Util();

$asociado->setIdAsociado($_SESSION['idasociado']);
$asociado->obtenerDatos();

$detalle->setIdDetalle($asociado->getTipoDocumento());
$detalle->obtenerDatos();

$cuota->setIdAsociado($asociado->getIdAsociado());

$imagen_perfil = "../../public/images/profile/pic1.jpg";

if ($asociado->getFoto() != "noimage.jpg") {
    $imagen_perfil = "../../../images/asociados/perfil/" . $asociado->getFoto();
}

$titulo =  "../../../images/asociados/titulo/" . $asociado->getTitulo();
$sunedu =  "../../../images/asociados/sunedu/" . $asociado->getRegistroSunedu();
$ficha =  "../../../images/asociados/ficha_inscripcion/" . $asociado->getFichaInscripcion();
?>

<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Perfil del Asociado | Sistema de Gestion - CTSP Region XI Ancash </title>
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
                        <h4>Perfil del Asociado</h4>
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
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-12">
                    <div class="card">
                        <div class="text-center py-4 px-5 overlay-box" style="background-image: url(images/big/img1.jpg);">
                            <div class="profile-photo">
                                <img src="<?php echo $imagen_perfil ?>" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-3 mb-1 text-white"><?php echo $asociado->getNombre() ?></h3>
                            <p class="text-white mb-0"><?php echo $asociado->getApellido() ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Tipo Documento</span> <strong class="text-muted"><?php echo $detalle->getNombre() ?>    </strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Nro Documento</span> <strong class="text-muted"><?php echo $asociado->getDni() ?></strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Fecha Nacimiento</span> <strong class="text-muted"><?php echo $asociado->getFechaNac() ?></strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Edad</span> <strong class="text-muted"><?php echo $util->calculaEdad($asociado->getFechaNac()) ?></strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Nro Celular</span> <strong class="text-muted"><?php echo $asociado->getCelular() ?></strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Email</span> <strong class="text-muted"><?php echo $asociado->getEmail() ?></strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Centro de Trabajo</span> <strong class="text-muted"><?php echo $asociado->getCentroTrabajo() ?></strong></li>
                        </ul>
                        <div class="card-footer border-0 mt-0">
                            <button class="btn btn-primary btn-lg btn-block">
                                <a href="edt_asociado.php?idasociado=<?php echo $asociado->getIdAsociado() ?>"><h4 class="m-0 text-white"><i class="fa fa-bell-o"></i> Modificar Datos</h4></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-8 col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <!--<button class="btn btn-facebook">
                                <i class="fa fa-upload"></i> Modificar Archivos
                            </button>
                            -->
                            <H4 class="card-title">Cuotas Pagadas</H4>
                        </div>
                        <div class="card-body">
                            <table class="table " style="width:100%">
                                <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Monto</th>
                                    <th>Nro Meses</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $acuotas = $cuota->verPagos();
                                foreach ($acuotas as $item) {
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $item['fecha'] ?></td>
                                        <td class="text-right">S/ <?php echo number_format($item['monto'], 2) ?></td>
                                        <td class="text-right"><?php echo $item['nrocuotas'] ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-xxl-8 col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <!--<button class="btn btn-facebook">
                                <i class="fa fa-upload"></i> Modificar Archivos
                            </button>
                            -->
                            <H4 class="card-title">Archivos del Asociado</H4>
                        </div>
                        <div class="card-body">
                            <table class="table " style="width:100%">
                                <thead>
                                <tr>
                                    <th>Archivo</th>
                                    <th>Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>TITULO PROFESIONAL</td>
                                    <td class="text-center">
                                        <a href="<?php echo $titulo?>" target="_blank" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>REGISTRO SUNEDU</td>
                                    <td class="text-center">
                                        <a href="<?php echo $sunedu?>" target="_blank" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>FICHA INSCRIPCION</td>
                                    <td class="text-center">
                                        <a href="<?php echo $ficha?>" target="_blank" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-facebook" type="button" data-toggle="modal" data-target="#basicModal">
                                <i class="fa fa-upload"></i> Modificar Archivos
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="basicModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="post" action="../controller/upt_archivos.php">
                            <div class="modal-header">
                                <h5 class="modal-title">Actualizar Archivos Obligatorios</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="col-lg-8">
                                        <div class="form-group col-md-12">
                                            <label>Ficha Inscripcion</label>
                                            <input type="file" class="form-control" name="file_ficha_inscripcion" accept="application/pdf">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Titulo scan</label>
                                            <input type="file" class="form-control" name="file_titulo" accept="application/pdf">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Certificado SUNEDU</label>
                                            <input type="file" class="form-control" name="file_sunedu" accept="application/pdf">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" value="<?php echo "" ?>"
                                       name="hidden_banco" id="hidden_banco">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Cerrar
                                </button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
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
    document.getElementById("input_file_perfil").onchange = function (e) {
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