<?php
session_start();
require '../../tools/Util.php';
require '../../models/Asociado.php';
require '../../models/SolicitudHabilidad.php';
$asociado = new Asociado();
$habilidad = new SolicitudHabilidad();
$util = new Util();

$asociado->setIdAsociado($_SESSION['idasociado']);
$asociado->obtenerDatos();

$habilidad->setIdAsociado($asociado->getIdAsociado());

?>

<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Solicitudes de Constancia de Habilitado | Sistema de Gestion - CTSP Region XI Ancash </title>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Solicitud de Constancias</h4>
                            <button type="button" data-toggle="modal" data-target="#basicModal" class="btn btn-facebook"><i class="fa fa-plus"></i> Agregar</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="display" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Fecha Solicitud</th>
                                        <th>Apellidos y Nombres</th>
                                        <th>Ultimo Per Pagado</th>
                                        <th>Monto Pagado</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $asolicitudes = $habilidad->verSolicitudesAsociado();
                                    $nrofila = 0;
                                    foreach ($asolicitudes as $item) {
                                        $label_estado = '<label class="label label-success">Pendiente</label>';
                                        $nrofila++;
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $nrofila?></td>
                                            <td class="text-center"><?php echo $item['fecha_solicitud'] ?></td>
                                            <td><?php echo $item['apellidos'] . " " . $item['nombres'] ?></td>
                                            <td class="text-center"><?php echo $item['fecha_ultimo_pago'] ?></td>
                                            <td class="text-right">S/ <?php echo number_format($item['pago'],2) ?></td>
                                            <td><?php echo $label_estado ?></td>
                                            <td>
                                                <a href="../../reports/rptConstanciaHabilidad.php?idSolicitud=<?php echo $item['id_solicitud'] ?>" class="btn btn-warning btn-xs" title="Descargar Constancia"><i class="fa fa-download"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="basicModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="post" action="../controller/solicitud_constancia.php">
                            <div class="modal-header">
                                <h5 class="modal-title">Solicitar Constancia de Habilitacion</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Mis Datos</label>
                                        <input type="text" class="form-control" name="inputDatos"
                                               value="<?php echo $asociado->getApellido() . " " . $asociado->getNombre() ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nro CTSP:</label>
                                        <input type="text" class="form-control" name="inputCTSP"
                                               value="<?php echo $asociado->getCtsp() ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="inputEmail"
                                               value="<?php echo $asociado->getEmail() ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Ultimo Periodo Pagado</label>
                                        <input type="text" class="form-control" name="inputPeriodo"
                                               value="<?php echo $asociado->getUltimoPago() ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Fecha</label>
                                        <input type="date" class="form-control" name="input_fecha"
                                               value="<?php echo date("Y-m-d") ?>" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Voucher</label>
                                        <input type="file" class="form-control"
                                               name="input_voucher" accept="image/jpeg, image/png" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Monto</label>
                                        <input type="text" class="form-control text-right"
                                               value="30.00" name="input_monto" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" value="<?php echo $asociado->getIdAsociado() ?>"
                                       name="hidden_asociado" id="hidden_asociado">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Cerrar
                                </button>
                                <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
                            </div>
                        </form>
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