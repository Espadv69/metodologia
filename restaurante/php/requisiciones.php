<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Requisiciones</title>
        <link rel="icon" type="image/png" href="../img/1.png">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <!-- NAVBAR -->
        <?php require_once "../layout/header.php" ?>

        <div class="head-requi">
            <h3>Productos perecederos</h3>
        </div>

        <p class="p-requi">¿Cuántos Kg se caducarón?</p>
        <form action="../php-backend/requisiciones-backend.php" method="post" class="form-requi">
            <input type="number" name="pollo" placeholder="Pollo" required>
            <input type="number" name="cerdo" placeholder="Cerdo" required>
            <input type="number" name="vacuno" placeholder="Vacuno" required>
            <input type="number" name="pato" placeholder="Pato" required>
            <input type="number" name="atun" placeholder="Atún" required>
            <input type="number" name="merluza" placeholder="Merluza" required>
            <input type="number" name="gambones" placeholder="Gambones" required>
            <input type="number" name="acelgas" placeholder="Acelgas" required>

            <div>
                <button class="btn">Enviar</button>
                <button type="reset" class="btn btn-reset">Borrar</button>
            </div>
        </form>

    </body>
</html>