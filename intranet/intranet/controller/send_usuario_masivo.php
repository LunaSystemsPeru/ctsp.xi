<?php
require '../../models/Asociado.php';
require '../../tools/Util.php';

$asociado = new Asociado();
$util = new Util();

$asociado->setEstado(0);
$array_asociados_0 = $asociado->verAsociados();

foreach ($array_asociados_0 as $item) {
    if ($item['email'] != "") {
        $asociado->setIdAsociado($item['id_asociado']);
        $asociado->setPassword($util->generarCodigo(8));
        $asociado->actualizar();
    }
}

$asociado->setEstado(1);
$array_asociados_1 = $asociado->verAsociados();

foreach ($array_asociados_1 as $item) {
    if ($item['email'] != "") {
        $asociado->setIdAsociado($item['id_asociado']);
        $asociado->setPassword($util->generarCodigo(8));
        $asociado->actualizar();
    }
}