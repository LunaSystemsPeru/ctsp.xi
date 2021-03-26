<?php

    $id_participante = filter_input(INPUT_GET, 'id_participante');

require '../../models/CursosParticipante.php';
$participante  = new CursosParticipante();
$participante->setIdParticipante($id_participante);//asignar el valor del idparticipante
$participante->eliminar();
header("location:../contents/ver_cursos_detalle.php");

