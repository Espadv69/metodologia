<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cursos</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <?php require_once "../layout/header.php" ?>
        <form action="" class="form-cursos">
            <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
            <input type="email" name="email" placeholder="nombre@ejemplo.com" required>
            <select name="select" required>
                <option disabled selected name="cursos">Cursos</option>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="JS">JS</option>
                <option value="PHP">PHP</option>
            </select>
            <div class="btn-cursos">
                <button type="reset">Borrar</button>
                <button>Comprar</button>
            </div>
        </form>
        <?php require_once "../layout/footer.php" ?>
    </body>
</html>