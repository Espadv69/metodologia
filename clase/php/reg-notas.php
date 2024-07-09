<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notas</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <?php require_once "../layout/header.php" ?>
        <table class="table-notas">
            <thead>
                <tr>
                    <th>Módulos</th>
                    <th>Horas Módulos</th>
                    <th>Notas Final</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>item1</td>
                    <td>item2</td>
                    <td>item3</td>
                </tr>
                <tr>
                    <td>item1</td>
                    <td>item2</td>
                    <td>item3</td>
                </tr>
            </tbody>
        </table>
        <div class="btn-notas">
            <button onclick="media()">Add</button>
            <button onclick="reset()">Reset</button>
        </div>
        <?php require_once "../layout/footer.php" ?>
        <script src="../js/notas.js"></script>
    </body>
</html>