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
            font-weight: bold;
        }

        th {
            background-color: #0066ff;
            color: white;
        }

        /* Estilos Responsivos */
        @media (max-width: 768px) {
            th, td {
                padding: 5px;
                min-width: 60px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            th, td {
                padding: 5px;
                min-width: 50px;
                font-size: 12px;
            }

            th:nth-child(n+6), td:nth-child(n+6) {
                display: none; /* Oculta Sábado y Domingo en pantallas muy pequeñas */
            }
        }

    </style>
</head>
<body>
    <?php require_once "../layout/header.php" ?>

    <?php
    
        $days_count = date('t');
        $current_day = date('d');
        $week_day_first = date('N', mktime(0, 0, 0, date('m'), 1, date('Y')));

    ?>


    <div class="container">
        <h1>Calendario de Entrenador</h1>
        <table>
            <thead>
                <tr>
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
                <?php for($w = 1 - $week_day_first + 1; $w <= $days_count; $w = $w + 7): ?>
                <tr>
                    <?php $counter = 0 ?>
                    <?php for($d = $w; $d <= $w + 6; $d++): ?>

                        <td style="<?php if($counter > 4){ ?> color: white; background-color: #0066ff40; <?php } ?>
                        <?php if($current_day == $d){ ?> background-color: gray; color: whitesmoke; font-weight: bold; <?php } ?>">
                            <?php echo ($d > 0 ? ($d > $days_count ? '' : $d) : ''); ?>
                        </td>

                    <?php $counter++; endfor ?>
                </tr>
                <?php endfor?>

            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th>Lunes</th>
                    <th>Martes</th>
                    <th>Miercoles</th>
                    <th>Jueves</th>
                    <th>Viernes</th>
                    <th>Sabado</th>
                    <th>Domingo</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Cardio</td>
                <td>Yoga</td>
                <td>Descanso</td>
                <td>Descanso</td>
            </tr>
            <tr>
                <td>Natación</td>
                <td>Spinning</td>
                <td>Pilates</td>
                <td>Boxeo</td>
                <td>Ciclismo</td>
                <td>Descanso</td>
                <td>Senderismo</td>
            </tr>
            <tr>
                <td>CrossFit</td>
                <td>Zumba</td>
                <td>Baloncesto</td>
                <td>HIIT</td>
                <td>Escalada</td>
                <td>Descanso</td>
                <td>Descanso</td>
            </tr>
            <tr>
                <td>Full body</td>
                <td>Fútbol</td>
                <td>Cardio</td>
                <td>Natación</td>
                <td>Pilates</td>
                <td>Descanso</td>
                <td>Descanso</td>
            </tr>
            <tr>
                <td>Ciclismo</td>
                <td>Senderismo</td>
                <td>Descanso</td>
                <td>Escalada</td>
                <td>CrossFit</td>
                <td>Descanso</td>
                <td>Descanso</td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
