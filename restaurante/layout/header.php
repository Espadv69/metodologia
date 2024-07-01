<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="navbar">
        <span class="menu-icon" onclick="openNav()">&#9776;</span>
        <a href="#home">Inicio</a>
        </div>

            <div id="myOffcanvas" class="offcanvas">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#home">Inicio</a>
                <a href="#about">Acerca de</a>
                <a href="#services">Servicios</a>
                <a href="#contact">Contacto</a>
            </div>

        <script>
            function openNav() {
                document.getElementById("myOffcanvas").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("myOffcanvas").style.width = "0";
            }
        </script>
    </body>
</html>