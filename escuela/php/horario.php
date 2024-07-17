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
                        outline-color: #45a049;
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
            }

            /* Estilos para el encabezado de la tabla */
            thead {
                background-color: #4CAF50;
                color: white;
            }

            th {
                padding: 12px 15px;
                text-align: left;
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
            .check-boxes {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                gap: 1rem;
                background-color: #4CAF5050;
                padding: 1rem;
            }
        </style>
    </head>
    <body>
        <?php require_once "../layout/header.php" ?>
        <br>

        <h4>CORDINACIÓN DE HORARIO</h4>
        <button id="openModalBtn">Agregar horario</button>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Horario</th>
                    <th>Programas</th>
                </tr>
            </thead>
            <tbody>
                <?php /*
                    require_once "../back-php/horario-backend.php";

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
                                <td> " . $n . "</td>
                                <td> " . $value['nombre'] . "</td>
                                <td> " . $value['apellido'] . "</td>
                                <td> " . $value['horario'] . "</td>
                                <td> " . $value['programa'] . "</td>
                            </tr>
                            ";
                        }
                    }
                    $db = null;
                */?>
            </tbody>
        </table>

        <!-- El Modal -->
        <div id="myModal" class="modal">
            <!-- Contenido del Modal -->
            <div class="modal-content">
                <h4>Horarios</h>
                <form action="" method="">

                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre">

                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido">

                    <label for="horario">Horario:</label>
                    <input type="text" id="horario">

                    <hr>
                    <div class="check-boxes">
                        <label>Programas:</label>

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