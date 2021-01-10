<?php
ob_start();
require '../intranet/models/CursosParticipante.php';
require '../intranet/models/Curso.php';
require '../intranet/tools/Util.php';
require '../intranet/tools/Email.php';

$participantes = new CursosParticipante();
$curso = new Curso();
$util = new Util();
$email = new Email();

$participantes->generarCodigo();
$participantes->setNombre(strtoupper(filter_input(INPUT_POST, 'input_nombres')));
$participantes->setApellido(strtoupper(filter_input(INPUT_POST, 'input_apellidos')));
$participantes->setCelular(filter_input(INPUT_POST, 'input_celular'));
$participantes->setEmail(filter_input(INPUT_POST, 'input_email'));
$participantes->setNroDocumento(filter_input(INPUT_POST, 'input_documento'));
$participantes->setCentroTrabajo(filter_input(INPUT_POST, 'input_trabajo'));
$participantes->setIdCurso(filter_input(INPUT_POST, 'hidden_curso'));

$curso->setIdCurso($participantes->getIdCurso());
$curso->obtenerDatos();

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
                $email->setAsunto("REGISTRO AL CURSO: " . strtoupper($curso->getNombre()));
                $email->setCorreo($participantes->getEmail());
                $email->setNombreReceptor($participantes->getApellido() . " " . $participantes->getNombre());
                $host= $_SERVER["HTTP_HOST"];
                $url= $_SERVER["REQUEST_URI"];
                $email->setUrl("http://" . $host . $url."/../../intranet/plantilla_emails/email_inscripcion_curso.php?idparticipante=" . $participantes->getIdParticipante());
                $email->EnviarEmail();
                header("Location: ../detalle_curso_registrado.php?idcurso=" . $participantes->getIdCurso());
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
ob_end_flush();