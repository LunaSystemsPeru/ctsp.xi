<?php
require '../../models/BancoMovimiento.php';
require '../../models/Banco.php';

$banco = new Banco();
$movimiento = new BancoMovimiento();

$banco->setIdBanco(filter_input(INPUT_GET, 'idbanco'));
$banco->obtenerDatos();

$periodo = date("Y-m");

if (filter_input(INPUT_GET, 'periodo')) {
    $periodo = filter_input(INPUT_GET, 'periodo');
    //echo $periodo;
}

$movimiento->setIdBanco($banco->getIdBanco());
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Movimiento de Cajas - Bancos | Sistema de Gestion - CTSP Region XI Ancash </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../public/images/favicon.png">
    <!-- Datatable -->
    <link href="../../public/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="../../public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../../public/css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.12.7/dist/sweetalert2.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.12.7/dist/sweetalert2.css">

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
        <a href="index.html" class="brand-logo">
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
                        <!--<h4>Hi, welcome back!</h4>-->
                        <span class="ml-1">Movimiento de Cajas | <?php echo $banco->getNombre() ?></span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">CTSP XI</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Caja</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ver Movimiento de Cajas - Bancos
                                | <?php echo $banco->getNombre() ?></h4>
                            <button class="btn btn-facebook" data-toggle="modal" data-target="#basicModal">
                                <i class="fa fa-plus"></i> Agregar Movimiento <i class="fa fa-dollar"></i>
                            </button>

                            <div class="col-lg-3">
                                <label>Sel. Periodo</label>
                                <select class="form-control" name="select_periodo" id="select_periodo"
                                        onchange="obtenerPeriodo()">
                                    <option value="">Select Periodo</option>
                                    <?php
                                    $aperiodos = $movimiento->verPeriodos($year);
                                    foreach ($aperiodos as $fila) {
                                        ?>
                                        <option value="<?php echo $fila['periodo'] ?>"><?php echo $fila['periodo'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="modal fade" id="basicModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form method="post" action="../controller/banco_movimiento.php">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Agregar Movimiento</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Fecha</label>
                                                        <input type="date" class="form-control" name="input_fecha"
                                                               value="<?php echo date("Y-m-d") ?>">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Tipo</label>
                                                        <select class="form-control" name="select_tipo">
                                                            <option value="i">Ingresa</option>
                                                            <option value="s">Sale</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Descripcion</label>
                                                        <input type="text" class="form-control"
                                                               placeholder="Descripcion Movimiento"
                                                               name="input_descripcion">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Monto</label>
                                                        <input type="text" class="form-control text-right"
                                                               placeholder="0.00" name="input_monto">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" value="<?php echo $banco->getIdBanco() ?>"
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
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table-bordered" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Fecha</th>
                                        <th width="40%">Descripcion</th>
                                        <th>Ingresa</th>
                                        <th>Sale</th>
                                        <th>Saldo</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $amovimiento = $movimiento->verFilas($periodo);
                                    $item = 2;
                                    $year = substr($periodo, 0, 4);
                                    $month = substr($periodo, 5, 2);
                                    $saldo = $movimiento->obtenerSaldo($year, $month);
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo "1" ?></td>
                                        <td class="text-center"><?php echo $year . "-" . $month . '-01' ?></td>
                                        <td><?php echo "SALDO DEL MES ANTERIOR" ?></td>
                                        <td class="text-right"><?php echo number_format($saldo, 2) ?></td>
                                        <td class="text-right"><?php echo number_format(0, 2) ?></td>
                                        <td class="text-right"><?php echo number_format($saldo, 2) ?></td>
                                        <td class="text-center">
                                            <button class="btn btn-danger text-white">
                                                <i class="fa fa-trash"></i> Eliminar
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                                    foreach ($amovimiento as $fila) {
                                        $ingresa = $fila['ingresa'];
                                        $sale = $fila['sale'];
                                        $saldo += ($ingresa - $sale);
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $item ?></td>
                                            <td class="text-center"><?php echo $fila['fecha'] ?></td>
                                            <td><?php echo $fila['concepto'] ?></td>
                                            <td class="text-right"><?php echo number_format($ingresa, 2) ?></td>
                                            <td class="text-right"><?php echo number_format($sale, 2) ?></td>
                                            <td class="text-right"><?php echo number_format($saldo, 2) ?></td>
                                            <td class="text-center">
                                                <button class="btn btn-danger text-white">
                                                    <i class="fa fa-trash"></i> Eliminar
                                                </button>
                                            </td>
                                        </tr>
                                        <?php
                                        $item++;
                                    }
                                    ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Item</th>
                                        <th>Fecha</th>
                                        <th>Descripcion</th>
                                        <th>Ingresa</th>
                                        <th>Sale</th>
                                        <th>Saldo</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </tfoot>
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

<script>
    function obtenerPeriodo() {
        var selperiodo = $("#select_periodo").val();
        var selidbanco = $("#hidden_banco").val();
        //enviar variables obtenidas al controlador
        window.location = "ver_banco_movimiento.php?periodo=" + selperiodo + "&idbanco=" + selidbanco;
    }

    function eliminarMovimiento () {

    }


</script>


</body>


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
</html>