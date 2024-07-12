<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alumno</title>
        <link rel="stylesheet" href="../css/style.css">
        <style>
            body {
                background-color: #121212;
            }
        </style>
    </head>
    <body>
        <div class="div-alert">
            <?php 
                echo "Has recibido un mensaje del profesor: <br>";
                echo "<span class='span-comentario'><span style='color: red'>Identificación: </span>" . $_REQUEST["id"] . "<br><span style='color: red'>Mensaje: </span>" . $_REQUEST["texto"] . "</span>";
            ?>
            <span class="cerrar" onclick="cerrarAlerta()">X</span>
        </div>

        <script>
            function cerrarAlerta() {
                let alerta = document.querySelector(".div-alert");
                alerta.style.display = "none";
            }
        </script>
    </body>
</html>