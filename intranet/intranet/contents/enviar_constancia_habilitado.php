<?php
require '../../models/SolicitudHabilidad.php';
$constancia = new SolicitudHabilidad();
$constancia->setIdSolicitud(filter_input(INPUT_GET, 'idSolicitud'));
$constancia->obtenerDatos();
?>
<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Revisar Constancia de Habilitados | Sistema de Gestion - CTSP Region XI Ancash </title>
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
                        <h4>Constancia Habilitado</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">SG</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Usuarios</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <a href="reg_constancia_habilitado.php" class="btn btn-google" ><i class="fa fa-arrow-left"></i> Retornar</a>
                            <button type="button"
                                    class="btn btn-warning"><i class="fa fa-envelope"></i> Enviar por
                                Email
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <embed src="../../reports/rptConstanciaHabilidad.php?idSolicitud=<?php echo $constancia->getIdSolicitud() ?>"
                                   width="100%" height="500px">
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

<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>


<script>
    $(function () {
        $("#inputDatos").autocomplete({
            source: '../controller/getJson/lista_Asociados.php',
            minLength: 2,
            select: function (event, ui) {
                $("#inputCtsp").val(ui.item.nroctsp);
            }
        });
    });

    function buscarColegiado() {
        var nroCtsp = $("#inputCtsp").val();
        if (nroCtsp != "") {
            $("#inputDatos").val("");
            $("#inputCtsp").val("");
            $.post("../controller/getJson/datos_asociado.php", {inputCTSP: nroCtsp})
                .done(function (data) {

                    var jdata = JSON.parse(data);
                    $("#inputApellidos").val(jdata.apellidos);
                    $("#inputNombres").val(jdata.nombres);
                    $("#inputNroCTSP").val(jdata.ctsp);
                    $("#inputDomicilio").val(jdata.domicilio);
                    $("#inputFechaNacimiento").val(jdata.fechanacimiento);
                    $("#inputTrabajo").val(jdata.trabajo);
                    $("#inputIdAsociado").val(jdata.idasociado);
                    $("#inputUltimoPago").val(jdata.ultimopago);
                    var diasdiferencia = jdata.diasdiferencia;

                    if (parseInt(diasdiferencia) < 90) {
                        $("#alertRespuesta").html('<div class="alert alert-success solid "><strong>HABILITADO!</strong> Asociado al dia en sus pagos.</div>');
                        document.getElementById("buttonGrabar").disabled = false;
                    } else {
                        $("#alertRespuesta").html('<div class="alert alert-danger solid "><strong>NO HABILITADO!</strong> Asociado no cumple con los tres meses minimos.</div>');
                        document.getElementById("buttonGrabar").disabled = true;
                    }

                });


            $.post("../controller/getJson/pagos_asociado.php", {inputCTSP: nroCtsp})
                .done(function (data) {
                    $("#tablaPagos").html(data);
                });
        } else {
            alert("POR FAVOR SELECCIONE A UN(A) ASOCIADO(A)")
        }
    }

</script>
</body>


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
</html>