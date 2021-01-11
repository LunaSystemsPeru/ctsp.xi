<?php
session_start();
require '../../models/Usuario.php';

$usuario = new Usuario();

$usuario->setUsuario(filter_input(INPUT_POST, 'inputUsuario'));
$pass_formulario = trim(filter_input(INPUT_POST, 'inputPassword'));

if ($usuario->validarUsuario()) {
    if ($usuario->obtenerDatos()) {
        if ($pass_formulario == $usuario->getPassword()) {
            $_SESSION['_logueado'] = true;
            $_SESSION['idusuario'] = $usuario->getIdUsuario();
            header("Location: ../contents/index.php");
        } else {
            //contraseña incorrecta
            header("Location: ../contents/login.php?error=1");
        }
    }
} else {
    //usuario no existe
    header("Location: ../contents/login.php?error=2");
}
