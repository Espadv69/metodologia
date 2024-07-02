<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>

    <!--- NAVBAR -->
        <div class="navbar">
        <span class="menu-icon" onclick="openNav()">&#9776;</span>
        <a href="#home">Inicio</a>
        </div>

            <div id="myOffcanvas" class="offcanvas">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="./home.php">Inicio</a>
                <a href="./compras.php">Compras</a>
                <a href="./menu.php">Menu</a>
                <a href="./receta.php">Receta</a>
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