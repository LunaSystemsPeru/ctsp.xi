<?php
session_start();
require '../../models/Asociado.php';
$asociado = new Asociado();

$asociado->setIdAsociado($_SESSION['idasociado']);
$asociado->obtenerDatos();
$tipo = filter_input(INPUT_POST, 'hidden_tipo');
$afile = $_FILES['file_ficha_inscripcion'];

$directorio = "../../../images/asociados/perfil/";
if ($tipo == 1) {
    $directorio = "../../../images/asociados/titulo/";
}
if ($tipo == 2) {
    $directorio = "../../../images/asociados/sunedu/";
}
if ($tipo == 3) {
    $directorio = "../../../images/asociados/ficha_inscripcion/";
}
if (!file_exists($directorio)) { //verificar si existe carpeta
    if (!mkdir($directorio, 0777, true)) { //sino existe crearla
        die('Fallo al crear las carpetas...'); //si no se puede crear lanzar erro
    }
}

$file = $afile['name'];
$file_temporal = $afile['tmp_name'];
$temporary = explode(".", $afile["name"]);
$file_extension = end($temporary);

if ($afile["error"] > 0) {
    echo "Return Code: " . $afile["error"] . "<br/><br/>";
} else {
    $new_name = $asociado->getIdAsociado() . '.' . $file_extension; //renonbrar archivo

    if (move_uploaded_file($file_temporal, $directorio . $new_name)) {
        if ($tipo== 1) {
            $asociado->setTitulo($new_name);
        }
        if ($tipo== 2) {
            $asociado->setRegistroSunedu($new_name);
        }
        if ($tipo== 3) {
            $asociado->setFichaInscripcion($new_name);
        }
        $asociado->actualizarDocumentos();
        header("Location: ../perfil.php");
    } else {
        echo "error no se pudo copiar la imagen a la carpeta";
        //header("Location: ../reg_productos.php?error=3");
    }
}