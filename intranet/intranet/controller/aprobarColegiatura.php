<?php
require '../../models/Asociado.php';

$asociado = new Asociado();

$asociado->setIdAsociado(filter_input(INPUT_POST, 'hidden_idasociado'));
$asociado->setFechaInscripcion(filter_input(INPUT_POST, 'input_fecha_aprovacion'));
$asociado->setCtsp(filter_input(INPUT_POST, 'input_codigoctsp'));

$asociado->aprobarColegiatura();

header("Location: ../contents/ver_asociados_pendientes.php");