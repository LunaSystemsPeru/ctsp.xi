<?php
require 'intranet/models/Asociado.php';

$asociado = new Asociado();

$asociado->setNombre(filter_input(INPUT_POST, 'input_nombres'));
$asociado->setApellido(filter_input(INPUT_POST, 'input_apellidos'));
$asociado->setCtsp(filter_input(INPUT_POST, 'input_ctsp'));

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
    <meta property="og:description"
          content="Requisitos de Colegiacion para Colegio de Trabajadores Sociales del Peru - Region XI Ancash"/>
    <meta property="og:image" content=""/>
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"/>

    <!-- PAGE TITLE HERE -->
    <title>Consulta de Colegiado | Colegio de Trabajadores Sociales del Peru - Region XI Ancash</title>

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
                <div class="section-full doctor-stats-bx"
                     style="background-image:url(images/background/bg10.jpg); background-repeat:no-repeat; background-position:bottom; ba">
                    <div class="container">
                        <div class="section-head text-center ">
                            <h3 class="h3 text-uppercase">Buscar <span class="text-primary">Colegiado.</span></h3>
                            <p>Ingrese los datos para hacer la busqueda de un colegiado</p>
                        </div>
                    </div>
                    <div class="row">
                        <form class="col-lg-12" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Nro Colegiatura</label>
                                    <input type="text" class="form-control" placeholder="999999" name="input_ctsp">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Apellidos</label>
                                    <input type="text" class="form-control" placeholder="Apellidos"
                                           name="input_apellidos">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" placeholder="Nombres" name="input_nombres">
                                </div>
                                <div class="form-group col-md-1">
                                    <button type="submit" class="btn btn-primary">Buscar</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <div class="section-full content-inner ">
                    <div class="container">
                        <div class="section-head text-center ">
                            <h3 class="h3 text-uppercase">Resultados</h3>
                        </div>
                        <div class="row col-lg-12">
                            <div class="table-responsive">
                                <table id="example2" class="table table-striped" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Nro CTSP</th>
                                        <th>Apellidos y Nombres</th>
                                        <th>Fec. Inscripcion</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $item =0;
                                    $aasociados = $asociado->buscarAsociado();
                                    foreach ($aasociados as $fila) {
                                        $item++;
                                        $label = '<label class="badge badge-success">Activo</label>';
                                        if ($fila['estado'] == 0) {
                                            $label = '<label class="badge badge-warning">No Habilitado</label>';
                                        }
                                        ?>
                                        <tr>
                                            <td><?php echo $item?></td>
                                            <td><?php echo $fila['ctsp'] ?></td>
                                            <td><?php echo $fila['apellidos'] . " " . $fila['nombres'] ?></td>
                                            <td><?php echo $fila['fecha_inscripcion'] ?></td>
                                            <td><?php echo $label ?></td>
                                            <td>
                                                <button type="button" class="btn btn-info" title="Ver Perfil"><i
                                                            class="fa fa-user"></i></button>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </table>
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
</body>

<!-- Mirrored from medico.dexignzone.com/xhtml/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Sep 2020 21:19:49 GMT -->
</html>