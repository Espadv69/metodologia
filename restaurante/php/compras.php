<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compras</title>
        <link rel="icon" type="image/png" href="../img/1.png">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
    <?php require_once "../layout/header.php"; ?>

    <h2>COMPRAS DE LA SEMANA</h2>
    <table class="table-compras">
        <thead>
            <tr>
                <th></th>
                <th>LUNES</th>
                <th>MARTES</th>
                <th>MIÉRCOLES</th>
                <th>JUEVES</th>
                <th>VIERNES</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="empty">Productos:</td>
                <td class="lunes"></td>
                <td class="martes"></td>
                <td class="miercoles"></td>
                <td class="jueves"></td>
                <td class="viernes"></td>
            </tr>
            <tr>
                <td class="empty">Coste:</td>
                <td class="lunes_c"></td>
                <td class="martes_c"></td>
                <td class="miercoles_c"></td>
                <td class="jueves_c"></td>
                <td class="viernes_c"></td>
            </tr>            
        </tbody>
    </table>

    <div class="botones-compras">
        <button onclick="compras()" type="button">Compras</button>
    </div>

    <div class="div-print-cost">
        <p class="print-cost"></p>
    </div>
    <script src="../js/main.js"></script>
    </body>
</html>