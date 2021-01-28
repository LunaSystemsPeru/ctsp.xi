<?php
require '../../../models/Cuota.php';
require '../../../models/Asociado.php';
require '../../../tools/Util.php';

$asociado = new Asociado();
$cuota = new Cuota();
$util = new Util();

$asociado->setCtsp(filter_input(INPUT_POST, 'inputCTSP'));
$asociado->validarCTSP();

$cuota->setIdAsociado($asociado->getIdAsociado());
$acuotas = $cuota->verPagos();

?>

<table class="table " style="width:100%">
    <thead>
    <tr>
        <th>Fecha</th>
        <th>Monto</th>
        <th>Periodo Inicial</th>
        <th>Periodo Final</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($acuotas as $item) {
        ?>
        <tr>
            <td class="text-center"><?php echo $item['fecha'] ?></td>
            <td class="text-right"><?php echo number_format($item['monto'], 2) ?></td>
            <td class="text-center"><?php echo $util->fecha_periodo($item['periodo_inicio']) ?></td>
            <td class="text-center"><?php echo $util->fecha_periodo($item['pagado']) ?></td>
        </tr>
        <?php
    }
    ?>

    </tbody>
</table>

