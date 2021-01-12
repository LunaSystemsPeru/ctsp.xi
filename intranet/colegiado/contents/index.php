<?php
session_start();
if (!isset($_SESSION['idasociado'])) {
    header("Location: login.php");
}
header("Location: perfil.php");