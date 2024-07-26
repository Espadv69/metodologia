<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <?php require_once "./layout/header.php" ?>

    <?php require_once "./back-end/conn.php" ?>
    <?php

    $query = $db->prepare("SELECT * FROM video ORDER BY id DESC");
    $query->execute();

    $data = $query->fetchAll();
      foreach ($data as $row) {
          $ubicacion = $row["ubicacion"];
          echo "<div class='print-video'>
                  <video src='videos/" . $ubicacion . "' controls width='100%' height='300px'></video>
                </div>";
      }
    ?>

  </body>
</html>