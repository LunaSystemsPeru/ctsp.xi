<?php
session_start();
require '../../models/Usuario.php';

$usuario = new Usuario();

$usuario = filter_input(INPUT_POST, 'inputUsuario');
$pass = filter_input(INPUT_POST, 'inputPassword');

if ($usuario->validarUsuario()) {
    if ($usuario->obtenerDatos()) {
        if ($pass == $usuario->getPassword()) {
            if ($usuario->getEstado() == 0) {
                $_SESSION['_logueado'] = true;
                $_SESSION['idusuario'] = $usuario->getIdUsuario();
                header("Location: ../contents/index.php");
            } else {
                //usuario bloqueado
                header("Location: ../contents/login.php?error=2");
            }
        } else {
            //contraseña incorrecta
            header("Location: ../contents/login.php?error=1");
        }
    }
} else {
    //usuario no existe
    header("Location: ../contents/login.php?error=2");
}
