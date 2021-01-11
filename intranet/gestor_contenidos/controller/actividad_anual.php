<?php
require '../../models/Evento.php';
require '../../models/EventoDetalle.php';

$evento = new Evento();
$galeria = new EventoDetalle();

$evento->setAnio(filter_input(INPUT_POST, 'inputanio'));
$evento->setIdTipoEvento(filter_input(INPUT_POST, 'selecttipo'));
$evento->setVideo(filter_input(INPUT_POST, 'inputVideo'));
$evento->generarCodigo();

$galeria->setIdevento($evento->getId());

$afile = $_FILES["input_prograna"];

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
        $directorio = "../../../archivos/eventos/";
        if (!file_exists($directorio)) {
            if (!mkdir($directorio, 0777, true)) {
                die('Fallo al crear las carpetas...');
            }
        }

        $new_name = $evento->getId() . '.' . $file_extension;

        if (move_uploaded_file($file_temporal, $directorio . $new_name)) {
            $evento->setPrograma($new_name);
            $evento->insertar();
        } else {
            echo "error no se pudo copiar el archivo a la carpeta";
            //header("Location: ../reg_productos.php?error=3");
        }
    }
}

//ccargar galeria
$agaleria = $_FILES["filefotos"];
//var_dump($_FILES["filefotos"]);

for ($i= 0; $i < count($agaleria['name']); $i++) {
    $file = $agaleria['name'][$i];
    $file_temporal = $agaleria['tmp_name'][$i];
    $temporary = explode(".", $file);
    $file_extension = end($temporary);

    if ($agaleria["error"][$i] > 0) {
        echo "Return Code: " . $agaleria["error"][$i] . "<br/><br/>";
    } else {
        $directorio = "../../../archivos/eventos/imagenes/";
        if (!file_exists($directorio)) {
            if (!mkdir($directorio, 0777, true)) {
                die('Fallo al crear las carpetas...');
            }
        }

        $galeria->generarCodigo();
        $new_name = $galeria->getId() . '.' . $file_extension;

        if (move_uploaded_file($file_temporal, $directorio . $new_name)) {
            $galeria->setImagen($new_name);
            $galeria->insertar();
        } else {
            echo "error no se pudo copiar el archivo a la carpeta";
            //header("Location: ../reg_productos.php?error=3");
        }
    }
}

header("Location: ../contents/ver_actividades.php");