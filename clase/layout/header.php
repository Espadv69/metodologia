<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NavBar</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
    <div class="navbar">   
        <div class="dropdown">
            <button onclick="toggleMenu()" class="dropbtn btn"><i class="bi bi-list"></i>Menu</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#link1"><i class="bi bi-person-fill-add"></i> Registro estudiantes</a>
                <a href="#link2"><i class="bi bi-person-vcard-fill"></i> Consultar estudiantes</a>
                <a href="#link3"><i class="bi bi-person-fill-add"></i> Registro profesores</a>
                <a href="#link3"><i class="bi bi-card-checklist"></i> Registro de notas</a>
            </div>
        </div>
        <a href="#" class="a btn"><i class="bi bi-house-door-fill"></i> INICIO</a>
    </div> 
    <script src="../js/navbar.js"></script>
    </body>
</html>