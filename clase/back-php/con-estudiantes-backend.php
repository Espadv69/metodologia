<style>
    body {
        background-color: #121212;
    }

    .modal-consultar {
        color: whitesmoke;
        font-size: 22px;
        line-height: 1.9;
        font-weight: 400;
    }

    .span {
        color: red;
        font-weight: bold;
    }

    .volver {
        font-weight: bold;
        text-transform: uppercase;
        font-family: "Roboto", sans-serif;
        letter-spacing: 5px;
        margin-top: 5vh;
        text-decoration: none;
        color: red;
        padding: .5rem 1rem;
        border: 2px solid whitesmoke;
        transition: all 300ms ease;
    }

    .volver:hover {
        background-color: red;
        color: whitesmoke;
    }
</style>
<body>
    <h5 class="modal-consultar">
    <?php 
    // CONNECTION
    require_once "./conn.php";

    // CHECK
    $check_all = mysqli_query($conn, "SELECT nombre, id, apto FROM notas WHERE id='$_REQUEST[id]'") or die ("No se encuentra el número de identificación");

    // ARRAY
    if($row = mysqli_fetch_array($check_all)) {
        echo "El nombre del estudiante es: <span class='span'>" . $row["nombre"] . "</span><br>El número de identificación del estudiante es: <span class='span'>" . $row["id"] . "</span><br>El alumno es: <span class='span'>" . $row["apto"] . "</span>";
    }
    ?>
    </h5>

    <?php
    // BUTTON 
    echo "<a href='../php/home.php' class='volver'>Volver</a><br><br>";
    ?>
</body>
