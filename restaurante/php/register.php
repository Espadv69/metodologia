<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link rel="icon" type="image/png" href="../img/1.png">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body class="index-body">

        <!-- FORMULARIO REGISTRO -->
        <form action="../php-backend/reg-backend.php" method="post" class="form-log-reg">
            <h2>REGISTRO</h2>
            <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
            <input type="text" name="usuario" placeholder="Ingrese su nombre de usuario" required>
            <input type="email" name="email" placeholder="nombre@ejemplo.com" required>
            <input type="password" name="pass" placeholder="Ingrese su contraseña" required>
            <button>Entrar</button>
            <p>Si ya estás registrado <a href="../index.php">pincha aquí</a>👈</p>
        </form>
    </body>
</html>