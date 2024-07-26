<?php
    require_once "./back-end/conn.php";

    if (isset($_POST["video_upload"])) {
        $maxSize = 52428800;
        $file_name = $_FILES["file_video"]["name"];
                
        $image_info = explode(".", $file_name);
        $name = format_uri($image_info[0]);
        $image_type = end($image_info);
        $file_video = $name . "-" . rand(10, 999) . "." . $image_type;
            
        $target = "./videos/";
        $target_file = $target . $file_video;
            
        $videoFileType = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $arr_extensions = array(
            "mp4", "avi", "3gp", "mov", "mpeg", "mkv", "flv", "wmv", 
            "webm", "m4v", "vob", "ogv", "f4v", "f4p", "f4a", "f4b",
            "rm", "rmvb", "asf", "ts", "mts", "m2ts", "mxf", "roq",
            "nsv", "dv", "divx", "xvid", "amv"
        );
            
        if (in_array($videoFileType, $arr_extensions)) {
            if (($_FILES["file_video"]["size"] <= $maxSize) && ($_FILES["file_video"]["size"] > 0)) {
                if (move_uploaded_file($_FILES["file_video"]["tmp_name"], $target_file)) {
                    $nombre = htmlentities($_POST["nombre"]);
                    $query = $db->prepare("INSERT INTO video(`nombre`, `ubicacion`) VALUES (:nombre, :ubicacion)");
            
                    $query->bindParam(":nombre", $nombre);
                    $query->bindParam(":ubicacion", $file_video);
                    $query->execute();
            
                    if ($query->rowCount() > 0) {
                        header("Location: ./index.php?estado=ok");
                        exit();
                    } else {
                        $error = "Error al guardar en la base de datos.";
                    }
                } else {
                    $error = "No se pudo mover el archivo.";
                }
            } else {
                $error = "Archivo demasiado pesado o vacío.";
            }
        } else {
            $error = "Tipo de archivo no permitido.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./css/style.css">
        <style>

            h3 {
                text-transform: uppercase;
                font-size: 24px;
                text-align: center;
                margin-bottom: 1rem;
                margin-top: 1rem;
                color: red;
                letter-spacing: 5px;
                text-shadow: 0px 1px 1px black;
            }

            .form-ges {
                color: whitesmoke;
                margin: auto;
                width: 100%;
                max-width: 350px;
                padding: 3rem 1rem;
                display: flex;
                flex-direction: column;
                gap: 2rem;
                justify-content: center;
                align-content: center;
                align-items: center;
                background-color: red;
                border-radius: 1rem;
                box-shadow: 0px 0px 10px #00000080;

                label {
                    font-weight: bold;
                }

                input {
                    width: 100%;
                    padding: .5rem;
                    border: none;
                    outline: none;
                }

                input[type="file"] {
                    color: black;
                    font-size: 16px;
                    padding: 10px;
                    border: none;
                    outline: none;
                    background-color: #f1f1f1;
                }

                input[type="file"]:hover {
                    background-color: #e1e1e1;
                    border-color: #888;
                }

                button {
                    font-weight: bold;
                    cursor: pointer;
                    padding: .5rem 1.4rem;
                    color: whitesmoke;
                    border: 2px solid whitesmoke;
                    background: #ffffff40;
                    backdrop-filter: blur(10px);
                    transition: background 300ms ease;
                }
                
                button:hover {
                    background-color: red;
                }
            }

            .alert-error { color: red; }
            .alert-success { color: green; }

        </style>
    </head>
    <body>

    <?php require_once "./layout/header.php" ?>
    <main class="main-gestion">
        <h3>Subir videos</h3>
        <?php
            if (isset($error)) {
                echo "<div class='alert-error'>" . $error . "</div>";
            }

            if (isset($_GET["estado"]) && $_GET["estado"] == "ok") {
                echo "<div class='alert-success'>VIDEO SUBIDO CON ÉXITO</div>";
            }
        ?>

        <form action="" method="post" enctype="multipart/form-data" class="form-ges">
            <div>
                <label>Nombre de video:</label>
                <input type="text" name="nombre" placeholder="Nombre del video" required>
            </div>

            <div>
                <label class="custom-file-label selected">Video:</label>
                <input type="file" name="file_video" class="custom-file-input" required>
            </div>

            <button type="submit" name="video_upload">Subir video</button>
        </form>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(".custom-file-input").on("change", function() {
            const filename = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(filename);
        });
    </script>
    </body>
</html>