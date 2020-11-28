<?php
require '../../models/Curso.php';
$curso = new Curso();

$curso->generarCodigo();
$curso->setNombre(filter_input(INPUT_POST, 'input_nombre'));
$curso->setProfesor(filter_input(INPUT_POST, 'input_profesor'));
$curso->setMonto(filter_input(INPUT_POST, 'input_monto'));
$curso->setFecha(filter_input(INPUT_POST, 'input_fecha'));
$curso->setIdModalidad(filter_input(INPUT_POST, 'select_modalidad'));
$curso->setLugar(filter_input(INPUT_POST, 'input_lugar'));
$curso->setIdUsuario(filter_input(INPUT_POST, 'hidden_usuario'));

$curso->insertar();

header("Location: ../contents/ver_cursos.php");