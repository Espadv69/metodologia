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

            .btns {
                display: flex;
                justify-content: space-between;
            }

            .btn-print-send {
                cursor: pointer;
                margin-top: 1vh;
                font-weight: bold;
                text-transform: uppercase;
                border: 2px solid gray;
                outline: none;
                background: transparent;
                padding: .5rem;
                border-radius: .5rem;
            }

            .green {
                border: 2px solid lightgreen;
                color: green;
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
                <a href="#" class="course-link" data-course="HTML" data-invoice="
                    <strong>Factura del curso de HTML</strong><br>
                    Nombre del curso: HTML Básico<br>
                    Precio: $50<br>
                    Fecha: 11/07/2024<br>
                    Duración: 4 semanas<br>
                    Instructor: Juan Pérez<br>
                    Descripción: Curso introductorio a HTML para principiantes.<br>
                    <div class='btns'>
                        <button onclick='buy()' class='btn-print-send green' >Comprar</button>
                    <button onclick='print()' class='btn-print-send' >Imprimir</button>
                    </div>
                "><i class="bi bi-filetype-html"></i> HTML</a>
                <a href="#" class="course-link" data-course="CSS" data-invoice="
                    <strong>Factura del curso de CSS</strong><br>
                    Nombre del curso: CSS Avanzado<br>
                    Precio: $75<br>
                    Fecha: 11/07/2024<br>
                    Duración: 6 semanas<br>
                    Instructor: María García<br>
                    Descripción: Curso avanzado de CSS para desarrolladores.<br>
                    <div class='btns'>
                        <button onclick='buy()' class='btn-print-send green' >Comprar</button>
                    <button onclick='print()' class='btn-print-send' >Imprimir</button>
                    </div>
                "><i class="bi bi-filetype-css"></i> CSS</a>
                <a href="#" class="course-link" data-course="JS" data-invoice="
                    <strong>Factura del curso de JavaScript</strong><br>
                    Nombre del curso: JavaScript Completo<br>
                    Precio: $100<br>
                    Fecha: 11/07/2024<br>
                    Duración: 8 semanas<br>
                    Instructor: Carlos López<br>
                    Descripción: Curso completo de JavaScript, desde básico hasta avanzado.<br>
                    <div class='btns'>
                        <button onclick='buy()' class='btn-print-send green' >Comprar</button>
                    <button onclick='print()' class='btn-print-send' >Imprimir</button>
                    </div>
                "><i class="bi bi-filetype-js"></i> JS</a>
                <a href="#" class="course-link" data-course="PHP" data-invoice="
                    <strong>Factura del curso de PHP</strong><br>
                    Nombre del curso: PHP para Web<br>
                    Precio: $90<br>
                    Fecha: 11/07/2024<br>
                    Duración: 6 semanas<br>
                    Instructor: Ana Martínez<br>
                    Descripción: Curso de PHP para desarrollo web.<br>
                    <div class='btns'>
                        <button onclick='buy()' class='btn-print-send green' >Comprar</button>
                    <button onclick='print()' class='btn-print-send' >Imprimir</button>
                    </div>
                "><i class="bi bi-filetype-php"></i> PHP</a>
            </div>
        </footer>

            <!-- The Modal -->
        <div id="invoiceModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Factura</h2>
                <p id="invoiceContent"></p>
            </div>
        </div>

        <script src="../js/footer.js"></script>

    </body>
</html>