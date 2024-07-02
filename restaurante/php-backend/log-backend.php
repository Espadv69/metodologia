<?php 
require_once "./conn.php";
$email = $_POST["email"];
$pass = $_POST["pass"];
$pass = hash("sha512", $pass);

$begin = mysqli_query($conn, "SELECT * FROM sesion WHERE email='$email' AND pass='$pass'");

if(mysqli_num_rows($begin) > 0) {
    header("location: ../php/home.php");
    exit;
} else {
    echo "
    <script>
        alert('cannot access');
        window.location = '../php/register.php';
    </script>
    ";
}