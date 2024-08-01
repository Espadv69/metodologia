<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Medidas</title>
        <link rel="stylesheet" href="../css/style.css">
        <style>
            .table-container {
                padding: 1.5rem;
                width: 100%;
                max-width: 900px;
                margin: 0 auto;
                border-radius: 1rem;
                overflow-x: auto; /* Añade scroll horizontal si es necesario */
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                backdrop-filter: blur(10px);
            }

            table {
                width: 100%;
                border-collapse: collapse;
                min-width: 500px; /* Asegura que la tabla no se reduzca demasiado */
            }

            th, td {
                border: 1px solid #ddd;
                padding: 0.75rem;
                text-align: center;
                font-weight: bold;
            }

            th {
                background-color: #0066ff;
                color: white;
                text-transform: uppercase;
                letter-spacing: 0.05em;
            }

            td {
                font-weight: normal;
                padding: 1rem;
            }

            input[type="text"] {
                width: 100%;
                padding: 0.5rem;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 1rem;
            }

            input[type="text"]:focus {
                border-color: #0066ff;
                outline: none;
                box-shadow: 0 0 5px rgba(0, 102, 255, 0.5);
            }
        </style>
    </head>
    <body>
        <?php require_once "../layout/header.php" ?>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Altura</th>
                        <th>Peso</th>
                        <th>Cuello</th>
                        <th>Hombros</th>
                        <th>Pecho</th>
                        <th>Brazo</th>
                        <th>AnteBrazo</th>
                        <th>Cintura</th>
                        <th>Caderas</th>
                        <th>Muslos</th>
                        <th>Pant</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
