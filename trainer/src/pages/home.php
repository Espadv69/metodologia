<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="../css/style.css">
        <style>
            .body {
                overflow-y: hidden;
            }
            .img-header {
                min-height: 88.4dvh;
                display: grid;
                place-content: center;
                padding: .2rem;
                backdrop-filter: blur(5px);
                overflow-y: hidden;

                img {
                    border-radius: .5rem;
                    box-shadow: 0px 0px 10px lightblue;
                }
            }
        </style>
    </head>
    <body class="body">
        <?php require_once "../layout/header.php" ?>

        <div class="img-header">
            <img src="../img/logo.png" alt="" width="100%" style="max-width: 300px;">
        </div>

    </body>
</html>