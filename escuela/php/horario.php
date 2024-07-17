<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Horario</title>
        <link rel="stylesheet" href="../css/style.css">
        <style>
        /* Estilos para el botón */
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Estilos para el modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            animation: fadeIn 0.3s;
        }

        /* Animación de fadeIn */
        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        /* Animación de fadeOut */
        @keyframes fadeOut {
            from {opacity: 1;}
            to {opacity: 0;}
        }

        /* Estilos para el contenido del modal */
        .modal-content {
            text-align: center;
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 70%;
            border-radius: 10px;
            animation: slideIn 0.5s;
        }

        /* Animación de slideIn */
        @keyframes slideIn {
            from {transform: translateY(-100px);}
            to {transform: translateY(0);}
        }
    </style>
    </head>
    <body>
        <?php require_once "../layout/header.php" ?>
        <br>

        <h4>CORDINACIÓN DE HORARIO</h4>
        <button id="openModalBtn">Agregar horario</button>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Horario</th>
                    <th>Programas</th>
                </tr>
            </thead>
            <tbody>
                <?php require_once "../back-php/horario-backend.php" ?>
            </tbody>
        </table>

        <!-- El Modal -->
        <div id="myModal" class="modal">
            <!-- Contenido del Modal -->
            <div class="modal-content">
                <p>Este es el contenido del modal mejorado.</p>
            </div>
        </div>

        <br>
        <?php require_once "../layout/footer.php" ?>
        <script src="../js/horario.js"></script>
    </body>
</html>