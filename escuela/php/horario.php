<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Horario</title>
        <link rel="stylesheet" href="../css/style.css">
            <style>
            /* Estilos para el botón */
            button {
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
                border: none;
                background-color: #4CAF50;
                color: white;
                border-radius: 5px;
                transition: background-color 0.3s;
            }

            button:hover {
                background-color: #45a049;
            }

            #openModalBtn {
                margin-top: 2rem;
                width: 200px;
                margin-left: 10%;
            }

            /* Estilos para el modal */
            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0, 0, 0, 0.5);
                animation: fadeIn 0.3s;
            }

            /* Animación de fadeIn */
            @keyframes fadeIn {
                from {opacity: 0;}
                to {opacity: 1;}
            }

            /* Animación de fadeOut */
            @keyframes fadeOut {
                from {opacity: 1;}
                to {opacity: 0;}
            }

            /* Estilos para el contenido del modal */
            .modal-content {
                text-align: center;
                background-color: #fefefe;
                margin: 10% auto;
                padding: 20px;
                border: 1px solid #888;
                width: 70%;
                border-radius: 10px;
                animation: slideIn 0.5s;

                form {
                    margin-top: 1rem;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    letter-spacing: 0;
                    gap: .6rem;
                    
                    label {
                        text-decoration: none;
                        color: black;
                        text-shadow: none;
                        font-size: 14px;
                    }

                    input {
                        padding: 1rem;
                        border-radius: .5rem;
                        border: none;
                        border-left: 2px solid #45a049;
                        border-right: 2px solid #45a049;
                        background: transparent;
                        outline: none;
                    }
                }
            }

            /* Animación de slideIn */
            @keyframes slideIn {
                from {transform: translateY(-100px);}
                to {transform: translateY(0);}
            }

            /* Estilos generales para la tabla */
            table {
                width: 90%;
                margin: 10px auto;
                border-collapse: collapse;
                font-family: Arial, sans-serif;
                margin-bottom: 15vh;
            }

            /* Estilos para el encabezado de la tabla */
            thead {
                background-color: #4CAF50;
                color: white;
            }

            th {
                text-align: center;
                padding: 12px 15px;
                border-bottom: 1px solid #ddd;
            }

            /* Estilo para el primer th (el número) */
            th:first-child {
                border-top-left-radius: 5px;
            }

            /* Estilo para el último th (los programas) */
            th:last-child {
                border-top-right-radius: 5px;
            }

            td {
                text-align: center;
                border: 1px solid #ddd;
                padding: 1rem;
            }
            .check-boxes {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                gap: 1rem;
                background-color: #4CAF5050;
                padding: 1rem;
            }
            .responsive-table {
                width: 100%;
                border-collapse: collapse;
            }


            @media screen and (max-width: 500px) {
                .responsive-table thead {
                    display: none;
                }

                .responsive-table, 
                .responsive-table tbody, 
                .responsive-table tr, 
                .responsive-table td {
                    display: block;
                    width: 100%;
                    border: none;
                }

                .responsive-table tr {
                    margin-bottom: 1.5rem;
                    border: 2px solid #ddd;
                }

                .responsive-table td {
                    text-align: right;
                    padding-left: 50%;
                    position: relative;
                    border-bottom: 1px solid #ddd;
                }

                .responsive-table td::before {
                    content: attr(data-label);
                    position: absolute;
                    left: 0;
                    width: 50%;
                    padding-left: 15px;
                    font-weight: bold;
                    text-align: left;
                }
            }
        </style>
    </head>
    <body>
        <?php require_once "../layout/header.php" ?>
        <br>

        <h4>CORDINACIÓN DE HORARIO</h4>
        <button id="openModalBtn">Agregar horario</button>
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido(s)</th>
                    <th>Horario</th>
                    <th>Programas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once "../back-php/horario-backend.php";
                    $query = $db -> prepare("SELECT * FROM personal");
                    $query -> execute();

                    if($query -> rowCount() == 0) {
                        echo "
                        <tr>
                            <td colspan='5'></td>
                        </tr>
                        ";
                    } else {
                        $n = 0;
                        $data = $query -> fetchAll();

                        foreach($data as $value) {
                            $n++;
                            echo "
                            <tr>
                                <td data-label='#'> " . $n . "</td>
                                <td data-label='Nombre'> " . $value['nombres'] . "</td>
                                <td data-label='Apellido(s)'> " . $value['apellidos'] . "</td>
                                <td data-label='Horario'> " . $value['horario'] . "</td>
                                <td data-label='Programas'> " . $value['programas'] . "</td>
                            </tr>
                            ";
                        }
                    }
                    $db = null;
                ?>
            </tbody>
        </table>

        <!-- El Modal -->
        <div id="myModal" class="modal">
            <!-- Contenido del Modal -->
            <div class="modal-content">
                <h4>Horarios</h>
                <form action="../back-php/insert-horario-backend.php" method="post">

                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombres">

                    <label for="apellidos">Apellido:</label>
                    <input type="text" id="apellidos" name="apellidos">

                    <label for="horario">Horario:</label>
                    <input type="text" id="horario" name="horario">

                    <label>Programas:</label>
                    <hr>
                    <div class="check-boxes">

                        <div>
                            <label for="java">Java</label>
                            <input type="checkbox" id="java" name="programas[]" value="JAVA">
                        </div>
                        
                        <div>
                            <label for="JS">JS</label>
                            <input type="checkbox" id="JS" name="programas[]" value="JS">
                        </div>

                        <div>
                            <label for="JSP">JSP</label>
                            <input type="checkbox" id="JSP" name="programas[]" value="JSP">
                        </div>

                        <div>
                            <label for="PHP">PHP</label>
                            <input type="checkbox" id="PHP" name="programas[]" value="PHP">
                        </div>

                        <div>
                            <label for="HTML">HTML</label>
                            <input type="checkbox" id="HTML" name="programas[]" value="HTML">
                        </div>

                        <div>
                            <label for="CSS">CSS</label>
                            <input type="checkbox" id="CSS" name="programas[]" value="CSS">
                        </div>
                    </div>

                    <div class="btn">
                        <button>Guardar</button>
                        <button type="reset">Borrar</button>
                    </div>

                </form>
            </div>
        </div>

        <br>
        <?php require_once "../layout/footer.php" ?>
        <script src="../js/horario.js"></script>
    </body>
</html>