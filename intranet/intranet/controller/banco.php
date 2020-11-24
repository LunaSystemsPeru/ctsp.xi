<?php
require '../../models/Banco.php';

$banco = new Banco();

$banco->generarCodigo();
$banco->setNombre(filter_input(INPUT_POST, 'input_nombre'));
$banco->setMonto(filter_input(INPUT_POST, 'input_monto'));
$banco->insertar();

header("Location: ../contents/ver_bancos.php");
