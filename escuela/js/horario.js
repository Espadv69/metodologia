// Obtener el modal
let modal = document.getElementById("myModal");

// Obtener el botón que abre el modal
let btn = document.getElementById("openModalBtn");

// Obtener el elemento <span> que cierra el modal
let span = document.getElementsByClassName("close")[0];

// Cuando el usuario haga clic en el botón, abrir el modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// Cuando el usuario haga clic en <span> (x), cerrar el modal
span.onclick = function() {
    closeModal();
}

// Cuando el usuario haga clic en cualquier lugar fuera del modal, cerrarlo
window.onclick = function(event) {
    if (event.target == modal) {
        closeModal();
    }
}

// Función para cerrar el modal con animación
function closeModal() {
    modal.style.animation = "fadeOut 0.5s";
    setTimeout(function() {
        modal.style.display = "none";
        modal.style.animation = "fadeIn 0.5s";
    }, 500);
}