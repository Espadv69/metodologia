function toggleMenu() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        let dropdowns = document.getElementsByClassName("dropdown-content");
        for (let i = 0; i < dropdowns.length; i++) {
            let openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function toggleMenu() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function openModal(modalId) {
    document.getElementById(modalId).style.display = "block";
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        let dropdowns = document.getElementsByClassName("dropdown-content");
        for (let i = 0; i < dropdowns.length; i++) {
            let openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }

    // Close modals if the user clicks outside of them
    if (event.target.classList.contains('modal')) {
        let modals = document.getElementsByClassName("modal");
        for (let i = 0; i < modals.length; i++) {
            modals[i].style.display = "none";
        }
    }
}

// Function to entry in modify
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente

    // Usuario y contraseña definidos
    const crearUsuario = 'Aitor';
    const crearPass = '1234';

    // Capturar los valores de los campos de entrada
    const usuario = document.querySelector('input[name="usuario"]').value;
    const pass = document.querySelector('input[name="pass"]').value;

    // Validar los valores ingresados
    if (usuario === crearUsuario && pass === crearPass) {
        document.getElementById('message').textContent = 'Login exitoso';
        document.getElementById('message').style.color = 'green';

        // Aquí podrías redirigir al usuario a otra página
        window.location.href = './modificar.php';
    } else {
        document.getElementById('message').textContent = 'Usuario o contraseña incorrectos';
        document.getElementById('message').style.color = 'red';
    }
});

// Function to entry in delete
document.getElementById('loginForm2').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente

    // Usuario y contraseña definidos
    const crearUsuario2 = 'Aitor';
    const crearPass2 = '1234';

    // Capturar los valores de los campos de entrada
    const usuario2 = document.querySelector('input[name="usuario2"]').value;
    const pass2 = document.querySelector('input[name="pass2"]').value;

    // Validar los valores ingresados
    if (usuario2 === crearUsuario2 && pass2 === crearPass2) {
        document.getElementById('message2').textContent = 'Login exitoso';
        document.getElementById('message2').style.color = 'green';

        // Aquí podrías redirigir al usuario a otra página
        window.location.href = './eliminar.php';
    } else {
        document.getElementById('message2').textContent = 'Usuario o contraseña incorrectos';
        document.getElementById('message2').style.color = 'red';
    }
});