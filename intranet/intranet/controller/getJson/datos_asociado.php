<?php
require '../../../models/Asociado.php';

$asociado = new Asociado();

$asociado->setCtsp(filter_input(INPUT_POST, 'inputCTSP'));
$asociado->validarCTSP();

$aresultado = Array();

if ($asociado->getIdAsociado()) {
    $asociado->obtenerDatos();

    $aresultado = [
        "success" => true,
        "idasociado" => $asociado->getIdAsociado(),
        "ctsp" => $asociado->getCtsp(),
        "apellidos" => $asociado->getApellido(),
        "nombres" => $asociado->getNombre(),
        "domicilio" => $asociado->getDomicilio(),
        "trabajo" => $asociado->getCentroTrabajo(),
        "fechanacimiento" => $asociado->getFechaNac(),
        "ultimopago" => $asociado->getUltimoPago()
    ];

} else {
    $aresultado = [
        "success" => false
    ];
}

echo json_encode($aresultado);