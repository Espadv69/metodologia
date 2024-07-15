<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificar</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>

        <?php require_once "../layout/header.php" ?>    

        <h4>Modificar Alumno</h4>
        <form action="../back-php/modificar-backend.php" method="post" class="form-delete-modify">
            <label for="id">ID</label>
            <input type="text" name="id" id="id" required>
            <button>Modificar</button>
        </form>

        <?php require_once "../layout/footer.php" ?> 

    </body>
</html>