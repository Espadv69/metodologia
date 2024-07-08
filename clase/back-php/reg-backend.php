<?php 
// CONNECTION
require_once "./conn.php";

// VARIABLES
$nombre = $_POST["nombre"];
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$pass = $_POST["pass"];

// INSERT VARIABLE
$sql = ("INSERT INTO sesion(nombre, usuario, email, pass) VALUES (
    '$nombre',
    '$usuario',
    '$email',
    '$pass'
)");

// INSERT INTO TABLE
$insert = mysqli_query($conn, $sql);


