<?php 
// CONNECTION
require_once "./conn.php";

// CHECK TABLE
$check_table = mysqli_query($conn, "SELECT * FROM notas WHERE id='$_REQUEST[id]'");

// IF CONDITIONAL
if($row = mysqli_fetch_array($check_table)) {

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificar</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <form action="./modificar2-backend.php" method="post" class="form-delete-modify">
            <label for="notaNueva">Identificación del alumno</label>
            <input type="text" name="notaNueva" id="notaNueva" value="<?php echo $row['id'] ?>">
            <input type="hidden" name="nota" value="<?php echo $row['id'] ?>">
            <button>Modificar Nota</button>
        </form>

        <?php } else {
            echo "
            <script>
                alert('Este alumno no existe');
                window.location = './modificar-backend.php';
            </script>";
        } ?>
    </body>
</html>