<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Footer</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <style>
            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0,0.4);
                padding-top: 60px;
            }
            .modal-content {
                background-color: #fefefe;
                margin: 5% auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
            }
            .close {
                color: #aaa;
                float: right;
                font-size: 28px;
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
        
        <footer class="footer-lay">
            <div>
            <!-- logo -->
             <img src="../img/logo-escuela.jpg" alt="ES UN LOGO DE LA ESCUELA CON EL NOMBRE DE AITOR" width="100%">
            </div>
            <h4>Nuestros cursos</h4>
            <div class="footer-items">
                <a class="course-link" data-course="HTML"><i class="bi bi-filetype-html"></i> HTML</a>
                <a class="course-link" data-course="CSS"><i class="bi bi-filetype-css"></i> CSS</a>
                <a class="course-link" data-course="JS"><i class="bi bi-filetype-js"></i> JS</a>
                <a class="course-link" data-course="PHP"><i class="bi bi-filetype-php"></i> PHP</a>
            </div>
        </footer>

            <!-- The Modal -->
        <div id="invoiceModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Factura</h2>
                <p id="invoiceContent">Aquí va el contenido de la factura</p>
            </div>
        </div>

        <script src="../js/footer.js"></script>

    </body>
</html>