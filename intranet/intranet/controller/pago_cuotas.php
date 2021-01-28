<?php
require '../../models/Cuota.php';
require '../../models/BancoMovimiento.php';
require '../../models/Asociado.php';

$cuota = new Cuota();
$asociado = new Asociado();
$movimiento = new BancoMovimiento();

$asociado->setIdAsociado(filter_input(INPUT_POST, 'inputIdAsociado'));
$asociado->obtenerDatos();

$movimiento->generarCodigo();
$movimiento->setFecha(filter_input(INPUT_POST, 'inputFechaPago'));
$movimiento->setIngresa(filter_input(INPUT_POST, 'inputMontoPagar'));
$movimiento->setSale(0);
$movimiento->setConcepto("PAGO DE CUOTAS DEL ASOCIADO CON CTSP: " . $asociado->getCtsp());
$movimiento->setIdBanco(filter_input(INPUT_POST, 'selectDestino'));
$movimiento->insertar();

$cuota->generarCodigo();
$cuota->setIdAsociado($asociado->getIdAsociado());
$cuota->setFecha($movimiento->getFecha());
$cuota->setMonto(filter_input(INPUT_POST, 'inputMontoPagar'));
$cuota->setNota(filter_input(INPUT_POST, 'inputNroOperacion'));
$cuota->setIdMovimiento($movimiento->getIdMovimiento());
$cuota->setNrocuotas(filter_input(INPUT_POST, 'inputNroCuotas'));
$cuota->setPeriodoInicial(filter_input(INPUT_POST, 'inputPeriodoPago'));
$cuota->insertar();

//actualizar datos
//si es nuevo sumar meses a fecha de inscripcion
//si ya pago antes agregar nro de cuotas a fecha d ultimo pago
//$asociado->setUltimoPago();

header("Location: ../contents/reg_pago_cuotas.php");
