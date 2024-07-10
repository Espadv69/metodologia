<?php
// CONNECTION
require_once "./conn.php";

// VARIABLES
$nombre = $_POST["nombre"];
$id = $_POST["id"];
$apto = $_POST["apto"];

// SQL
$sql = "INSERT INTO notas(nombre, id, apto) VALUES (
    '$nombre',
    '$id',
    '$apto'
)";

// INSERT INTO
$insert = mysqli_query($conn, $sql);