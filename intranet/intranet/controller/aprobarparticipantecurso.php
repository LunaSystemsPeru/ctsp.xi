<?php
require '../../models/CursosParticipante.php';
require '../../models/Curso.php';
require '../../models/BancoMovimiento.php';

$participante = new CursosParticipante();
$participante->setIdParticipante(filter_input(INPUT_POST, 'mpago_inputIdParticipante'));
$participante->obtenerDatos();

$curso = new Curso();
$curso->setIdCurso($participante->getIdCurso());
$curso->obtenerDatos();

$movimiento = new BancoMovimiento();
$movimiento->generarCodigo();
$movimiento->setFecha(date("Y-m-d"));
$movimiento->setIngresa($curso->getMonto());
$movimiento->setSale(0);
$movimiento->setConcepto("POR EL PAGO DEL CURSO DE FECHA : " . $curso->getFecha() . " por " . $participante->getNroDocumento());
$movimiento->setIdBanco(filter_input(INPUT_POST, 'selectDestino'));
$movimiento->insertar();

$participante->setVerificado(1);
$participante->setIdMovimiento($movimiento->getIdMovimiento());
$participante->actualizar();

header("Location: ../contents/ver_cursos_detalle.php?idcurso=" . $curso->getIdCurso());
