<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eliminar</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <?php require_once "../layout/header.php" ?>
        <h4>Eliminar Alumno</h4>
        <form action="../back-php/eliminar-backend.php" method="post" class="form-delete-modify">
            <label for="id">Id</label>
            <input type="text" id="id" name="id">
            <button>Eliminar</button>
        </form>
        <?php require_once "../layout/footer.php" ?>
    </body>
</html>