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

// CHECK ID
$check_id = mysqli_query($conn, "SELECT * FROM notas WHERE id='$id'");
if(mysqli_num_rows($check_id) > 0) {
    echo "
    <script>
        alert('Ya hay una persona con ese número de identificación❌');
        window.location = '../php/reg-notas.php';
    </script>";
    exit;
}

// INSERT INTO
$insert = mysqli_query($conn, $sql);

if($insert) {
    echo "
    <script>
        alert('Alumno registrado con éxito ✔️');
        window.location = '../php/reg-notas.php';
    </script>";
}