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

// CHECK USER
$check_user = mysqli_query($conn, "SELECT * FROM sesion WHERE usuario='$usuario'");

if(mysqli_num_rows($check_user) > 0) {
    echo "
    <script>
        alert('Usuario existente❗');
        window.location = '../php/reg.php';
    </script>";
    exit;
}

// INSERT INTO TABLE
$insert = mysqli_query($conn, $sql);


