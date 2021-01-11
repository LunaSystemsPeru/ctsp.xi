<?php
session_start();
require '../../models/Asociado.php';

$asociado = new Asociado();

$asociado->setEmail(filter_input(INPUT_POST, 'inputEmail'));
$password = filter_input(INPUT_POST, 'inputPassword');

if ($asociado->validarEmail()) {
    $asociado->obtenerDatos();
    if ($asociado->getPassword() == $password) {
        $_SESSION['idasociado'] = $asociado->getIdAsociado();
        header("Location: ../contents/index.php");
    } else {
        //contraseña incorrecta
        header("Location: ../contents/login.php?error=2");
    }
} else {
    //no existe email
    header("Location: ../contents/login.php?error=1");
}