<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./css/style.css">
        <?php
            require_once "./back-end/conn.php";
            
            if(isset($_POST["video_upload"])) {
                $maxSize = 52428800;
                $file_name = $_FILES["file_video"]["videos"];

                $image_info = explode(" . ", $file_name);
                $name = format_uri($image_info[0]);
                $image_type = end($image_info);
                $file_video = $name . " " . rand(10, 999) . " " . $image_type;

                $target = "./videos/";
                $target_file = $target . $target_video;

                $videoFileType = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                $arr_extensions = array(
                    "mp4", "avi", "3gp", "mov", "mpeg", "mkv", "flv", "wmv", 
                    "webm", "m4v", "vob", "ogv", "f4v", "f4p", "f4a", "f4b",
                    "rm", "rmvb", "asf", "ts", "mts", "m2ts", "mxf", "roq",
                    "nsv", "dv", "divx", "xvid", "amv"
                );

                if(in_array($videoFileType, $arr_extensions)) {

                    if(($_FILES["file_video"]["size"] >= $maxSize) || ($_FILES["file_video"]["size"] == 0))  {
                        $error = "Archivo pesado";
                    }

                } else {

                    if(move_uploaded_file($_FILES["file_video"]["tmp_name"], $target_file)) {
                        $name = htmlentities($_POST["nombre"]);
                        $query = $db -> prepare("INSERT INTO video(`nombre`, `ubicacion`) VALUES (:nombre, :ubicacion)");

                        $query -> bindParam(":nombre", $nombre);
                        $query -> bindParam(":ubicacion", $file_video);
                        $query -> execute();
                    }

                }
            }
        ?>
    </head>
    <body>
        <?php require_once "./layout/header.php" ?>
    </body>
</html>