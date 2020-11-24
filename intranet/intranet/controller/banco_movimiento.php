<?php
require '../../models/BancoMovimiento.php';

$movimiento = new BancoMovimiento();
$movimiento->generarCodigo();
$movimiento->setFecha(filter_input(INPUT_POST, 'input_fecha'));
$movimiento->setConcepto(filter_input(INPUT_POST, 'input_descripcion'));
$movimiento->setIdBanco(filter_input(INPUT_POST, 'hidden_banco'));
$monto = filter_input(INPUT_POST, 'input_monto');
$tipo = filter_input(INPUT_POST, 'select_tipo');
if ($tipo == "i") {
    $movimiento->setIngresa($monto);
    $movimiento->setSale(0);
}
if ($tipo == "s") {
    $movimiento->setIngresa(0);
    $movimiento->setSale($monto);
}
$movimiento->insertar();

header("location: ../contents/ver_banco_movimiento.php?idbanco=" . $movimiento->getIdBanco());