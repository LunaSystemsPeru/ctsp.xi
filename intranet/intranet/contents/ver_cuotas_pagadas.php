<?php
require '../../models/Cuota.php';
require '../../tools/Util.php';
$cuota = new Cuota();
$util = new Util();
?>

<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Cuotas Pagadas | Sistema de Gestion - CTSP Region XI Ancash </title>
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
                        <h4>Listar Cuotas</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">SG</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Cuotas</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Cuotas</h4>
                            <!--<a href="reg_asociado.php" class="btn btn-facebook"> <i class="fa fa-plus"></i> Agregar</a>-->
                        </div>
                        <div class="card-body">
                            <div class="">
                                <table id="example2" class="table-striped" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Apellidos y Nombres</th>
                                        <th>Fecha Pago</th>
                                        <th>Per Inicio</th>
                                        <th>Per Fin</th>
                                        <th>Nro Cuotas</th>
                                        <th>Monto</th>
                                        <th>Destino</th>
                                        <th width="13%">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $acuotas = $cuota->verPagosFechas("2021-01-01", "2021-01-31");
                                    $item = 0;
                                    foreach ($acuotas as $fila) {
                                        $periodoinicio = $fila['periodo_inicio'];
                                        if ($periodoinicio == '0000-00-00') {
                                            $periodoinicio = '2000-01-01';
                                        }

                                    $item++;
                                        ?>
                                        <tr>
                                            <td><?php echo $item ?></td>
                                            <td><?php echo $fila['apellidos'] . " " . $fila['nombres'] . " | CTSP N: " . $fila['ctsp'] ?></td>
                                            <td><?php echo $fila['fecha'] ?></td>
                                            <td class="text-center"><?php echo $util->fecha_periodo($periodoinicio) ?></td>
                                            <td class="text-center"><?php echo $util->fecha_periodo($fila['pagado']) ?></td>
                                            <td class="text-center"><?php echo $fila['nrocuotas'] ?></td>
                                            <td class="text-center"><?php echo $fila['monto'] ?></td>
                                            <td class="text-center"><?php echo $fila['nombrebanco'] ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-xs" title="Permisos"><i
                                                            class="fa fa-user"></i></button>
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