<?php
require '../intranet/models/Asociado.php';

$asociado = new Asociado();

$asociado->setNombre(filter_input(INPUT_POST, 'input_nombres'));
$asociado->setApellido(filter_input(INPUT_POST, 'input_apellidos'));
$asociado->setCtsp(filter_input(INPUT_POST, 'input_ctsp'));

$asociado->buscarAsociado();
