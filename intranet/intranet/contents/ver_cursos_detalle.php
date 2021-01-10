<?php
require '../../models/CursosParticipante.php';
require '../../models/Curso.php';
$curso = new Curso();
$participante = new CursosParticipante();

$curso->setIdCurso(filter_input(INPUT_GET, 'idcurso'));
$curso->obtenerDatos();

$participante->setIdCurso($curso->getIdCurso());
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
                        <h4>Hi, welcome back!</h4>
                        <span class="ml-1">Datatable</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Colegiatura</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Cursos</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <a href="reg_curso.php" class="btn btn-facebook"> <i class="fa fa-plus"></i> Agregar Participante</a>
                            <a href="#" class="btn btn-success"> <i class="fa fa-plus"></i> Excel Participantes</a>
                            <button class="btn btn-success"> <i class="fa fa-plus"></i> </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Celular</th>
                                        <th>Estado</th>
                                        <th width="18%">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $aparticipantes = $participante->verParticipantes();
                                    foreach ($aparticipantes as $fila) {
                                        $estado = $fila['verificado'];
                                        $label_estado = '<label class="label label-warning">Por Verificar</label>';
                                        if ($estado == 1) {
                                            $label_estado = '<label class="label label-success">Verificado</label>';
                                        }
                                        ?>
                                        <tr>
                                            <td><?php echo $fila['id_participante'] ?></td>
                                            <td><?php echo $fila['apellidos'] . " " . $fila['nombres'] ?></td>
                                            <td><?php echo $fila['email'] ?></td>
                                            <td><?php echo $fila['celular'] ?></td>
                                            <td><?php echo $label_estado?></td>
                                            <td>
                                                <a href="#" class="btn btn-facebook" title="Cobrar"><i class="fa fa-dollar"></i></a>
                                                <a href="#" class="btn btn-danger" title="Eliminar"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>


                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Item</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Celular</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Detalle del Curso</h4>
                        </div>
                        <div class="card-body">
                            <h2 class="m-b10 font-weight-500 "><?php echo $curso->getNombre() ?></h2>
                            <div class="p-a30 port-info-box bg-gray radius-sm">
                                <h5>Profesor: <span
                                            class="m-l10 font-weight-300 text-black"> <?php echo $curso->getProfesor() ?></span>
                                </h5>
                                <h5>Via Ponencia: <span
                                            class="m-l10 font-weight-300 text-black"> <?php echo $curso->getLugar() ?></span>
                                </h5>
                                <h5>Fecha: <span
                                            class="m-l10 font-weight-300 text-black"> <?php echo $curso->getFecha() ?></span>
                                </h5>
                                <h5>Monto: <span
                                            class="m-l10 font-weight-300 text-black"><?php echo $curso->getMonto() ?></span>
                                </h5>
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