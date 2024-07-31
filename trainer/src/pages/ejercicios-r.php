<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de Fuerza</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        h2 {
            text-align: center;
            text-shadow: 0px 2px 3px lightblue;
        }
        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 2rem;
        }
        .button {
            width: 180px;
            padding: .5rem 1.5rem;
            border: 2px solid whitesmoke;
            background: transparent;
            color: whitesmoke;
            text-transform: uppercase;
            font-weight: bold;
            border-radius: 1rem;
            cursor: pointer;
            transition: all 300ms ease;
        }

        .button:hover {
            background-color: #0066ff40;
        }

        .modal {
            color: black;
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            color: whitesmoke;
            text-align: center;
            position: relative;
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 100%;
            max-width: 700px;
            min-height: 50vh;
            overflow-y: auto;
            border-radius: 10px;
            background: #121212;
        }

        .carrera,
        .ciclismo,
        .press {
            margin-top: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 2rem;
            padding: 2rem;
            background: #ffffff20;

            img {
                border-radius: .5rem;
            }
        }

        .close {
            color: #ffffff40;
            position: absolute;
            right: .5rem;
            top: 0;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #fff;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php require_once "../layout/header.php" ?>

    <div style="display: flex; justify-content: center; margin-top: 1rem;">
        <img src="https://cdn.pixabay.com/photo/2024/01/10/05/39/ai-generated-8498943_1280.jpg" width="100%" style="max-width: 300px; border-radius: 1rem;">
    </div>
    <h2>Ejercicios de Resistencia</h2>

    <div class="container">
        <button class="button" onclick="openModal('modal1')">Atletismo</button>
        <button class="button" onclick="openModal('modal2')">Ciclismo</button>
        <button class="button" onclick="openModal('modal3')">Natación</button>
    </div>

    <!-- Modal 1 -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal1')">&times;</span>
            <h4>Carrera de Larga Distancia</h4>
            <p>Descripción: Correr largas distancias, ya sea al aire libre o en una cinta de correr, es un excelente ejercicio de resistencia que ayuda a mejorar la capacidad aeróbica, fortalecer el corazón y aumentar la capacidad pulmonar..</p>
            <div class="carrera">
            <img src="https://www.icegif.com/wp-content/uploads/2023/06/icegif-1258.gif" width="100px">
            <h4>7 Kilómetros los dias de entreno</h4>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal2')">&times;</span>
            <h4>Ciclismo</h4>
            <p>Descripción: Andar en bicicleta, ya sea en exteriores o en una bicicleta estática, es un gran ejercicio para desarrollar la resistencia cardiovascular y muscular, especialmente en las piernas y el core.</p>
            <div class="ciclismo">
                <img src="https://i.pinimg.com/originals/49/57/81/49578197cd70ae883c21b5f2090fc160.gif" width="100px">
                <h4>Recorrer 15 Kilómetros los dias de entreno</h4>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal3')">&times;</span>
            <h4>Natación</h4>
            <p>Descripción: La natación es un ejercicio de bajo impacto que mejora la resistencia cardiovascular y tonifica todo el cuerpo. Es ideal para personas de todas las edades y niveles de condición física.</p>
            <div class="press">
                <img src="https://i.pinimg.com/originals/e8/09/1d/e8091dadf789b159f040bd39348ba3dc.gif" width="100px">
                <h4>2 Horas de natación los dias de entreno</h4>
            </div>
        </div>
    </div>

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        // Cierra el modal al hacer clic fuera de él
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = "none";
            }
        }
    </script>
</body>
</html>