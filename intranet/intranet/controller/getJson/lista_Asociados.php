<?php
require '../../../models/Asociado.php';

$asociado = new Asociado();

$asociado->setEstado(1);
$termino = filter_input(INPUT_GET, 'term');

$respuesta = $asociado->getAsociadosJson($termino);

$arrayrespuesta = array();

foreach ($respuesta as $item) {
    $arrayrespuesta[] = [
        "value" => $item['apellidos'] . " " . $item['nombres'],
        "idasociado" => $item['id_asociado'],
        "nroctsp" => $item['ctsp']
    ];
}

echo json_encode($arrayrespuesta);