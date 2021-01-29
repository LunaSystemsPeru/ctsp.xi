<?php
session_start();
var_dump($_SESSION);
if (!isset($_SESSION['idasociado'])) {
    header("Location: login.php");
}
header("Location: perfil.php");