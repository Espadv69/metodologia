<?php 
// CONNECTION
require_once "./conn.php";

// VARIABLES
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$numero_cuenta = $_POST["numero_cuenta"];
$cvv = $_POST["cvv"];
$caducidad = $_POST["caducidad"];
$cursos = $_POST["cursos"];

// INSERT INTO TABLE
$sql = mysqli_query($conn, "INSERT INTO compra(nombre, email, numero_cuenta, cvv, caducidad, cursos) VALUES (
    '$nombre',
    '$email',
    '$numero_cuenta',
    '$cvv',
    '$caducidad',
    '$cursos'
)");

echo "
<script>
    alert('comprado con éxito ✅ redirigiendo...');
    window.location = '../php/home.php';
</script>";