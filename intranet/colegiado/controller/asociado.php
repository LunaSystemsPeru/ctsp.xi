<?php
session_start();
require '../../models/Asociado.php';

$asociado = new Asociado();

$asociado->setIdAsociado($_SESSION['idasociado']);
$asociado->setTipoDocumento(filter_input(INPUT_POST, 'select_tipo_documento'));
$asociado->setDni(filter_input(INPUT_POST, 'input_dni'));
$asociado->setApellido(filter_input(INPUT_POST, 'input_apellidos'));
$asociado->setNombre(filter_input(INPUT_POST, 'input_nombres'));
$asociado->setEmail(filter_input(INPUT_POST, 'input_email'));
$asociado->setCelular(filter_input(INPUT_POST, 'input_celular'));
$asociado->setDomicilio(filter_input(INPUT_POST, 'input_domicilio'));
$asociado->setFechaNac(filter_input(INPUT_POST, 'input_fec_nac'));
$asociado->setPassword(filter_input(INPUT_POST, 'input_password'));
$asociado->setCentroTrabajo(filter_input(INPUT_POST, 'input_trabajo'));
$asociado->setTipoActividad(filter_input(INPUT_POST, 'input_actividad'));
$asociado->setFoto(filter_input(INPUT_POST, 'input_foto'));

//cargar files
$directorio = "../../../images/asociados/perfil/";
if (!file_exists($directorio)) { //verificar si existe carpeta
    if (!mkdir($directorio, 0777, true)) { //sino existe crearla
        die('Fallo al crear las carpetas...'); //si no se puede crear lanzar erro
    }
}

$afile = $_FILES['input_file_perfil'];

if (isset($afile)) {

    $file = $afile['name'];
    $file_temporal = $afile['tmp_name'];
    $temporary = explode(".", $afile["name"]);
    $file_extension = end($temporary);

    if ($afile["error"] > 0) {
        echo "Return Code: " . $afile["error"] . "<br/><br/>";
    } else {
        $new_name = $asociado->getIdAsociado() . '.' . $file_extension; //renonbrar archivo

        if (move_uploaded_file($file_temporal, $directorio . $new_name)) {
            $asociado->setFoto($new_name);
        } else {
            echo "error no se pudo copiar la imagen a la carpeta";
            //header("Location: ../reg_productos.php?error=3");
        }
    }
}
$asociado->actualizar();

header("Location: ../contents/perfil.php");


