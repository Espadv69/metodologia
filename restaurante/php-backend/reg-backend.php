<?php 
// CONNECTION
require_once "./conn.php";

// VARIABLES
$nombre = $_POST["nombre"];
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$pass = hash("sha512", $pass);

$sql = "INSERT INTO sesion(nombre, usuario, email, pass) VALUES (
    '$nombre',
    '$usuario',
    '$email',
    '$pass'
)";

$check_user = mysqli_query($conn, "SELECT * FROM sesion WHERE usuario='$usuario'");
if(mysqli_num_rows($check_user) > 0) {
    echo "
    <script>
        alert('usuario existente');
        window.location = '../php/register.php';
    </script>";
    exit;
}

$insert = mysqli_query($conn, $sql);