<?php
require 'intranet/models/CursosParticipante.php';

$participantes = new CursosParticipante();

$participantes->generarCodigo();
$participantes->setNombre(filter_input(INPUT_POST, 'input_nombres'));
$participantes->setApellido(filter_input(INPUT_POST, 'input_apellidos'));
$participantes->setCelular(filter_input(INPUT_POST, 'input_celular'));
$participantes->setEmail(filter_input(INPUT_POST, 'input_email'));
$participantes->setNroDocumento(filter_input(INPUT_POST, 'input_documento'));
$participantes->set(filter_input(INPUT_POST, 'input_trabajo'));