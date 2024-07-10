<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <!-- Form login -->
        <form action="./back-php/log-backend.php" method="post" class="log-reg-form">
            <input type="email" name="email" placeholder="nombre@ejemplo.com" required>
            <input type="password" name="pass" placeholder="Ingrese una contraseña" required>
            <button>Entrar</button>
            <p>Si aún no estas registrado <a href="./php/reg.php">pinche aquí</a> ⬅️</p>
        </form>
    </body>
</html>