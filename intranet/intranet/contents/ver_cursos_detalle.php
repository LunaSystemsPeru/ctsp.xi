<?php
require '../../models/CursosParticipante.php';
require '../../models/Curso.php';
require '../../models/ParametrosDetalle.php';
$curso = new Curso();
$participante = new CursosParticipante();
$tipo = new ParametrosDetalle();

$curso->setIdCurso(filter_input(INPUT_GET, 'idcurso'));

if (!$curso->getIdCurso()) {
    header("Location: ver_cursos.php");
}
$curso->obtenerDatos();

$tipo->setIdDetalle($curso->getIdModalidad());
$tipo->obtenerDatos();

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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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

            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="m-b10 font-weight-500 "><?php echo $curso->getNombre() ?></h2>
                        </div>
                        <div class="card-header">
                            <a href="reg_curso.php" class="btn btn-facebook"> <i class="fa fa-plus"></i> Agregar Participante</a>
                            <a href="../controller/generar_excel.php?id_curso=<?php echo $curso->getIdCurso()?>" class="btn btn-success"> <i class="fa fa-file-excel-o"></i> Excel Participantes</a>
                            <button class="btn btn-info" data-toggle="modal" data-target="#basicModal"><i class="fa fa-upload"></i> Cargar Link</button>
                            <button class="btn btn-info" onclick="enviarEmail()"><i class="fa fa-send"></i> Enviar Link Masivo</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th width="35%">Nombre</th>
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
                                            <td><?php echo $label_estado ?></td>
                                            <td>
                                                <button onclick="cargarDatos(<?php echo $fila['id_participante']  ?>)" class="btn btn-facebook" title="Cobrar"><i class="fa fa-dollar"></i></button>
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

                <!--<div class="col-4">
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
                                            class="m-l10 font-weight-300 text-black"> <?php echo $tipo->getNombre() ?></span>
                                </h5>
                                <h5>Fecha: <span
                                            class="m-l10 font-weight-300 text-black"> <?php echo $curso->getFecha() ?></span>
                                </h5>
                                <h5>Monto: <span
                                            class="m-l10 font-weight-300 text-black"><?php echo $curso->getMonto() ?></span>
                                </h5>

                                <h5>URL Zoom: <span
                                            class="m-l10 font-weight-300 text-black"><?php echo $curso->getLugar() ?></span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>

            <div class="modal fade" id="basicModal">
                <div class="modal-dialog" role="document">
                    <form class="form-horizontal" method="post" action="../controller/curso.php">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Cargar Link</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>URL</label>
                                        <input type="text" class="form-control" name="input_url" required>
                                    </div>
                                    <input type="hidden" name="action" value="2">
                                    <input type="hidden" name="idcurso" value="<?php echo $curso->getIdCurso() ?>">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal fade" id="detallePago">
                <div class="modal-dialog modal-lg" role="document">
                    <form class="form-horizontal" method="post" action="../controller/aprobarpagocurso.php">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Detalle de Pago de Inscripcion al Curso</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="media pt-3 pb-3">
                                    <img src="../../../images/cursos/voucher/vjec4ztc.jpg" alt="image" id="mpago_voucher" class="mr-3"
                                         style="max-width: 350px">
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" id="mpago_inputNombre" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nro Celular</label>
                                            <input type="text" class="form-control" id="mpago_inputCelular" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" id="mpago_inputEmail" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Monto</label>
                                            <input type="text" class="form-control" id="mpago_inputMonto" readonly>
                                        </div>
                                    </div>
                                    <input type="hidden" name="action" value="2">
                                    <input type="hidden" name="idcurso" value="<?php echo $curso->getIdCurso()?>">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Aprobar Pago</button>
                            </div>
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
    function enviarEmail() {
        location.href = "../controller/send_link_masivo_curso.php?idcurso=<?php echo $curso->getIdCurso()?>";
    }

    function cargarDatos(idparticipante) {
        $.post("../controller/getJson/datos_participante.php", {input_idparticipante: idparticipante})
            .done(function (data) {
                var jdata = JSON.parse(data);
                $("#mpago_voucher").prop("src", "../../../images/cursos/voucher/" + jdata.voucher);
                $("#mpago_inputNombre").val(jdata.apellidos + " " + jdata.nombres);
                $("#mpago_inputCelular").val(jdata.celular);
                $("#mpago_inputEmail").val(jdata.email);
                $("#mpago_inputMonto").val(<?php echo $curso->getMonto()?>);
                //$("#mpago_inputFecha").val(jdata.fechainscripcion);
                $("#detallePago").modal('show');
            });
    }

    function eliminar(idparticipante) {

    }


</script>
</body>


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
</html>