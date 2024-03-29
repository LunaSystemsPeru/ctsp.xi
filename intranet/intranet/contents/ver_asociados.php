<?php
require '../../models/Asociado.php';
require '../../tools/Util.php';
$asociado = new Asociado();
$util = new Util();
?>

<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Asociados | Sistema de Gestion - CTSP Region XI Ancash </title>
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
                        <h4>Listar Asociados</h4>
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
                            <h4 class="card-title">Asociados</h4>
                            <!--<a href="reg_asociado.php" class="btn btn-facebook"> <i class="fa fa-plus"></i> Agregar</a>-->
                        </div>
                        <div class="card-body">
                            <div class="">
                                <table id="example2" class="table-striped" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Apellidos y Nombres</th>
                                        <th>Trabajo</th>
                                        <th>Edad</th>
                                        <th>Fecha Afiliacion</th>
                                        <th>Ultimo Pago</th>
                                        <th>Condicion</th>
                                        <th>Tipo</th>
                                        <th width="13%">Estado</th>
                                        <th width="13%">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $asociado->setEstado(1);
                                    $aasociados = $asociado->verAsociados();
                                    $labelnuevo = '<label class="label label-primary">Nuevo</label>';
                                    $labeltraslado = '<label class="label label-default">Traslado</label>';
                                    $label = "";
                                    foreach ($aasociados as $fila) {
                                        $label_estado = '<label class="label label-success">Activo</label>';
                                        if ($fila['id_tipo_inscripcion'] == 4) {
                                            $label = $labelnuevo;
                                        } else {
                                            $label = $labeltraslado;
                                        }
                                        $ultimo_pago = $fila['ultimo_pago'];
                                        $fecha_sumada= $util->SumaDias($fila['ultimo_pago'], 183);

                                        $fecha_actual = strtotime(date("Y-m-d"));
                                        $fecha_pago = strtotime($fecha_sumada);

                                        $label_actividad = '<label class="label label-success">'.$fila['tactividad'].'</label>';
                                        if ($fila['id_tipo_actividad'] != 12) {
                                            $label_actividad = '<label class="label label-info">'.$fila['tactividad'].'</label>';
                                        }

                                        if ($fecha_pago < $fecha_actual) {
                                            $label_estado = '<label class="label label-danger"> No Habilitado</label>';
                                        }

                                        if ($fecha_pago > $fecha_actual) {
                                            $label_estado = '<label class="label label-success">Habilitado</label>';
                                        }

                                        $edad = $util->calculaEdad($fila['fecha_nac']);
                                        ?>
                                        <tr>
                                            <td><?php echo $fila['apellidos'] . " " . $fila['nombres'] ?></td>
                                            <td><?php echo $fila['centro_trabajo'] ?></td>
                                            <td><?php echo $edad ?></td>
                                            <td><?php echo $fila['fecha_inscripcion'] ?></td>
                                            <td class="text-center"><?php echo $util->fecha_periodo($fila['ultimo_pago']) ?></td>
                                            <td class="text-center"><?php echo $label ?></td>
                                            <td class="text-center"><?php echo $label_actividad ?></td>
                                            <td class="text-center"><?php echo $label_estado?></td>
                                            <td>
                                                <a href="det_asociado.php?idasociado=<?php echo $fila['id_asociado'] ?>" class="btn btn-success btn-xs" title="Permisos"><i
                                                            class="fa fa-user"></i></a>
                                                <button type="button" class="btn btn-warning btn-xs" title="Eliminar"><i
                                                            class="fa fa-trash"></i></button>
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
</body>


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
</html>