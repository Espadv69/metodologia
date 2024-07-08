<?php 
// CONNECTION
require_once "./conn.php";

// VARIABLES
$email = $_POST["email"];
$pass = $_POST["pass"];

// BEGIN
$begin = mysqli_query($conn, "SELECT * FROM sesion WHERE email='$email' AND pass='$pass'");

if(mysqli_num_rows($begin) > 0) {
    header("location: ../php/home.php");
    exit;
} else {
    echo "
    <script>
        alert('Email o contraseña inconrrectos❗');
        window.location = '../index.php';
    </script>";
}