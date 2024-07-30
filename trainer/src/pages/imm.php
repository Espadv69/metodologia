<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMM</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php require_once "../layout/header.php" ?>
    <h2 class="h2">Calculadora de Índice de Masa Muscular (IMM)</h2>
    <form id="immForm" class="immForm">
        <label for="weight">Peso (kg):</label>
        <input type="number" id="weight" required>

        <label for="height">Altura (cm):</label>
        <input type="number" id="height" required>

        <label for="gender">Género:</label>
        <select id="gender" required>
            <option value="male">Masculino</option>
            <option value="female">Femenino</option>
        </select>

        <button type="submit">Calcular IMM</button>
    </form>
    
    <p id="result" class="result"></p>

    <script src="../js/imm.js"></script>
</body>
</html>
