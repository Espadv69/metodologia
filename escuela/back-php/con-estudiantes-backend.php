<link rel="stylesheet" href="../css/style.css">
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

    .form-consulta {
        padding: 1rem;
        background-color: gray;
        color: whitesmoke;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 1rem;

        input {
            border: none;
            outline: none;
            padding: 1rem;
        }

        label {
            text-transform: uppercase
        }

        textarea {
            border-radius: .5rem;
            font-weight: bold;
            resize: none;
            text-align: center;
            font-size: 16px;
            border: none;
            outline: none;
        }

        button {
            cursor: pointer;
            border-radius: .5rem;
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            font-weight: bold;
            border: 2px solid whitesmoke;
            background: transparent;
            color: whitesmoke;
            padding: 1rem;
        }
    }

    .imprimir {
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
    } else {
        echo "
        <script>
            alert('Alumno inexistente');
            window.location = '../php/reg-notas.php';
        </script>";
    }
    ?>
    </h5>

    <?php
    // BUTTON 
    echo "<br><a href='../php/reg-notas.php' class='volver'>Volver</a><br><br>";
    ?>

    <form action="../php/alumno.php" method="post" class="form-consulta">
        <input type="text" name="id" placeholder="Ingrese el ID" required>
        <label for="textarea">Escribe un comentario al alumno</label>
        <textarea name="texto" id="textarea" rows="7" required></textarea>
        <button>Enviar</button>
    </form>

    <p class="imprimir"></p>
</body>
