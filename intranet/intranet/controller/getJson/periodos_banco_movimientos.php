<?php
require '../../../models/BancoMovimiento.php';
$movimientos = new BancoMovimiento();

$movimientos->setIdBanco(filter_input(INPUT_GET, 'idbanco'));
$anio = filter_input(INPUT_GET, 'anio');

$aperiodo = $movimientos->verPeriodos($anio);
foreach ($aperiodo as $item) {
    echo '<option value="'.$item['periodo'] .'">'.$item['periodo'] .'</option>';
}
