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
                <a href="./inscripcion.php"><i class="bi bi-person-fill-add"></i> Registro estudiantes</a>
                <a onclick="openModal('modal2')"><i class="bi bi-person-vcard-fill"></i> Consultar estudiantes</a>
                <a onclick="openModal('modal3')"><i class="bi bi-person-fill-add"></i> Registro profesores</a>
                <a href="./reg-notas.php"><i class="bi bi-card-checklist"></i> Registro de notas</a>
            </div>
        </div>
        <a href="./home.php" class="a btn"><i class="bi bi-house-door-fill"></i> INICIO</a>
    </div> 
    <!-- Modals -->

    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal2')">&times;</span>
            <h2>Consultar estudiantes</h2>
            <form action="../back-php/con-estudiantes-backend.php" method="post">
                <input type="text" class="id" name="id" placeholder="Identificación del alumno">
                <button class="consultar">Consultar</button>
            </form>
        </div>
    </div>

    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal3')">&times;</span>
            <h2>Registro profesores</h2>
            <ul>
                <li>Prof. luis mariano - (Programacion java)</li>
                <li>Prof. luis mariano - (Programacion java)</li>
                <li>Prof. luis mariano - (Programacion java)</li>
                <li>Prof. luis mariano - (Programacion java)</li>
                <li>Prof. luis mariano - (Programacion java)</li>
            </ul>
        </div>
    </div>

    <div id="modal4" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal4')">&times;</span>
            <h2>Registro de notas</h2>
            <p>Contenido del modal para registrar notas.</p>
        </div>
    </div>
    
    <script src="../js/navbar.js"></script>
    </body>
</html>