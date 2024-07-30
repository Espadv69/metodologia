<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora de IMC</title>
        <link rel="stylesheet" href="../css/style.css">
        <style>
            table { margin: 5dvh auto; width: 100%; max-width: 750px; border-collapse: collapse; margin-top: 20px; }
            th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        </style>
    </head>
    <body>
        <?php require_once "../layout/header.php" ?>

        <h2 class="h2">Calculadora de Índice de Masa Corporal (IMC)</h2>
        <form id="bmiForm" class="immForm">
            <label for="name">Nombre:</label>
            <input type="text" id="name" required>

            <label for="weight">Peso (kg):</label>
            <input type="number" id="weight" required>

            <label for="height">Altura (cm):</label>
            <input type="number" id="height" required>

            <button type="submit">Calcular IMC</button>
        </form>

        <table id="resultsTable">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Peso (kg)</th>
                    <th>Altura (cm)</th>
                    <th>IMC</th>
                    <th>Categoría</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        <script src="../js/imc.js"></script>
    </body>
</html>