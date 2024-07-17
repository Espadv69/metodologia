<?php
// WORKING WITH OBJECTS
ob_start();

// REQUIRE HORARIO-BACKEND
require_once "./horario-backend.php";

// CONDITION
$nombres = htmlentities($_POST["nombres"]);
$apellidos = htmlentities($_POST["apellidos"]);
$horario = htmlentities($_POST["horario"]);
$programas = addslashes(implode(', ', $_POST['programas']));

$query = $db -> prepare("INSERT INTO personal(`nombres`, `apellidos`, `horario`, `programas`) VALUES (:nombres, :apellidos, :horario, :programas)");

$query -> bindParam(":nombres", $nombres);
$query -> bindParam(":apellidos", $apellidos);
$query -> bindParam(":horario", $horario);
$query -> bindParam(":programas", $programas);

$query -> execute();

header("location: ../php/horario.php");