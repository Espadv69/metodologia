<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="icon" type="image/png" href="./img/1.png">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body class="index-body">
        <form action="./php-backend/log-backend.php" method="post" class="form-log-reg">
            <h2>LOGIN</h2>
            <input type="email" name="email" placeholder="nombre@ejemplo.com" required>
            <input type="password" name="pass" placeholder="Ingrese su contraseña" required>
            <button>Entrar</button>
            <p>Si aún no tienes cuenta <a href="./php/register.php">pincha aquí</a>👈</p>
        </form>
    </body>
</html>