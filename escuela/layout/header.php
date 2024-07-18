<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NavBar</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <style>

        </style>
    </head>
    <body>
    <div class="navbar">   
        <div class="dropdown">
            <button onclick="toggleMenu()" class="dropbtn btn"><i class="bi bi-list"></i></button>
            <div id="myDropdown" class="dropdown-content">
                <a href="./inscripcion.php"><i class="bi bi-person-fill-add"></i> Registro estudiantes</a>
                <a onclick="openModal('modal2')"><i class="bi bi-person-vcard-fill"></i> Consultar estudiantes</a>
                <a onclick="openModal('modal3')"><i class="bi bi-person-fill-add"></i> Registro profesores</a>
                <a href="./reg-notas.php"><i class="bi bi-card-checklist"></i> Registro de notas</a>
                <a onclick="openModal('modal4')"><i class="bi bi-scissors"></i> Modificar</a>
                <a onclick="openModal('modal5')"><i class="bi bi-trash-fill"></i> Eliminar</a>
            </div>
        </div>
        <details class="drop-hand">
            <summary><i class="bi bi-bank2"></i>BILL</summary>
            <a href="./estado.php">Estado de cuenta</a>
            <a href="./auditoria.php">Auditoria</a>
        </details>
        <details class="drop-hand">
            <summary><i class="bi bi-microsoft-teams"></i>TEAM</summary>
            <a href="./horario.php">Horario</a>
        </details>
        <a href="./home.php" class="a btn"><i class="bi bi-house-door-fill"></i> INICIO</a>
    </div> 

    <!-- Modals -->
    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal2')">&times;</span>
            <h2>Consultar estudiantes</h2>
            <form action="../back-php/con-estudiantes-backend.php" method="post">
                <input type="text" class="id" name="id" placeholder="Identificación del alumno" required>
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
            <h2>Modificar</h2>
            <form class="modify" id="loginForm">
                <input type="text" name="usuario" placeholder="Ingrese su usuario" required>
                <input type="password" name="pass" placeholder="Ingrese su contraseña" required>
                <button type="submit">Entrar</button>
            </form><br>
            <p id="message"></p>

        </div>
    </div>

    <div id="modal5" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal5')">&times;</span>
            <h2>Eliminar</h2>
            <form class="modify" id="loginForm2">
                <input type="text" name="usuario2" placeholder="Ingrese su usuario" required>
                <input type="password" name="pass2" placeholder="Ingrese su contraseña" required>
                <button type="submit">Entrar</button>
            </form><br>
            <p id="message2"></p>            
        </div>
    </div>
    
    <script src="../js/navbar.js"></script>
    </body>
</html>