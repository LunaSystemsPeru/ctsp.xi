<?php
require '../../models/Asociado.php';
require '../../tools/Util.php';

$asociado = new Asociado();
$util = new Util();

$asociado->setEstado(0);
$array_asociados_0 = $asociado->verAsociados();

foreach ($array_asociados_0 as $item) {
    if ($item['email'] != "") {
        /*$asociado->setIdAsociado($item['id_asociado']);
        $asociado->setPassword($util->generarCodigo(8));
        $asociado->actualizar();*/
        $email->setAsunto("ACCESO A PERFIL COLEGIADO");
        $email->setCorreo($item['email']);
        $email->setNombreReceptor($item['apellidos'] . " " . $item['nombres']);
        $host= $_SERVER["HTTP_HOST"];
        $url_server = "http://" . $host . "/clientes/ctsp.xi";
        $url_email = $url_server ."/intranet/plantilla_emails/emaul_usuario_masivo.php?idasociado=" . $item['id_asociado'];
        $email->setUrl($url_email);
        //echo $url_email;
        $email->EnviarEmail();
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
        $host= $_SERVER["HTTP_HOST"];
        $url_server = "http://" . $host . "/clientes/ctsp.xi";
        $url_email = $url_server ."/intranet/plantilla_emails/emaul_usuario_masivo.php?idasociado=" . $item['id_asociado'];
        $email->setUrl($url_email);
        //echo $url_email;
        $email->EnviarEmail();
    }
}