<?php
require '../../models/Asociado.php';

$asociado = new Asociado();

$asociado->generarCodigo();
$asociado->setTipoDocumento(filter_input(INPUT_POST, 'select_tipo_documento'));
$asociado->setDni(filter_input(INPUT_POST, 'input_dni'));
$asociado->setApellido(filter_input(INPUT_POST, 'input_apellidos'));
$asociado->setNombre(filter_input(INPUT_POST, 'input_nombres'));
$asociado->setTipoRegistro(filter_input(INPUT_POST, 'select_tipo_inscripcion'));
$asociado->setEmail(filter_input(INPUT_POST, 'input_email'));
$asociado->setCelular(filter_input(INPUT_POST, 'input_celular'));
$asociado->setDomicilio(filter_input(INPUT_POST, 'input_domicilio'));
$asociado->setFechaNac(filter_input(INPUT_POST, 'input_fec_nac'));
$asociado->setCentroTrabajo(filter_input(INPUT_POST, 'input_trabajo'));
$asociado->setEstado(3);
//0 = pendiente
//1 = aprobado
//2 = rechazado por corregir

//datos en blanco
$asociado->setUltimoPago("1000-01-01");
$asociado->setFechaCertificado("1000-01-01");
$asociado->setFechaInscripcion(date("Y-m-d"));
$asociado->setTipoActividad(12);

//cargar files

$array_files[] = Array (
    "file" => "input_file_perfil",
    "directorio" => "perfil"
);
$array_files[] = Array (
    "file" => "file_ficha_inscripcion",
    "directorio" => "ficha_inscripcion"
);
$array_files[] = Array (
    "file" => "file_sunedu",
    "directorio" => "sunedu"
);
$array_files[] = Array (
    "file" => "file_titulo",
    "directorio" => "titulo"
);

foreach ($array_files as $item) {
    $directorio = "../../../images/asociados/" . $item['directorio'] . "/";
    if (!file_exists($directorio)) { //verificar si existe carpeta
        if (!mkdir($directorio, 0777, true)) { //sino existe crearla
            die('Fallo al crear las carpetas...'); //si no se puede crear lanzar erro
        }
    }

    $afile = $_FILES[$item['file']];

    if(isset($afile)) {

        $file = $afile['name'];
        $file_temporal = $afile['tmp_name'];
        $temporary = explode(".", $afile["name"]);
        $file_extension = end($temporary);

        if ($afile["error"] > 0) {
            echo "Return Code: " . $afile["error"] . "<br/><br/>";
        } else {
            $new_name = $asociado->getIdAsociado() . '.' . $file_extension; //renonbrar archivo

            if (move_uploaded_file($file_temporal, $directorio . $new_name)) {
                if ($item['directorio'] == "perfil") {
                    $asociado->setFoto($new_name);
                }
                if ($item['directorio'] == "ficha_inscripcion") {
                    $asociado->setFichaInscripcion($new_name);
                }
                if ($item['directorio'] == "sunedu") {
                    $asociado->setRegistroSunedu($new_name);
                }
                if ($item['directorio'] == "titulo") {
                    $asociado->setTitulo($new_name);
                }
            } else {
                echo "error no se pudo copiar la imagen a la carpeta";
                //header("Location: ../reg_productos.php?error=3");
            }
        }
    }
}
$asociado->insertar();

header("Location: ../contents/ver_asociados_pendientes.php");


