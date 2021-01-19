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
    <title>Pago de Cuotas | Sistema de Gestion - CTSP Region XI Ancash </title>
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
                                            <input type="text" class="form-control" id="inputNroCTSP" disabled>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Nro Doc</label>
                                            <input type="text" class="form-control" id="inputNroDoc" disabled>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Apellidos</label>
                                            <input type="text" class="form-control" id="inputApellidos" disabled>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Nombres</label>
                                            <input type="text" class="form-control" id="inputNombres" disabled>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Domicilio Actual</label>
                                            <input type="text" class="form-control" id="inputDomicilio" disabled>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Fecha Nacimiento</label>
                                            <input type="date" class="form-control" id="inputFechaNacimiento" disabled>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <label>Centro Trabajo Actual</label>
                                            <input type="text" class="form-control" id="inputTrabajo" disabled>
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
                                            <th>Periodo Inicial</th>
                                            <th>Periodo Final</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="basic-form">
                                        <input type="hidden" id="inputIdAsociado" name="inputIdAsociado">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Cuotas Pendientes</label>
                                                <input type="text" class="form-control" id="inputCuotasPendientes" disabled>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Periodo Inicial</label>
                                                <input type="date" class="form-control" id="inputPeriodoInicio" name="inputPeriodoInicio" value="<?php echo date("Y-m-d") ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Nro Cuotas a Pagar</label>
                                                <input type="number" class="form-control" id="inputCuotasPagadas" name="inputCuotasPagadas" onkeyup="CalcularCuotas()">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Periodo Final</label>
                                                <input type="date" class="form-control" id="inputPeriodoFinal" name="inputPeriodoFinal" value="<?php echo date("Y-m-d") ?>" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="basic-form">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Fecha de Pago</label>
                                                <input type="date" class="form-control" id="inputFechaPago" name="inputFechaPago" value="<?php echo date("Y-m-d") ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Monto Total</label>
                                                <input type="text" class="form-control" id="inputMontoPagar" name="inputMontoPagar">
                                            </div>
                                            <div class="form-group col-md-6">
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
                                            <div class="form-group col-md-6">
                                                <label>Nro Operacion</label>
                                                <input type="text" class="form-control" id="inputNroOperacion" name="inputNroOperacion">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Guardar</button>
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
            });


        $.post("../controller/getJson/pagos_asociado.php", {inputCTSP: nroCtsp})
            .done(function (data) {
                $("#tablaPagos").html(data);
            });
    }

    function CalcularCuotas() {
        var nrocuotas = $("#inputCuotasPagadas").val();
        var montoCuota = nrocuotas * 10;
        $("#inputMontoPagar").val(montoCuota);
        sumarMeses();
    }

    function validarPago () {
        url_post = "../controller/pago_cuotas.php";
    }

    function sumarMeses () {
        var fecha = new Date($('#inputPeriodoInicio').val());
        var meses = parseInt($('#inputCuotasPagadas').val()); // Número de días a agregar
        console.log(fecha.getMonth());
        fecha.setMonth(fecha.getMonth() + meses);

        console.log(fecha.getFullYear() + "-" + PadLeft((fecha.getMonth()+1), 2) + "-" + PadLeft(fecha.getDate(), 2));
        $('#inputPeriodoFinal').val(fecha.getFullYear() + "-" + PadLeft((fecha.getMonth()+1), 2) + "-" + PadLeft(fecha.getDate(), 2));
    }

    function PadLeft(value, length) {
        return (value.toString().length < length) ? PadLeft("0" + value, length) :
            value;
    }
</script>
</body>


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
</html>