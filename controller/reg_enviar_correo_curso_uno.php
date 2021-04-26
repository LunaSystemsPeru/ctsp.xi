<?php
require '../intranet/models/CursosParticipante.php';
require '../intranet/models/Curso.php';
require '../intranet/tools/Util.php';
require '../intranet/tools/Email.php';

$participantes = new CursosParticipante();
$curso = new Curso();
$util = new Util();
$email = new Email();

$participantes->setIdParticipante(filter_input(INPUT_GET, 'idparticipante'));
$participantes->obtenerDatos();

$curso->setIdCurso($participantes->getIdCurso());
$curso->obtenerDatos();

$email->setAsunto("REGISTRO AL CURSO: " . strtoupper($curso->getNombre()));
$email->setCorreo($participantes->getEmail());
$email->setNombreReceptor($participantes->getApellido() . " " . $participantes->getNombre());
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$email->setUrl("http://" . $host . $url."/../intranet/plantilla_emails/email_inscripcion_curso.php?idparticipante=" . $participantes->getIdParticipante());
$email->EnviarEmail();