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
        <h4>SELECCIONE SU CURSO</h4>
        <form action="" class="form-cursos">
            <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
            <input type="email" name="email" placeholder="nombre@ejemplo.com" required>
            <select name="select" required>
                <option disabled selected name="cursos">Cursos</option>
                <option value="HTML 50€">HTML</option>
                <option value="CSS 75€">CSS</option>
                <option value="JS 100€">JS</option>
                <option value="PHP 90€">PHP</option>
            </select>
            <div class="btn-cursos">
                <button><i class="bi bi-cart-check-fill"></i> Comprar</button>
                <button type="reset"><i class="bi bi-trash-fill"> </i>Borrar</button>
            </div>
        </form>
    </body>
</html>