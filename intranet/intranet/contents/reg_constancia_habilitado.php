<?php
require '../../models/Banco.php';
$banco = new Banco();
?>
<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Emitir Constancia de Habilitados | Sistema de Gestion - CTSP Region XI Ancash </title>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label>Numero CTSP</label>
                                            <input type="text" class="form-control" id="inputCtsp">
                                        </div>
                                        <div class="form-group col-md-7">
                                            <label>o escriba los Datos del colegiado y luego clic en la
                                                sugerencia</label>
                                            <input type="text" class="form-control" placeholder="" id="inputDatos">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Cargar datos</label>
                                            <button type="button" class="btn btn-primary" onclick="buscarColegiado()"><i
                                                        class="fa fa-search"></i>
                                                Buscar
                                            </button>
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
                                            <input type="text" class="form-control" id="inputNroCTSP" readonly>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Nro Doc</label>
                                            <input type="text" class="form-control" id="inputNroDoc" readonly>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Apellidos</label>
                                            <input type="text" class="form-control" id="inputApellidos" readonly>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Nombres</label>
                                            <input type="text" class="form-control" id="inputNombres" readonly>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Domicilio Actual</label>
                                            <input type="text" class="form-control" id="inputDomicilio" readonly>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Fecha Nacimiento</label>
                                            <input type="date" class="form-control" id="inputFechaNacimiento" readonly>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <label>Centro Trabajo Actual</label>
                                            <input type="text" class="form-control" id="inputTrabajo" readonly>
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
                                <div class="table-responsive" id="tablaPagos">
                                    <table class="table " style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Monto</th>
                                            <th>Nro Meses</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="alertRespuesta" class="col-md-12">

                </div>

                <div class="col-12">
                    <div class="card">
                        <form method="post" action="../controller/generar_certificado_habilitado.php">
                            <input type="hidden" name="inputIdAsociado" id="inputIdAsociado">
                            <div class="card-header">
                                <h4 class="text-tittle">Emitir Constancia</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label>Ultimo Pago:</label>
                                            <input type="date" class="form-control" id="inputUltimoPago"
                                                   name="inputUltimoPago" readonly>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Fecha Solicitud</label>
                                            <input type="date" class="form-control" id="inputFechaSolicitud"
                                                   name="inputFechaSolicitud" value="<?php echo date("Y-m-d") ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label>Monto a Pagar</label>
                                            <input type="text" class="form-control" id="inputMontoPagado"
                                                   name="inputMontoPagado">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Destino</label>
                                            <select class="form-control" id="selectDestino" name="selectDestino">
                                                <?php
                                                $abanco = $banco->verFilas();
                                                foreach ($abanco as $item) {
                                                    ?>
                                                    <option value="<?php echo $item['id_banco'] ?>"><?php echo $item['nombre'] ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-facebook" id="buttonGrabar" disabled><i class="fa fa-file-pdf-o"></i> Generar
                                    Certificado
                                </button>
                            </div>
                        </form>
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
                        document.getElementById("buttonGrabar").disabled=false;
                    } else {
                        $("#alertRespuesta").html('<div class="alert alert-danger solid "><strong>NO HABILITADO!</strong> Asociado no cumple con los tres meses minimos.</div>');
                        document.getElementById("buttonGrabar").disabled=true;
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