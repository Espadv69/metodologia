<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estado</title>
        <link rel="stylesheet" href="../css/style.css">
        <style>
            table {
                margin: auto;
                margin-top: 10vh;
                margin-bottom: 10vh;
                width: 80%;
                border-collapse: collapse;
            }
            th, td {
                text-align: center;
                border: 2px solid #0066ff50;
                padding: 1rem;
            }
            th {
                background-color: #0066ff;
                color: whitesmoke;
            }
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            /* Estilos para pantallas pequeñas */
            @media (max-width: 600px) {
                table, thead, tbody, th, td, tr {
                    display: block;
                    width: 100%;
                }
                thead tr {
                    display: none;
                }
                tr {
                    margin-bottom: 1rem;
                    border: 1px solid #dddddd;
                }
                td {
                    text-align: right;
                    padding-left: 50%;
                    position: relative;
                }
                td::before {
                    content: attr(data-label);
                    position: absolute;
                    left: 0;
                    width: 50%;
                    padding-left: 1rem;
                    font-weight: bold;
                    text-align: left;
                }
            }

            .btn {
                display: flex;
                justify-content: center;
                gap: 1rem;

                button {
                    text-transform: uppercase;
                    border-radius: .5rem;
                    cursor: pointer;
                    padding: 1rem;
                    font-weight: bold;
                    border: 2px solid #0066ff;
                    color: #0066ff;
                    background: transparent;
                    margin-bottom: 20vh;
                }
            }
        </style>
    </head>
    <body>
        <?php require_once "../layout/header.php" ?>
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Unidad</th>
                    <th>Concepto</th>
                    <th>Costo</th>
                    <th>Gasto</th>
                    <th>Importe</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="fecha" data-label="Fecha"></td>
                    <td class="unidad" data-label="Unidad"></td>
                    <td class="concepto" data-label="Concepto"></td>
                    <td class="costo" data-label="Costo"></td>
                    <td class="gasto" data-label="Gasto"></td>
                    <td class="importe" data-label="Importe"></td>
                    <td class="saldo" data-label="Saldo"></td>
                </tr>
            </tbody>
        </table>

        <div class="btn">
            <button type="button" onclick="estado()">Añadir</button>
            <button type="button" onclick="table()">Descargar</button>
        </div>

        <?php require_once "../layout/footer.php" ?>
        <script src="../js/estado.js"></script>
    </body>
</html>