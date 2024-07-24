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
                $maxSize = 5242880;
                $file_name = $_FILES["file_video"]['videos'];

                $image_info = explode(" . ", $file_name);
                $name = format_uri($image_info[0]);
                $image_type = end($image_info);
                $file_video = $name . " " . rand(10, 999) . " " . $image_type;

                $target = "./videos/";
                $target_file = $target . $target_video;
            }
        ?>
    </head>
    <body>
        <?php require_once "./layout/header.php" ?>
    </body>
</html>