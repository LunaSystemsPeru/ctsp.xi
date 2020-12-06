<?php
session_start();
require '../../models/Curso.php';

$curso = new Curso();

$curso->generarCodigo();
$curso->setFecha(filter_input(INPUT_POST, 'input_fecha'));
$curso->setNombre(filter_input(INPUT_POST, 'input_nombre'));
$curso->setProfesor(filter_input(INPUT_POST, 'input_profesor'));
$curso->setMonto(filter_input(INPUT_POST, 'input_monto'));
$curso->setEstado(0);
$curso->setIdModalidad(filter_input(INPUT_POST, 'select_modalidad'));
$curso->setLugar(filter_input(INPUT_POST, 'input_lugar'));
$curso->setIdUsuario($_SESSION['idusuario']);
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
        $directorio = "../../../images/cursos/";
        if (!file_exists($directorio)) {
            if (!mkdir($directorio, 0777, true)) {
                die('Fallo al crear las carpetas...');
            }
        }

        $new_name = $curso->getIdCurso() . '.' . $file_extension;

        if (move_uploaded_file($file_temporal, $directorio . $new_name)) {
            $curso->setImagen($new_name);
            if ($curso->insertar()) {
                header("Location: ../contents/curso.php");
            }
        } else {
            echo "error no se pudo copiar la imagen a la carpeta";
            //header("Location: ../reg_productos.php?error=3");
        }
    }
} else {
    echo "error el archivo no cumple con las validaciones </br>";
    ECHO "tipo archivo " . $afile['type'];
    //header("Location: ../reg_productos.php?error=2");
}
