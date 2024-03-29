<!DOCTYPE html>
<html lang="es" class="h-100">


<!-- Mirrored from medico.dexignzone.com/admin/page-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:48:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Acceso para cambiar informacion de la WEB</title>
    <!-- Favicon icon -->
    <link rel="icon" type="../../public/image/png" sizes="16x16" href="../../public/images/favicon.png">
    <link href="../../public/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center">
                                    <img src="../../../images/logo.png" height="80px">
                                </div>
                                <hr class="">
                                <h4 class="text-center mb-4 text-uppercase">Acceder al Gestor de Contenidos</h4>
                                <?php
                                $error = filter_input(INPUT_GET, 'error');
                                if (isset($error) || $error != "" || !is_null($error)) {
                                    $tipo_error = "";
                                    if ($error == 1) {
                                        $tipo_error = "CONTRASEÑA INCORRECTA";
                                    }
                                    if ($error == 2) {
                                        $tipo_error = "USUARIO NO EXISTE";
                                    }
                                    ?>
                                    <div class="col-lg-12">
                                        <div class="alert alert-warning solid">
                                            <?php echo $tipo_error?>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                <form action="../controller/login.php" method="post">
                                    <div class="form-group">
                                        <label><strong>Usuario</strong></label>
                                        <input type="text" class="form-control" value="nombreusuario" name="inputUsuario">
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Contraseña</strong></label>
                                        <input type="password" class="form-control" value="Contraseña" name="inputPassword">
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        <div class="form-group">
                                            <!--<a href="http://medico.dexignzone.com/xhtml/error-404.html">Olvidaste tu Contraseña?</a>-->
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> ingresar</button>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <a href="../../../index.php" class="btn btn-warning btn-block text-white"><i class="fa fa-arrow-left"></i>Regresar</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="../../public/vendor/global/global.min.js"></script>
<script src="../../public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="../../public/js/deznav-init.js"></script>
<script src="../../public/js/custom.min.js"></script>

</body>


<!-- Mirrored from medico.dexignzone.com/admin/page-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 01:48:45 GMT -->
</html>