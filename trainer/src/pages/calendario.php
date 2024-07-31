<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario de Entrenador</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        h1 {
            text-align: center;
            color: #131313;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 10px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            min-width: 100px;
        }

        th {
            background-color: #0066ff;
            color: white;
        }

        .day {
            background: transparent;
            font-weight: bold;
        }

        .session {
            padding: 5px;
        }

        @media screen and (max-width: 730px) {
            table, thead, tbody, th, td, tr {
                display: block;
                color: whitesmoke;
            }

            tr {
                margin-bottom: 15px;
            }

            td {
                position: relative;
                text-align: right;
            }

            td:before {
                position: absolute;
                top: 50%;
                left: 10px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                transform: translateY(-50%);
                content: attr(data-label);
                font-weight: bold;
            }

            th {
                display: none;
            }
        }
    </style>
</head>
<body>
    <?php require_once "../layout/header.php" ?>
    <div class="container">
        <h1>Calendario de Entrenador</h1>
        <table>
            <thead>
                <tr>
                    <th>Hora</th>
                    <th>Lunes</th>
                    <th>Martes</th>
                    <th>Miércoles</th>
                    <th>Jueves</th>
                    <th>Viernes</th>
                    <th>Sábado</th>
                    <th>Domingo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="day" data-label="Hora">8:00 - 9:00</td>
                    <td class="session" data-label="Lunes">Yoga</td>
                    <td class="session" data-label="Martes">HIIT</td>
                    <td class="session" data-label="Miércoles">Descanso</td>
                    <td class="session" data-label="Jueves">Cardio</td>
                    <td class="session" data-label="Viernes">Pesas</td>
                    <td class="session" data-label="Sábado">Natación</td>
                    <td class="session" data-label="Domingo">Ciclismo</td>
                </tr>
                <tr>
                    <td class="day" data-label="Hora">10:00 - 11:00</td>
                    <td class="session" data-label="Lunes">Pesas</td>
                    <td class="session" data-label="Martes">Yoga</td>
                    <td class="session" data-label="Miércoles">HIIT</td>
                    <td class="session" data-label="Jueves">Descanso</td>
                    <td class="session" data-label="Viernes">Cardio</td>
                    <td class="session" data-label="Sábado">Ciclismo</td>
                    <td class="session" data-label="Domingo">Natación</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
