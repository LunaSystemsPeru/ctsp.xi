<?php
require '../../models/CursosParticipante.php';

$participante = new CursosParticipante();
$participante->setIdParticipante(filter_input(INPUT_POST, 'input_idparticipante'));

