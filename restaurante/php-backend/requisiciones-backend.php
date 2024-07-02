<?php 
// CONNECTION
require_once "./conn.php";

// VARIABLES
$pollo = $_POST["pollo"];
$cerdo = $_POST["cerdo"];
$vacuno = $_POST["vacuno"];
$pato = $_POST["pato"];
$atun = $_POST["atun"];
$merluza = $_POST["merluza"];
$gambones = $_POST["gambones"];
$acelgas = $_POST["acelgas"];

// INSERT INTO TABLE
$insert = mysqli_query($conn, "INSERT INTO caduca(pollo, cerdo, vacuno, pato, atun, merluza, gambones, acelgas) VALUES (
    '$pollo',
    '$cerdo',
    '$vacuno',
    '$pato',
    '$atun',
    '$merluza',
    '$gambones',
    '$acelgas'
)");