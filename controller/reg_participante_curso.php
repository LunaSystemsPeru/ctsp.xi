<?php
require '../intranet/models/CursosParticipante.php';
require '../intranet/tools/Util.php';

$participantes = new CursosParticipante();
$util = new Util();

$participantes->generarCodigo();
$participantes->setNombre(strtoupper(filter_input(INPUT_POST, 'input_nombres')));
$participantes->setApellido(strtoupper(filter_input(INPUT_POST, 'input_apellidos')));
$participantes->setCelular(filter_input(INPUT_POST, 'input_celular'));
$participantes->setEmail(filter_input(INPUT_POST, 'input_email'));
$participantes->setNroDocumento(filter_input(INPUT_POST, 'input_documento'));
$participantes->setCentroTrabajo(filter_input(INPUT_POST, 'input_trabajo'));
$participantes->setIdCurso(filter_input(INPUT_POST, 'hidden_curso'));

$afile = $_FILES["input_voucher"];

//cargar imagen y enviar a carpeta.
if (isset($afile)) {
    // echo "imagenes encontradas: " . $file_count;

    $file = $afile['name'];
    $file_temporal = $afile['tmp_name'];
    $temporary = explode(".", $afile["name"]);
    $file_extension = end($temporary);

    if ($afile["error"] > 0) {
        echo "Return Code: " . $afile["error"] . "<br/><br/>";
    } else {
        $directorio = "../images/cursos/voucher/";
        if (!file_exists($directorio)) { //verificar si existe carpeta
            if (!mkdir($directorio, 0777, true)) { //sino existe crearla
                die('Fallo al crear las carpetas...'); //si no se puede crear lanzar erro
            }
        }

        $new_name = $util->generarCodigo(8) . '.' . $file_extension; //renonbrar archivo

        if (move_uploaded_file($file_temporal, $directorio . $new_name)) {
            $participantes->setVoucher($new_name);
            if ($participantes->insertar()) {
                header("Location: ../detalle_curso.php?idcurso=" . $participantes->getIdCurso());
            }
        } else {
            echo "error no se pudo copiar la imagen a la carpeta";
            //header("Location: ../reg_productos.php?error=3");
        }
    }
} else {
    echo "error el archivo no cumple con las validaciones </br>";
    echo "tipo archivo " . $afile['type'];
    //header("Location: ../reg_productos.php?error=2");
}