<?php
// WORKING WITH OBJECTS
ob_start();

// REQUIRE HORARIO-BACKEND
require_once "./horario-backend.php";

// CONDITION
$nombre = htmlentities($_POST["nombres"]);
$apelllidos = htmlentities($_POST["apelllidos"]);
$horario = htmlentities($_POST["horario"]);
$programas = addslashes(implode(', ', $_POST['programas']));

$query = $db -> prepare("INSERT INTO personal(`nombres`, `apellidos`, `horario`, `programas`) VALUES (:nombres, :apellidos, :horario, :programas)");