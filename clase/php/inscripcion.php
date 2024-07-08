<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Incripcion</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header>
            <?php require_once "../layout/header.php" ?>
        </header>

            <form action="" method="post" class="form-ins">
                <h2>Nuevas inscripciones</h2>
                <div>
                    <label>Nombre</label>
                    <input type="text">
                </div>
                <div>
                    <label>Identificación</label>
                    <input type="text">
                </div>
                <div>
                    <label>Dirección</label>
                    <input type="text">
                </div>
                <div>
                    <label>Teléfono</label>
                    <input type="text">
                </div>
                <div>
                    <label>Email</label>
                    <input type="email">
                </div>
                <div class="select-container">
                    <label for="mySelect">Selecciona una opción:</label>
                    <select id="mySelect">
                        <option value="opcion1">Opción 1</option>
                        <option value="opcion2">Opción 2</option>
                        <option value="opcion3">Opción 3</option>
                    </select>
                </div>
                <div class="radio-ins">
                    <h3>Horario de estudio</h3>
                    <label>Mañana</label>
                    <input type="radio" name="" id="">
                    <label>Tarde</label>
                    <input type="radio" name="" id="">
                    <label>Noche</label>
                    <input type="radio" name="" id="">
                </div>
                <section>
                    <button class="button">Enviar</button>
                    <button class="reset" type="reset">Borrar</button>
                </section>
            </form>

        <footer>
            <?php require_once "../layout/footer.php" ?>
        </footer>
    </body>
</html>