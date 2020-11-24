<?php
require '../../models/Asociado.php';

$asociado = new Asociado();

$asociado->generarCodigo();
$asociado->setTipoDocumento(filter_input(INPUT_POST, 'select_tipo_documento'));
$asociado->setDni(filter_input(INPUT_POST, 'input_dni'));
$asociado->setApellido(filter_input(INPUT_POST, 'input_apellidos'));
$asociado->setNombre(filter_input(INPUT_POST, 'input_nombres'));
$asociado->setTipoRegistro(filter_input(INPUT_POST, 'select_tipo_inscripcion'));
$asociado->setEmail(filter_input(INPUT_POST, 'input_email'));
$asociado->setCelular(filter_input(INPUT_POST, 'input_celular'));
$asociado->setDomicilio(filter_input(INPUT_POST, 'input_domicilio'));
$asociado->setFechaNac(filter_input(INPUT_POST, 'input_fec_nac'));
$asociado->setCentroTrabajo(filter_input(INPUT_POST, 'input_trabajo'));
$asociado->setEstado(0);
//0 = pendiente
//1 = aprobado
//2 = rechazado por corregir

//datos en blanco
$asociado->setUltimoPago("1000-01-01");
$asociado->setFechaCertificado("1000-01-01");
$asociado->setFechaInscripcion(date("Y-m-d"));

$asociado->insertar();


