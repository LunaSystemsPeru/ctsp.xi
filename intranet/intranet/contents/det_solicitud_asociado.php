<?php
require '../../models/Asociado.php';
require '../../models/ParametrosDetalle.php';
require '../../tools/Util.php';

$asociado = new Asociado();
$detalle = new ParametrosDetalle();

$util = new Util();

$asociado->setIdAsociado(filter_input(INPUT_GET, 'idasociado'));
$asociado->obtenerDatos();

$detalle->setIdDetalle($asociado->getTipoDocumento());
$detalle->obtenerDatos();
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
                                <img src="../../../images/asociados/perfil/<?php echo $asociado->getFoto() ?>" width="100" class="img-fluid rounded-circle" alt="">
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
                                <h4 class="m-0 text-white"><i class="fa fa-bell-o"></i> Modificar Datos</h4>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Documentos Entregados</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <table class="table table-striped table-responsive-sm">
                                    <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Nombre</th>
                                        <th width="16%">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>FICHA DE INSCRIPCION</td>
                                        <td>
                                            <button type="button" class="btn btn-info"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-success" onclick="verArchivos('../../../images/asociados/ficha_inscripcion/<?php echo $asociado->getFichaInscripcion()?>')"><i class="fa fa-eye"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>TITULO ORIGINAL</td>
                                        <td>
                                            <button type="button" class="btn btn-info"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-success" onclick="verArchivos('../../../images/asociados/ficha_inscripcion/<?php echo $asociado->getTitulo()?>')"><i class="fa fa-eye"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>REGISTRO A SUNEDU</td>
                                        <td>
                                            <button type="button" class="btn btn-info"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-success" onclick="verArchivos('../../../images/asociados/ficha_inscripcion/<?php echo $asociado->getRegistroSunedu()?>')"><i class="fa fa-eye"></i></button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="basicModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Vista Previa de Archivo</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <embed height="500px" id="embed_pdfasociada">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3>Finalizar Aprobacion</h3>
                        </div>
                        <div class="card-body">
                            <form METHOD="post" action="../controller/aprobarColegiatura.php">
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label>Codigo CTSP</label>
                                        <input type="hidden" name="hidden_idasociado" value="<?php echo $asociado->getIdAsociado()?>">
                                        <input type="text" class="form-control" name="input_codigoctsp" required>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label>Fecha Aprobacion</label>
                                        <input type="date" class="form-control" name="input_fecha_aprovacion" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button class="btn btn-success"><i class="fa fa-check"> </i> Aprobar Solicitud</button>
                                </div>
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


    function verArchivos (archivo) {
        var archivo = archivo;
        $("#basicModal").modal('toggle');
        $("#embed_pdfasociada").prop("src", archivo);
    }
</script>
</body>


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
</html>