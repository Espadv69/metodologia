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

        <h4>Tabla estudiante</h4>
        <table class="table-notas">
            <thead>
                <tr>
                    <th>Notas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tres_notas"></td>
                </tr>
            </tbody>
        </table>
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
                    <td class="modulo"></td>
                    <td class="hora_modulo"></td>
                    <td class="nota"></td>
                </tr>
            </tbody>
        </table>

        <div class="btn-notas">
            <button onclick="media()">Add</button>
            <button onclick="reset()">Reset</button>
        </div>

        <form action="../back-php/reg-notas-backend.php" method="post" class="form-reg-notas">
            <input type="text" placeholder="Ingrese alumno" required>
            <input type="text" placeholder="Ingrese identificación" required>
            <label for="select">Calificación</label>
            <select name="" id="select" required>
                <option disabled selected>Opciones</option>
                <option value="Apto">Apto ✔️</option>
                <option value="No_Apto">No apto ❌</option>
            </select>
            <div class="btn-notas2">
                <button>Enviar</button>
                <button type="reset">Borrar</button>
            </div>
        </form>
        <?php require_once "../layout/footer.php" ?>
        <script src="../js/notas.js"></script>
    </body>
</html>