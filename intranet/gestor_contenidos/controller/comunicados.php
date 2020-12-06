<?php
require '../../models/Comunicados.php';

$comunica = new Comunicados();

$comunica->generarCodigo();
$comunica->setFecha(filter_input(INPUT_POST, 'input_fecha'));
$comunica->setTitulo();Nombre(filter_input(INPUT_POST, 'input_titulo'));
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
        $directorio = "../../../images/comunicados/";
        if (!file_exists($directorio)) {
            if (!mkdir($directorio, 0777, true)) {
                die('Fallo al crear las carpetas...');
            }
        }

        $new_name = $comunica->getIdcomunicado() . '.' . $file_extension;

        if (move_uploaded_file($file_temporal, $directorio . $new_name)) {
            $comunica->setImagen($new_name);
            if ($comunica->insertar()) {
                header("Location: ../contents/ver_comunicados.php");
            }
        } else {
            echo "error no se pudo copiar la imagen a la carpeta";
            //header("Location: ../reg_productos.php?error=3");
        }
    }
}