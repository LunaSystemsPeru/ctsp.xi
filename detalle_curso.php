<?php
require 'intranet/models/Curso.php';
require 'intranet/tools/Util.php';
$curso = new Curso();
$util = new Util();

$curso->setIdCurso(filter_input(INPUT_GET, 'idcurso'));

if (!$curso->getIdCurso()) {
    header("Location: cursos.php");
} else {
    $curso->obtenerDatos();
}

$fecha_curso = $util->fechaCastellano($curso->getFecha());
?>

<!DOCTYPE html>
<html lang="es">

<!-- Mirrored from medico.dexignzone.com/xhtml/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Sep 2020 21:18:50 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta name="robots" content=""/>
    <meta name="description" content=""/>
    <meta property="og:title" content="Colegio de Trabajadores Sociales del Peru - Region XI Ancash"/>
    <meta property="og:description" content="Cursos Colegio de Trabajadores Sociales del Peru - Region XI Ancash"/>
    <meta property="og:image" content=""/>
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"/>

    <!-- PAGE TITLE HERE -->
    <title>Detalle del Curso | Colegio de Trabajadores Sociales del Peru - Region XI Ancash</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="css/plugins.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="plugins/themify/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
    <link rel="stylesheet" type="text/css" href="css/templete.min.css">

    <script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>


    <style>
        @import url('https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|PT+Serif:400,400i,700,700i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Slab:100,300,400,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i');
    </style>

</head>
<body id="bg">

<div id="loading-area"></div>
<div class="page-scroll"></div>
<div class="page-wraper">
    <!-- header -->
    <?php include 'fixed/header.php' ?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- About Company -->
        <!-- Our Awesome Services -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center section-head">
                        <h3 class="h3"> <?php echo $curso->getNombre() ?></h3>
                        <div class="dez-separator bg-primary"></div>

                    </div>

                </div>

                <div class="section-content ">
                    <div class="row">
                        <div class="row portfolio-detail">
                            <div class="col-md-12">
                                <img src="images/cursos/<?php echo $curso->getImagen() ?>" class="m-b30" alt=""/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2 class="m-b10 font-weight-700 ">Detalle del Curso</h2>
                                        <div class="p-a30 port-info-box bg-gray radius-sm">
                                            <h5>Profesor(es): <span
                                                        class="m-l10 font-weight-300 text-black"> <?php echo $curso->getProfesor() ?></span>
                                            </h5>
                                            <h5>Via Ponencia: <span
                                                        class="m-l10 font-weight-300 text-black"> <?php echo $curso->getLugar() ?></span>
                                            </h5>
                                            <h5>Fecha: <span
                                                        class="m-l10 font-weight-300 text-black"> <?php echo $fecha_curso ?></span>
                                            </h5>
                                            <h5>Monto: <span
                                                        class="m-l10 font-weight-300 text-black">S/ <?php echo number_format($curso->getMonto(), 2) ?></span>
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <?php
                                        $fecha_actual = strtotime(date("Y-m-d"));
                                        $fecha_entrada = strtotime($curso->getFecha());
                                        if ($fecha_entrada >= $fecha_actual) {
                                            ?>
                                            <div class="alert bg-success text-white"><i class="fa fa-address-book"></i> <strong> INSCRIBITE ONLINE!!</strong></div>
                                            <form method="post" action="controller/reg_participante_curso.php" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input name="input_apellidos" type="text" required class="form-control" placeholder="Apellidos">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input name="input_nombres" type="text" class="form-control" required placeholder="Nombres">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input name="input_celular" type="text" required class="form-control" placeholder="Celular">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input name="input_email" type="email" required class="form-control" placeholder="email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input name="input_documento" type="text" required class="form-control" placeholder="Nro Documento">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input name="input_trabajo" type="text" required class="form-control" placeholder="Lugar de Trabajo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Cargar Voucher</label>
                                                            <div class="input-group">
                                                                <input type="file" accept="image/jpeg, image/png" name="input_voucher" class="form-control" placeholder="Cargar Voucher">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <input type="hidden" name="hidden_curso" value="<?php echo $curso->getIdCurso() ?>">
                                                        <input name="submit" type="submit" value="Inscribirse!" class="btn btn-success">
                                                    </div>
                                                </div>
                                            </form>
                                            <?php
                                        } else {
                                            ?>
                                            <div class="card-header">
                                                <div class="alert bg-danger text-white"><i class="fa fa-exclamation-triangle"></i> ESTE CURSO YA FINALIZO</div>
                                                <a href="cursos.php"> <i class="fa fa-arrow-left"></i> Ver Todos los Cursos</a>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- Footer -->
<?php include 'fixed/footer.php' ?>
<!-- Footer END-->
<!-- scroll top button -->
<button class="scroltop fa fa-chevron-up"></button>
</div>
<!-- JavaScript  files ========================================= -->
<script src="js/combining.js"></script><!-- COMBINING JS  -->
<!-- revolution JS FILES -->
<script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/rev.slider.js"></script>

</body>

<!-- Mirrored from medico.dexignzone.com/xhtml/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Sep 2020 21:19:49 GMT -->
</html>