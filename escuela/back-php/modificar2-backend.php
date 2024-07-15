<?php
// CONNECTION
require_once "./conn.php";

// UPDATE TABLE
$update = mysqli_query($conn, "UPDATE notas SET id='$_REQUEST[notaNueva]' WHERE id='$_REQUEST[nota]'");

if($update) {
    echo "
    <script>
        alert('El usuario fue modificado');
        window.location = '../php/modificar.php';
    </script>";
}
