<?php
session_start();
require '../../models/Curso.php';

$curso = new Curso();

$accion = filter_input(INPUT_GET, 'action');
// accion = 1 => añadir
// accion = 2 => modificar
// accion = 3 => eliminar
if (!$accion) {
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
        $temporary = explode(".", $afile["name"]);
        $file_extension = end($temporary);

        if ($afile["error"] > 0) {
            echo "Return Code: " . $afile["error"] . "<br/><br/>";
        } else {
            $directorio = "../../../images/cursos/";
            if (!file_exists($directorio)) { //verificar si existe carpeta
                if (!mkdir($directorio, 0777, true)) { //sino existe crearla
                    die('Fallo al crear las carpetas...'); //si no se puede crear lanzar erro
                }
            }

            $new_name = $curso->getIdCurso() . '.' . $file_extension; //renonbrar archivo

            if (move_uploaded_file($file_temporal, $directorio . $new_name)) {
                $curso->setImagen($new_name);
                if ($curso->insertar()) {
                   header("Location: ../contents/ver_cursos.php");
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
}

if ($accion == 3) {
    $curso->setIdCurso(filter_input(INPUT_GET, 'idcurso'));
    $curso->eliminar();
    header("Location: ../contents/ver_cursos.php");
}