<?php 
// CONNECTION
require_once "./conn.php";

// CHECK FUNCTION
$check_table = mysqli_query($conn, "SELECT nombre, apto FROM notas WHERE id='$_REQUEST[id]'");

// DELETE CONDITIONAL
if($row = mysqli_fetch_array($check_table)) {
    mysqli_query($conn, "DELETE FROM notas WHERE id='$_REQUEST[id]'");
    echo "
    <script>
        alert('Se eliminó con éxito✔️ Redirigiendo...');
        window.location = '../php/eliminar.php';
    </script>";
    exit;
} else {
    echo "
    <script>
        alert('No existe el usuario💀 Redirigiendo...');
        window.location = '../php/eliminar.php';
    </script>";
    exit;
}
