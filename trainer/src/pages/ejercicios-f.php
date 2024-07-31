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

        .sentadillas,
        .flexiones,
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
        <img src="https://cdn.pixabay.com/photo/2024/01/10/05/33/ai-generated-8498921_1280.jpg" width="100%" style="max-width: 300px; border-radius: 1rem;">
    </div>
    <h2>Ejercicios de Fuerza</h2>

    <div class="container">
        <button class="button" onclick="openModal('modal1')">Sentadillas</button>
        <button class="button" onclick="openModal('modal2')">Flexiones</button>
        <button class="button" onclick="openModal('modal3')">Press de banca</button>
    </div>

    <!-- Modal 1 -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal1')">&times;</span>
            <h4>Sentadillas</h4>
            <p>Las sentadillas son un excelente ejercicio para fortalecer las piernas y glúteos.</p>
            <div class="sentadillas">
            <img src="https://media.tenor.com/pdMmsiutWkcAAAAM/gym.gif" width="100px">
            <h4>Descansos de 1 min 30 seg</h4>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal2')">&times;</span>
            <h4>Flexiones</h4>
            <p>Las flexiones trabajan los músculos del pecho, los hombros y los tríceps.</p>
            <div class="flexiones">
                <img src="https://hips.hearstapps.com/hmg-prod/images/pushup-1525365829.gif?resize=2048:*" width="100px">
                <h4>Descansos entre series de 2 min 30 seg</h4>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal3')">&times;</span>
            <h4>Press de Banca</h4>
            <p>El press de banca es ideal para desarrollar la fuerza del pecho y los brazos.</p>
            <div class="press">
                <img src="https://hips.hearstapps.com/hmg-prod/images/bench-press-1568117208.gif" width="100px">
                <h4>Descansos entre serie de 3 - 4 min</h4>
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
