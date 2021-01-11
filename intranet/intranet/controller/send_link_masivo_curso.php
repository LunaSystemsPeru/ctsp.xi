<?php
require '../../models/CursosParticipante.php';
require '../../models/Curso.php';
require '../../tools/Email.php';

$participante = new CursosParticipante();
$curso = new Curso();
$email = new Email();

$curso->setIdCurso(filter_input(INPUT_GET, 'idcurso'));
$curso->obtenerDatos();

$participante->setIdCurso($curso->getIdCurso());
$apagaron = $participante->verPagaron();

$itemnro = 0;
foreach ($apagaron as $item) {
    $itemnro++;
   $email->setAsunto("ACCESO ZOOM AL CURSO: " . strtoupper($curso->getNombre()));
    $email->setCorreo($item['email']);
    $email->setNombreReceptor($item['apellidos'] . " " . $item['nombres']);
    $host= $_SERVER["HTTP_HOST"];
    $url_server = "http://" . $host . "/clientes/ctsp.xi";
    $url_email = $url_server ."/intranet/plantilla_emails/email_link_curso.php?idparticipante=" . $item['id_participante'];
    $email->setUrl($url_email);
    //echo $url_email;
    $email->EnviarEmail();
}