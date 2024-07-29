<link rel="stylesheet" href="../css/style_navbar.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<nav class="nav">
    <ul class="nav__ul">
        <li class="nav__li home"><a href=""><i class="bi bi-house-fill"> Home</i></a></li>
        <li class="nav__li"><a id="openModal"><i class="bi bi-person-arms-up"></i> Cliente</a></li>
        <li class="nav__li"><a href=""><i class="bi bi-person-walking"></i> Entrenador</a></li>
    </ul>
</nav>

<!-- Modal para Cliente -->
<div id="clientModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Iniciar Sesión Cliente</h2>
        <form>
            <div>
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <p>Si ha olvidado la contraseña <a href="">pinche aquí</a></p>

            <div class="modal-footer">
                <button type="button">Iniciar Sesión</button>
                <button type="reset">Borrar</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Obtener elementos del DOM
    const modal = document.getElementById("clientModal");
    const openModal = document.getElementById("openModal");
    const closeModalButtons = document.querySelectorAll(".close");

    // Abrir modal
    openModal.onclick = function() {
        modal.style.display = "block";
    }

    // Cerrar modal
    closeModalButtons.forEach(button => {
        button.onclick = function() {
            modal.style.display = "none";
        }
    });

    // Cerrar modal si se hace clic fuera de él
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>