<?php
require '../../models/ParametrosDetalle.php';

$detalle = new ParametrosDetalle();

$detalle->generarCodigo();
$detalle->setNombre(filter_input(INPUT_POST, 'input_nombre'));
$detalle->setValor(filter_input(INPUT_POST, 'input_valor'));
$detalle->setIdParametro(filter_input(INPUT_POST, 'hidden_idparametro'));

$detalle->insertar();

header("Location: ../contents/ver_parametros.php?idparametro=" . $detalle->getIdParametro());