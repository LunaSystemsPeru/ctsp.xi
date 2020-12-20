<?php
require '../../../models/Asociado.php';

$asociado = new Asociado();

$asociado->setCtsp(filter_input(INPUT_POST, 'inputCTSP'));
$asociado->validarCTSP();

$aresultado = Array();

if ($asociado->getIdAsociado()) {
    $asociado->obtenerDatos();

    $date1 = new DateTime($asociado->getUltimoPago());
    $date2 = new DateTime(date("Y-m-d"));
    $diff = $date1->diff($date2);

    $diasdesdepago = $diff;

    $aresultado = [
        "success" => true,
        "idasociado" => $asociado->getIdAsociado(),
        "ctsp" => $asociado->getCtsp(),
        "apellidos" => $asociado->getApellido(),
        "nombres" => $asociado->getNombre(),
        "domicilio" => $asociado->getDomicilio(),
        "trabajo" => $asociado->getCentroTrabajo(),
        "fechanacimiento" => $asociado->getFechaNac(),
        "ultimopago" => $asociado->getUltimoPago(),
        "diasdiferencia" => $diasdesdepago
    ];

} else {
    $aresultado = [
        "success" => false
    ];
}

echo json_encode($aresultado);