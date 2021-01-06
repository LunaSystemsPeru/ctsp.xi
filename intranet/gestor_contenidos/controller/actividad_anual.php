<?php
require '../../models/Evento.php';

$evento = new Evento();

$evento->setAnio(filter_input(INPUT_POST, 'inputanio'));
$evento->setIdTipoEvento(filter_input(INPUT_POST, 'selecttipo'));
$evento->setVideo(filter_input(INPUT_POST, 'inputVideo'));
$evento->generarCodigo();

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

var_dump($_FILES["filefotos"]);