<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Pago de Cuotas | Sistema de Gestion - CTSP Region XI Ancash </title>
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
                        <h4>Pago de Cuotas</h4>
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
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label>Buscar por</label>
                                            <select class="form-control">
                                                <option>Nro Colegiatura</option>
                                                <option>Nro DNI</option>
                                                <option>Nro Carnet Extranjeria</option>
                                                <option>Nro Cedula Identidad</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Numero</label>
                                            <input type="text" class="form-control" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group col-md-7">
                                            <label>o escriba los Datos del colegiado y luego clic en la sugerencia</label>
                                            <input type="text" class="form-control" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label>Cargar datos</label>
                                            <button type="button" class="btn btn-primary" ><i class="fa fa-search"></i> Buscar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label>Nro Colegiatura</label>
                                            <input type="text" class="form-control" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Nro Doc</label>
                                            <input type="text" class="form-control" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Apellidos</label>
                                            <input type="text" class="form-control" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Nombres</label>
                                            <input type="text" class="form-control" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Domicilio Actual</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Fecha Nacimiento</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="form-group col-md-9">
                                            <label>Centro Trabajo Actual</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-tittle">Antecedentes</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="table-responsive">
                                    <table class="table " style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Fecha</th>
                                                <th>Monto</th>
                                                <th>Nro Meses</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">2020-10-04</td>
                                                <td class="text-right">S/ 30.00</td>
                                                <td class="text-right">3</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2020-07-05</td>
                                                <td class="text-right">S/ 30.00</td>
                                                <td class="text-right">3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label>Cuotas Pendientes</label>
                                            <input type="text" class="form-control" placeholder="" disabled>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Fecha Pago</label>
                                            <input type="date" class="form-control" placeholder="" disabled>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Nro Cuotas a Pagar</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Monto Total</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Destino</label>
                                            <select class="form-control">
                                                <option>Banco</option>
                                                <option>Caja Efectivo</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Nro Operacion</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
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
</body>


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
</html>