<?php
require '../../../models/Asociado.php';

$asociado = new Asociado();

$asociado->setEstado(1);
$termino = filter_input(INPUT_GET, 'term');

$respuesta = $asociado->getAsociadosJson($termino);

$arrayrespuesta = Array();

foreach ($respuesta as $item) {
    $arrayrespuesta[] = [
        "value" => $item['apellidos']. " " . $item['nombre'],
    "idasociado" => $item['id_asociado']
    ];
}

echo json_encode($arrayrespuesta);