<?php
require '../../models/SolicitudHabilidad.php';
require '../../models/BancoMovimiento.php';
require '../../models/Asociado.php';

$solicitud = new SolicitudHabilidad();
$asociado = new Asociado();
$movimiento = new BancoMovimiento();

$asociado->setIdAsociado(filter_input(INPUT_POST, 'inputIdAsociado'));
$asociado->obtenerDatos();

$movimiento->generarCodigo();
$movimiento->setFecha(filter_input(INPUT_POST, 'inputFechaSolicitud'));
$movimiento->setIngresa(filter_input(INPUT_POST, 'inputMontoPagado'));
$movimiento->setSale(0);
$movimiento->setConcepto("PAGO DE SOLICITUD DE CONSTANCIA DEL ASOCIADO CON CTSP: " . $asociado->getCtsp());
$movimiento->setIdBanco(filter_input(INPUT_POST, 'selectDestino'));
$movimiento->insertar();

$solicitud->generarCodigo();
$solicitud->setIdAsociado($asociado->getIdAsociado());
$solicitud->setFechaSolicitud(filter_input(INPUT_POST, 'inputFechaSolicitud'));
$solicitud->setFechaUltimoPago(filter_input(INPUT_POST, 'inputUltimoPago'));
$solicitud->setPago(filter_input(INPUT_POST, 'inputMontoPagado'));
$solicitud->setEstado(1);
$solicitud->setVoucher(filter_input(INPUT_POST, 'inputFechaSolicitud'));
$solicitud->insertar();

header("Location: ../contents/enviar_constancia_habilitado.php?idSolicitud=" . $solicitud->getIdSolicitud());