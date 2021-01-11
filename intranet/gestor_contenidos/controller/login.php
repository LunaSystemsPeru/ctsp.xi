<?php
$usuario = filter_input(INPUT_POST, 'inputUsuario');
$pass = filter_input(INPUT_POST, 'inputPassword');

header("Location: ../contents/index.php");