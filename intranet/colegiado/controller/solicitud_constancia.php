<?php
session_start();
require '../../models/SolicitudHabilidad.php';

$solicitud = new SolicitudHabilidad();

$solicitud->generarCodigo();
$solicitud->setIdAsociado($_SESSION['idasociado']);
$solicitud->setFechaSolicitud(filter_input(INPUT_POST, 'input_fecha'));
$solicitud->setFechaUltimoPago(filter_input(INPUT_POST, 'inputPeriodo'));
$solicitud->setPago(filter_input(INPUT_POST, 'input_monto'));
$solicitud->setEstado(0);

$directorio = "../../../images/constanciahabilidad/";
if (!file_exists($directorio)) { //verificar si existe carpeta
    if (!mkdir($directorio, 0777, true)) { //sino existe crearla
        die('Fallo al crear las carpetas...'); //si no se puede crear lanzar erro
    }
}

$afile = $_FILES['input_voucher'];

if (isset($afile)) {

    $file = $afile['name'];
    $file_temporal = $afile['tmp_name'];
    $temporary = explode(".", $afile["name"]);
    $file_extension = end($temporary);

    if ($afile["error"] > 0) {
        echo "Return Code: " . $afile["error"] . "<br/><br/>";
    } else {
        $new_name = $solicitud->getIdSolicitud() . '.' . $file_extension; //renonbrar archivo

        if (move_uploaded_file($file_temporal, $directorio . $new_name)) {
            $solicitud->setVoucher($new_name);
        } else {
            echo "error no se pudo copiar la imagen a la carpeta";
            //header("Location: ../reg_productos.php?error=3");
        }
    }
}

$solicitud->insertar();

header("Location: ../contents/constancia_habilidad.php");