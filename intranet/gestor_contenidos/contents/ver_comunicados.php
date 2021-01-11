<?php
require '../../models/Comunicados.php';
$comunicado = new Comunicado();
?>
<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Comunicados | Sistema de Gestion - CTSP Region XI Ancash </title>
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
                        <h4>Listar Comunicados</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">SG</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Comunicados</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <button type="submit" class="btn btn-facebook" data-toggle="modal" data-target=".bd-example-modal-lg"> <i class="fa fa-plus"></i> Agregar</button>
                            <div class="form-group">
                                <label>Buscar Mes</label>
                                <select>
                                    <option>2020-11</option>
                                    <option>2020-11</option>
                                    <option>2020-11</option>
                                    <option>2020-11</option>
                                </select>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Fecha</th>
                                        <th>Comunicado</th>
                                        <th width="12%">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $acomunicados = $comunicado->verComunicados();
                                    $itemnro= 0;
                                    foreach ($acomunicados as $item) {
                                        $itemnro++;
                                        ?>
                                        <tr>
                                            <td><?PHP echo $itemnro ?></td>
                                            <td><?PHP echo $item["fecha"] ?></td>
                                            <td><?PHP echo $item["titulo"] ?></td>
                                            <td>
                                                <a href="#" class="btn btn-facebook btn-sm" title="Editar"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm" title="Eliminar"><i class="fa fa-trash"></i></a>
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

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form method="POST" action="../controller/comunicados.php" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title">Agregar Comunicado</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="basic-form">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label>Titulo Comunicado</label>
                                            <input type="text" class="form-control" name="input_titulo" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Fecha</label>
                                            <input type="date" class="form-control" name="input_fecha" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Imagen</label>
                                            <input type="file" class="form-control" name='input_archivo' id="input_archivo" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
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


</body>


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
</html>