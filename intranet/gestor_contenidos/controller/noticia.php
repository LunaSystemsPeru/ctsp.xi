<?php
require '../../models/Noticias.php';

$noticia = new Noticias();

$noticia->generarCodigo();
$noticia->setFecha(filter_input(INPUT_POST, 'input_fecha'));
$noticia->setTitulo(filter_input(INPUT_POST, 'input_titulo'));
$noticia->setContenido(filter_input(INPUT_POST, 'input_contenido'));
$afile = $_FILES["input_imagen"];

//cargar imagen y enviar a carpeta.
if (isset($afile)) {
    // echo "imagenes encontradas: " . $file_count;

    $file = $afile['name'];
    $file_temporal = $afile['tmp_name'];
    $validextensions = array("jpeg", "jpg", "png", "JPG", "JPEG", "PNG");
    $temporary = explode(".", $afile["name"]);
    $file_extension = end($temporary);

    if ($afile["error"] > 0) {
        echo "Return Code: " . $afile["error"] . "<br/><br/>";
    } else {
        $directorio = "../../../images/noticias/";
        if (!file_exists($directorio)) {
            if (!mkdir($directorio, 0777, true)) {
                die('Fallo al crear las carpetas...');
            }
        }

        $new_name = $noticia->getIdnoticias() . '.' . $file_extension;

        if (move_uploaded_file($file_temporal, $directorio . $new_name)) {
            $noticia->setImagen($new_name);
            if ($noticia->insertar()) {
                header("Location: ../contents/noticia.php");
            }
        } else {
            echo "error no se pudo copiar la imagen a la carpeta";
            //header("Location: ../reg_productos.php?error=3");
        }
    }
}