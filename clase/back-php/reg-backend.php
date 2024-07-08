<?php 
// VARIABLES
$nombre = $_POST["nombre"];
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$pass = $_POST["pass"];

// INSERT
$sql = ("INSERT INTO sesion(nombre, usuario, email, pass) VALUES (
    '$nombre',
    '$usuario',
    '$email',
    '$pass'
)");