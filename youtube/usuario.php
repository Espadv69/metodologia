<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        /* Estilos básicos del modal */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            inset: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
        }
        .modal-content {
            position: relative;
            margin: 30dvh auto;
            width: 50%;
            padding: 25px;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            border-radius: 1rem;
            box-shadow: 0px 0px 10px gray;
            background-color: #fefefe;
        }

        .info-modal {
            display: flex;
            flex-direction: column;
            gap: 1rem;

            button {
                cursor: pointer;
                width: 100%;
                max-width: 150px;
                padding: .4rem .6rem;
                font-weight: bold;
                background: #aaaaaa50;
                border: none;
                border-radius: 1rem;
                transition: background 300ms ease;
            }

            button:hover {
                background: #aaaaaa80;
            }
        }
        .close {
            position: absolute;
            right: 10px;
            top: 0px;
            color: #aaa;
            font-size: 40px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php require_once "./layout/header.php" ?>

    <!-- HEADER -->
    <div class="header-user">
        <img src="./img/sand2.jpg" alt="">
    </div>

    <!-- INFO USER -->
    <div class="all-user">
        <div class="info-profile">
            <!-- IMG PROFILE -->
            <img src="./img/profile.jpg" alt="">
            <div class="info">
                <!-- INFO -->
                <h2>Espadv69</h2>
                <h5>@espadv._</h5>
                <p style="cursor: pointer;">Más sobre este canal...<a id="ver-mas">ver más</a></p>
                <!-- LINKS -->
                <div class="links">
                    <a href="#">Personalizar canal</a>
                    <a href="#">Gestionar videos</a>
                </div>
            </div>
        </div>
    </div>

    <!-- VIDEO LINKS -->
    <div class="video-links">
        <a href="#">Inicio</a>
        <a href="#" class="bi bi-search"></a>
    </div>

    <div class="img-empty">
        <img src="https://www.gstatic.com/youtube/img/channels/core_channel_no_activity.svg" alt="">
        <h6>Crear Contenido</h6>
        <p>Sube y graba en casa o en cualquier lugar. Todo lo que hagas público aparecerá aquí.</p>
        <button>Crear</button>
    </div><br><br><br>

    <!-- El Modal -->
    <div class="all-modal">

        <div id="myModal" class="modal">

            <!-- Contenido del Modal -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Sobre</h2>
                <div class="info-modal">
                    <h4>Detalles del canal</h4>
                    <p><i class="bi bi-globe"></i> www.youtube.com/@espadv._</p>
                    <p><i class="bi bi-info-circle"></i> Se unió Jul 23, 2024</p>
                    <button type="button>"><i class="bi bi-share"></i> Compartir</button>
                </div>
            </div>

        </div>

    </div>


    <script>
    // Obtener el modal
    const modal = document.getElementById("myModal");

    // Obtener el enlace que abre el modal
    const link = document.getElementById("ver-mas");

    // Obtener el elemento <span> que cierra el modal
    const span = document.getElementsByClassName("close")[0];

    // Cuando el usuario hace clic en el enlace, abrir el modal 
    link.onclick = function() {
        modal.style.display = "block";
    }

    // Cuando el usuario hace clic en <span> (x), cerrar el modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Cuando el usuario hace clic en cualquier lugar fuera del modal, cerrarlo
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>