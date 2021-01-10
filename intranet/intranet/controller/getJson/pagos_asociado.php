<?php
require '../../../models/Cuota.php';
require '../../../models/Asociado.php';

$asociado = new Asociado();
$cuota = new Cuota();

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
        <th>Nro Meses</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($acuotas as $item) {
        ?>
        <tr>
            <td class="text-center"><?php echo $item['fecha'] ?></td>
            <td class="text-right">S/ <?php echo number_format($item['monto'], 2) ?></td>
            <td class="text-right"><?php echo $item['nrocuotas'] ?></td>
        </tr>
        <?php
    }
    ?>

    </tbody>
</table>

