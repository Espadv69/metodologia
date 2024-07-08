<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <form action="../back-php/reg-backend.php" method="post" class="log-reg-form">
            <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
            <input type="text" name="usuario" placeholder="Ingrese su nombre de usuario" required>
            <input type="email" name="email" placeholder="nombre@ejemplo.com" required>
            <input type="password" name="pass" placeholder="Ingrese una contraseña" required>
            <button>REGISTRAR</button>
        </form>
    </body>
</html>