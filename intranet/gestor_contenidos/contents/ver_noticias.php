<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from medico.dexignzone.com/admin/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:49:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Noticias | Sistema de Gestion - CTSP Region XI Ancash </title>
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
                        <h4>Listar Noticias</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">SG</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Noticias</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="noticia.php" class="btn btn-facebook"> <i class="fa fa-plus"></i> Agregar</a>
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
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title">Card title</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text and below as
                                a natural lead-in to the additional content. This content is a
                                little</p>
                        </div>
                        <img class="card-img-bottom img-fluid" src="../../public/images/profile/3.jpg"
                             alt="Card image cap">
                        <div class="card-footer">
                            <p class="card-text d-inline">Card footer</p>
                            <a href="mod_noticia.php?id=1" class="card-link float-right btn btn-success">Editar</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title">Card title</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text and below as
                                a natural lead-in to the additional content. This content is a
                                little</p>
                        </div>
                        <img class="card-img-bottom img-fluid" src="../../public/images/profile/3.jpg"
                             alt="Card image cap">
                        <div class="card-footer">
                            <p class="card-text d-inline">Card footer</p>
                            <a href="mod_noticia.php?id=1" class="card-link float-right btn btn-success">Editar</a>
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