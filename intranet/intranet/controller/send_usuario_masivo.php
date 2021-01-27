<?php
require '../../models/Asociado.php';
require '../../tools/Email.php';
require '../../tools/Util.php';

$asociado = new Asociado();
$email = new Email();
$util = new Util();

$asociado->setEstado(0);
$array_asociados_0 = $asociado->verAsociados();

$host= $_SERVER["HTTP_HOST"];
$url_server = "http://" . $host . "/clientes/ctsp.xi";
//$url_server = "http://" . $host;
$url_email = $url_server ."/intranet/plantilla_emails/email_usuario_masivo.php?idasociado=";

foreach ($array_asociados_0 as $item) {
    if ($item['email'] != "") {
        /*$asociado->setIdAsociado($item['id_asociado']);
        $asociado->setPassword($util->generarCodigo(8));
        $asociado->actualizar();*/
        $email->setAsunto("ACCESO A PERFIL COLEGIADO");
        $email->setCorreo($item['email']);
        $email->setNombreReceptor($item['apellidos'] . " " . $item['nombres']);
        $url_final_email = $url_email . $item['id_asociado'];
        $email->setUrl($url_final_email);
        //echo $url_email;
        $email->EnviarEmail();
        sleep(3);
    }
}

$asociado->setEstado(1);
$array_asociados_1 = $asociado->verAsociados();

foreach ($array_asociados_1 as $item) {
    if ($item['email'] != "") {
        /*$asociado->setIdAsociado($item['id_asociado']);
        $asociado->setPassword($util->generarCodigo(8));
        $asociado->actualizar();*/
        $email->setAsunto("ACCESO A PERFIL COLEGIADO");
        $email->setCorreo($item['email']);
        $email->setNombreReceptor($item['apellidos'] . " " . $item['nombres']);
        $url_final_email = $url_email . $item['id_asociado'];
        $email->setUrl($url_final_email);
        //echo $url_email;
        $email->EnviarEmail();
    }
}
