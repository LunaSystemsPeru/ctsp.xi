<?php
require '../../../models/Asociado.php';

$asociado = new Asociado();

$asociado->setCtsp(filter_input(INPUT_POST, 'inputCTSP'));
$asociado->validarCTSP();

$aresultado = array();

if ($asociado->getIdAsociado()) {
    $asociado->obtenerDatos();

    $date1 = new DateTime($asociado->getUltimoPago());
    $date2 = new DateTime(date("Y-m-d"));
    $diff = $date2->diff($date1);

    $fecha_actual = strtotime(date("d-m-Y"));
    $fecha_entrada = strtotime($asociado->getUltimoPago());

    if ($fecha_actual < $fecha_entrada) {
        $diasdesdepago = 0;
    } else {
        $diasdesdepago = $diff->days;
    }

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