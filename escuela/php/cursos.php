<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cursos</title>
        <link rel="stylesheet" href="../css/style.css">
        <style>
            body {
                background-color: #121212;
            }
        </style>
    </head>
    <body>
        <?php require_once "../layout/header.php" ?>
        <h4>SELECCIONE SU CURSO</h4>
        <form action="../back-php/cursos-backend.php" method="post" class="form-cursos">
            <input type="text" name="nombre" placeholder="Ingrese su nombre" required maxlength="20">
            <input type="email" name="email" placeholder="nombre@ejemplo.com" required maxlength="30">

            <div class="form-cursos-cuenta">
                <input type="number" name="numero_cuenta" placeholder="Número de cuenta" maxlength="20">
                <input type="number" name="cvv" placeholder="CVV" maxlength="3">
            </div>

            <label for="date">Caducidad</label>
            <input type="date" name="caducidad" id="date">

            <select name="cursos" required>
                <option disabled selected>Cursos</option>
                <option value="HTML 50€">HTML</option>
                <option value="CSS 75€">CSS</option>
                <option value="JS 100€">JS</option>
                <option value="PHP 90€">PHP</option>
            </select>

            <div class="btn-cursos">
                <button><i class="bi bi-cart-check-fill"></i> Comprar</button>
                <button type="reset"><i class="bi bi-trash-fill"></i> Borrar</button>
            </div>
        </form>
    </body>
</html>